<?php

namespace App\Http\Controllers;

use App\Models\Keluhanadmin;
use App\Http\Requests\StoreKeluhanadminRequest;
use App\Http\Requests\UpdateKeluhanadminRequest;

class KeluhanadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/keluhanadmin');
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
     * @param  \App\Http\Requests\StoreKeluhanadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeluhanadminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluhanadmin  $keluhanadmin
     * @return \Illuminate\Http\Response
     */
    public function show(Keluhanadmin $keluhanadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluhanadmin  $keluhanadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluhanadmin $keluhanadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeluhanadminRequest  $request
     * @param  \App\Models\Keluhanadmin  $keluhanadmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeluhanadminRequest $request, Keluhanadmin $keluhanadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluhanadmin  $keluhanadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluhanadmin $keluhanadmin)
    {
        //
    }
}
