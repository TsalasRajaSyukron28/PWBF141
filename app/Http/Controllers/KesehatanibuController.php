<?php

namespace App\Http\Controllers;

use App\Models\Kesehatanibu;
use App\Http\Requests\StoreKesehatanibuRequest;
use App\Http\Requests\UpdateKesehatanibuRequest;

class KesehatanibuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/kesehatanibu');
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
     * @param  \App\Http\Requests\StoreKesehatanibuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKesehatanibuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kesehatanibu  $kesehatanibu
     * @return \Illuminate\Http\Response
     */
    public function show(Kesehatanibu $kesehatanibu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kesehatanibu  $kesehatanibu
     * @return \Illuminate\Http\Response
     */
    public function edit(Kesehatanibu $kesehatanibu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKesehatanibuRequest  $request
     * @param  \App\Models\Kesehatanibu  $kesehatanibu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKesehatanibuRequest $request, Kesehatanibu $kesehatanibu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kesehatanibu  $kesehatanibu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kesehatanibu $kesehatanibu)
    {
        //
    }
}
