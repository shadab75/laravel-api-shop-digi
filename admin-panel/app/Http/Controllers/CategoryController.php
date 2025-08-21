<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Http\Resources\AttributeCategoryResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $categories = Category::query()->latest()->paginate(10);
     return $this->successResponse([
         'categories'=>CategoryResource::collection($categories),
         'links' => CategoryResource::collection($categories)->response()->getData()->links,
         'meta' => CategoryResource::collection($categories)->response()->getData()->meta,
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
    public function store(StoreCategoryRequest $request)
    {

    DB::beginTransaction();
    $category = Category::query()->create([
        'parent_id'=>$request->parent_id,
        'name'=>$request->name,
        'description'=>$request->description,
        'is_active'=>$request->is_active,
        'categoryable_id'=>$request->categoryable_id,
        'categoryable_type'=>$request->categoryable_type
    ]);
    foreach ($request->attribute_ids as $attributeId){
    $attribute = Attribute::query()->findOrFail($attributeId);
    $attribute->categories()->attach($category->id,[
     'is_filter'=>in_array($attributeId,$request->attribute_is_filter_ids)?1:0,
     'is_variation'=>$request->variation_id==$attributeId?1:0
    ]);
    }
    DB::commit();
    return $this->successResponse(new CategoryResource($category));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        return $this->successResponse(new CategoryResource($category));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
        DB::beginTransaction();
        $category->update([
            'parent_id'=>$request->parent_id,
            'name'=>$request->name,
            'description'=>$request->description,
            'is_active'=>$request->is_active,
            'categoryable_id'=>$request->categoryable_id,
            'categoryable_type'=>$request->categoryable_type
        ]);
        $category->attributes()->sync($request->attribute_ids);
        DB::commit();
        return $this->successResponse(new CategoryResource($category));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }

    public function children(Category $category)
    {
        return $this->successResponse(new CategoryResource($category->load('children')));
    }

    public function parent(Category $category)
    {
        return $this->successResponse(new CategoryResource($category->load('parent')));
    }

    public function attributes(Category $category)
    {
        $attributes = $category->attributes()->wherePivot('is_variation','=',0)->get();
        $variation = $category->attributes()->wherePivot('is_variation','=',1)->first();
        return $this->successResponse([
           'attributes'=>AttributeCategoryResource::collection($attributes),
           'variations'=>$variation
        ]);
    }

    public function product(Category $category)
    {
        $products =  $category->products()->paginate(10);
        return $this->successResponse([
           'products'=>ProductResource::collection($products),
           'links'=>ProductResource::collection($products)->response()->getData()->links,
           'meta'=>ProductResource::collection($products)->response()->getData()->meta,
        ]);
    }


}
