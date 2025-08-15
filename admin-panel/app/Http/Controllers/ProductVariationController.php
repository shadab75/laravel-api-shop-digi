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
    public function show(ProductVariation $poductVariation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductVariation $poductVariation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductVariation $poductVariation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductVariation $poductVariation)
    {
        //
    }
}
