<?php

namespace App\Http\Controllers;

use App\Models\ProductVariation;
use Illuminate\Http\Request;

class ProductVariationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store($variations,$attributeId,$product)
    {
        //
      foreach ($variations as $variation){
          ProductVariation::query()->create([
              'attribute_id' => $attributeId,
              'product_id'   => $product->id,
              'value'        => $variation['value'],
              'price'        => $variation['price'],
              'quantity'     => $variation['quantity'],
          ]);
      }

    }

    /**
     * Display the specified resource.
     */
    public function show(ProductVariation $productVariation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductVariation $productVariation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($variations)
    {
        //
        foreach ($variations as $variation){
            $productVariation = ProductVariation::query()->findOrFail($variation['id']);
            $productVariation->update([
                'value'        => $variation['value'],
                'price'        => $variation['price'],
                'quantity'     => $variation['quantity'],
                'sale_price'     => $variation['sale_price']??null,
                'date_on_sale_from'=>$variation['date_on_sale_from']??null,
                'date_on_sale_to'=>$variation['date_on_sale_to']??null,
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductVariation $productVariation)
    {
        //
    }

    public function change($variations,$attribute,$product)
    {
        ProductVariation::query()->where('product_id',$product->id)->delete();
        foreach ($variations as $variation){
            ProductVariation::query()->create([
               'attribute_id'=>$attribute['id'],
               'product_id'=>$product->id,
               'value'=>$variations['value'],
               'price'=>$variations['price'],
               'quantity'=>$variations['value'],
            ]);
        }

    }
}
