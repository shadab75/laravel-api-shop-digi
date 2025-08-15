<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cities = City::query()->with('province')->paginate(10);
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
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
    }
}
