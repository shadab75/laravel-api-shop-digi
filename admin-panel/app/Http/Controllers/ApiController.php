<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function successResponse($data,$code=200,$message=null)
    {
        return response()->json([
           'status'=>'success',
           'data'=>$data,
           'message'=>$message
        ],$code);
    }

    public function errorResponse($code,$message=null)
    {
        return response()->json([
           'status'=>'error',
           'message'=>$message,
           'data'=>null
        ],$code);
    }
}
