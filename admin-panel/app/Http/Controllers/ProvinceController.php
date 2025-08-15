<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Http\Resources\ProvinceResource;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $provinces = Province::query()->paginate(10);
        return $this->successResponse([
           'provinces'=>ProvinceResource::collection($provinces),
           'links'=>ProvinceResource::collection($provinces)->response()->getData()->links,
           'meta'=>ProvinceResource::collection($provinces)->response()->getData()->meta,
        ]);
    }

    public function cities(Province $province)
    {
        $cities = $province->cities()->paginate(10);
        return $this->successResponse([
           'cities'=>CityResource::collection($cities),
           'links'=>CityResource::collection($cities)->response()->getData()->links,
           'meta'=>CityResource::collection($cities)->response()->getData()->meta,
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Province $province)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $province)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province)
    {
        //
    }
}
