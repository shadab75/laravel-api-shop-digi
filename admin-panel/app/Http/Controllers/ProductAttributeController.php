<?php

namespace App\Http\Controllers;

use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
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
    public function store($attributes,$product)
    {
        //

        foreach ($attributes as $attr){
            ProductAttribute::query()->create([
               'product_id'=>$product->id,
               'attribute_id'=>$attr['id'],
                'value'=>$attr['value']
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductAttribute $poductAttribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductAttribute $poductAttribute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($attributeIds)
    {
        //
        foreach ($attributeIds as $key=>$value){
           $productAttribute=ProductAttribute::query()->findOrFail($key);
            $productAttribute->update([
                'value'=>$value
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductAttribute $poductAttribute)
    {
        //
    }
}
