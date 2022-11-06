<?php

namespace App\Http\Controllers;

use App\Models\Formartikel;
use App\Http\Requests\StoreFormartikelRequest;
use App\Http\Requests\UpdateFormartikelRequest;

class FormartikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/formartikel');
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
     * @param  \App\Http\Requests\StoreFormartikelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormartikelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formartikel  $formartikel
     * @return \Illuminate\Http\Response
     */
    public function show(Formartikel $formartikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formartikel  $formartikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Formartikel $formartikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormartikelRequest  $request
     * @param  \App\Models\Formartikel  $formartikel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormartikelRequest $request, Formartikel $formartikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formartikel  $formartikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formartikel $formartikel)
    {
        //
    }
}
