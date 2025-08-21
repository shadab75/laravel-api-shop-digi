<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductCategoryRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;

class ProductController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::query()->with(['brand','category'])->paginate(10);
        return $this->successResponse([
           'product'=>ProductResource::collection($products),
           'meta'=>ProductResource::collection($products)->response()->getData()->meta,
           'links'=>ProductResource::collection($products)->response()->getData()->links
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {

        DB::beginTransaction();
        $productImageController = new ProductImageController();
        $fileNameImages = $productImageController->upload($request->file('primary_image'),$request->file('images'));

        $product = Product::query()->create([
           'name'=>$request->name,
           'brand_id'=>$request->brand_id,
           'category_id'=>$request->category_id,
           'primary_image'=>$fileNameImages['fileNamePrimaryImage'],
           'description'=>$request->description,
           'is_active'=>$request->is_active,
           'delivery_amount'=>$request->delivery_amount
        ]);
        foreach ($fileNameImages['fileNameImages'] as $fileNameImage){
            ProductImage::query()->create([
               'product_id'=>$product->id,
               'image'=>$fileNameImage
            ]);
        }
        $productAttributeController = new ProductAttributeController();
        $productAttributeController->store($request->input('attributes',[]),$product);
        $category = Category::query()->findOrFail($request->category_id);
        $productVariationController = new ProductVariationController();
        $variationAttribute = $category->attributes()->wherePivot('is_variation','=',1)->first();
        if ($variationAttribute){
            $productVariationController->store(
                $request->variation_values,
                $variationAttribute->id,
                $product
            );
        }
        $product->tags()->attach($request->tag_ids);
        DB::commit();
        return $this->successResponse(new ProductResource($product));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return $this->successResponse(new ProductResource($product->load('brand','category','attributes','images','variations.attribute')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
        DB::beginTransaction();
        $product->update([
           'name'=>$request->name,
           'brand_id'=>$request->brand_id,
           'description'=>$request->description,
           'is_active'=>$request->is_active,
           'delivery_amount' => $request->delivery_amount,
        ]);
        $productAttributeController = new ProductAttributeController();
        $productAttributeController->update($request->input('attributes',[]));
        $category = Category::query()->findOrFail($product->category_id);
        $variationAttribute = $category->attributes()->wherePivot('is_variation', '=', 1)->first();
        if ($variationAttribute){
             $productVariationController = new ProductVariationController();
            $productVariationController->update($request->input('variation_values', []));
        }

        $product->tags()->sync($product->tag_ids);
        DB::commit();
        return $this->successResponse(new ProductResource($product));
    }

    public function updateCategory(UpdateProductCategoryRequest $request,Product $product)
    {
     DB::beginTransaction();
     $product->update([
        'category_id'=>$request->category_id,
     ]);
        $productAttributeController = new ProductAttributeController();
        $productAttributeController->change($request->input('attributes',[]),$product);
        $category = Category::query()->find($request->category_id);
        $productVariationController = new ProductVariationController();
        $productVariationController->change($request->input('variations',[]),
            $category->attributes()->wherePivot('is_variation','=',1)->first()->id,
            $product);
        DB::commit();
        return $this->successResponse(new ProductResource($product));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
