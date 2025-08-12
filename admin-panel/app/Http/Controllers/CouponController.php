<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Coupon\StoreCouponRequest;
use App\Http\Requests\Coupon\UpdateCouponRequest;
use App\Http\Resources\CouponResource;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $coupons = Coupon::query()->latest()->paginate(10);
       return $this->successResponse([
           'coupons'=>CouponResource::collection($coupons),
           'links'=>CouponResource::collection($coupons)->response()->getData()->links,
           'meta'=>CouponResource::collection($coupons)->response()->getData()->meta,
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
    public function store(StoreCouponRequest $request)
    {
        //
        $coupon = Coupon::query()->create([
            'name'=>$request->name,
            'code'=>$request->code,
            'description'=>$request->description,
            'type'=>$request->type,
            'amount'=>$request->amount,
            'percentage'=>$request->percentage,
            'max_percentage_amount'=>$request->max_percentage_amount,
            'expired_at'=>$request->expired_at,

        ]);
        return $this->successResponse(new CouponResource($coupon));

    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        //
        return $this->successResponse(new CouponResource($coupon));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCouponRequest $request, Coupon $coupon)
    {
        //
        $coupon->update([
            'name'=>$request->name,
            'code'=>$request->code,
            'description'=>$request->description,
            'type'=>$request->type,
            'amount'=>$request->amount,
            'percentage'=>$request->percentage,
            'max_percentage_amount'=>$request->max_percentage_amount,
            'expired_at'=>$request->expired_at,
        ]);
        return $this->successResponse(new CouponResource($coupon));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        //
    }
}
