<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreartistRequest;
use App\Http\Requests\UpdateartistRequest;
use App\Models\artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreartistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreartistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(artist $artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateartistRequest  $request
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateartistRequest $request, artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(artist $artist)
    {
        //
    }
}
