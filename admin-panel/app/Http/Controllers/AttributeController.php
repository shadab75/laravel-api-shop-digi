<?php

namespace App\Http\Controllers;

use App\Http\Requests\Attribute\StoreAttributeRequest;
use App\Http\Requests\Attribute\UpdateAttributeRequest;
use App\Http\Resources\AttributeResource;
use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributeController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $attributes = Attribute::query()->latest()->paginate(10);
        return $this->successResponse([
           'attributes'=>AttributeResource::collection($attributes),
           'links'=>AttributeResource::collection($attributes)->response()->getData()->links,
           'meta'=>AttributeResource::collection($attributes)->response()->getData()->meta,
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
    public function store(StoreAttributeRequest $request)
    {
        //
        $attribute = Attribute::query()->create([
           'name'=>$request->name
        ]);
        return $this->successResponse(new AttributeResource($attribute));
    }

    /**
     * Display the specified resource.
     */
    public function show(Attribute $attribute)
    {
        //
        return $this->successResponse(new AttributeResource($attribute));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attribute $attribute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttributeRequest $request, Attribute $attribute)
    {
        //
        $attribute->update([
           'name'=>$request->name,
        ]);
        return $this->successResponse(new AttributeResource($attribute));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attribute $attribute)
    {
        //
    }
}
