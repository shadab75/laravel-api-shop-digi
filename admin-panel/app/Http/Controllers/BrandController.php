<?php

namespace App\Http\Controllers;

use App\Http\Requests\Brand\StoreBrandRequest;
use App\Http\Requests\Brand\UpdateBrandRequest;
use App\Http\Resources\BrandResource;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $brands = Brand::query()->latest()->paginate(10);
        return $this->successResponse([
           'brands'=>BrandResource::collection($brands),
           'links'=>BrandResource::collection($brands)->response()->getData()->links,
           'meta'=>BrandResource::collection($brands)->response()->getData()->meta,
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
    public function store(StoreBrandRequest $request)
    {
        //
        $brand = Brand::query()->create([
           'name'=>$request->name,
           'is_active'=>$request->is_active,
        ]);
        return $this->successResponse(new BrandResource($brand));
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
        return $this->successResponse(new BrandResource($brand));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        //
        $brand->update([
           'name'=>$request->name,
           'is_active'=>$request->is_active
        ]);
        return $this->successResponse($brand);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
