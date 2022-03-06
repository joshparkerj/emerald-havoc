<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretrackRequest;
use App\Http\Requests\UpdatetrackRequest;
use App\Models\track;

class TrackController extends Controller
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
     * @param  \App\Http\Requests\StoretrackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretrackRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\track  $track
     * @return \Illuminate\Http\Response
     */
    public function show(track $track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\track  $track
     * @return \Illuminate\Http\Response
     */
    public function edit(track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetrackRequest  $request
     * @param  \App\Models\track  $track
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetrackRequest $request, track $track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\track  $track
     * @return \Illuminate\Http\Response
     */
    public function destroy(track $track)
    {
        //
    }
}
