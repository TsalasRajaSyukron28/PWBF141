<?php

namespace App\Http\Controllers;

use App\Models\Vitamin;
use App\Http\Requests\StoreVitaminRequest;
use App\Http\Requests\UpdateVitaminRequest;

class VitaminController extends Controller
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
     * @param  \App\Http\Requests\StoreVitaminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVitaminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function show(Vitamin $vitamin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function edit(Vitamin $vitamin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVitaminRequest  $request
     * @param  \App\Models\Vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVitaminRequest $request, Vitamin $vitamin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vitamin $vitamin)
    {
        //
    }
}
