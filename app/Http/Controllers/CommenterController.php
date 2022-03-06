<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecommenterRequest;
use App\Http\Requests\UpdatecommenterRequest;
use App\Models\commenter;

class CommenterController extends Controller
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
     * @param  \App\Http\Requests\StorecommenterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecommenterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\commenter  $commenter
     * @return \Illuminate\Http\Response
     */
    public function show(commenter $commenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\commenter  $commenter
     * @return \Illuminate\Http\Response
     */
    public function edit(commenter $commenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecommenterRequest  $request
     * @param  \App\Models\commenter  $commenter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecommenterRequest $request, commenter $commenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\commenter  $commenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(commenter $commenter)
    {
        //
    }
}
