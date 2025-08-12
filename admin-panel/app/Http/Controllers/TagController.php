<?php

namespace App\Http\Controllers;


use App\Http\Requests\Tag\StoreTagRequest;
use App\Http\Requests\Tag\UpdateTagRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tags = Tag::query()->latest()->paginate(10);
        return $this->successResponse([
           'tags'=>TagResource::collection($tags),
           'links'=>TagResource::collection($tags)->response()->getData()->links,
           'meta'=>TagResource::collection($tags)->response()->getData()->meta
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
    public function store(StoreTagRequest $request)
    {
      $tag = Tag::query()->create([
        'name'=>$request->name,
        'description'=>$request->description,
        'is_active'=>$request->is_active
      ]);
      return $this->successResponse(new TagResource($tag),202);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
        return $this->successResponse(new TagResource($tag));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        //
        $tag->update([
           'name'=>$request->name,
           'description'=>$request->description,
           'is_active'=>$request->is_active
        ]);
        return $this->successResponse(new TagResource($tag));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }

}
