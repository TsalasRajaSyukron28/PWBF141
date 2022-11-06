<?php

namespace App\Http\Controllers;

use App\Models\Tabelvitamin;
use App\Http\Requests\StoreTabelvitaminRequest;
use App\Http\Requests\UpdateTabelvitaminRequest;

class TabelvitaminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/tabelvitamin');
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
     * @param  \App\Http\Requests\StoreTabelvitaminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTabelvitaminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tabelvitamin  $tabelvitamin
     * @return \Illuminate\Http\Response
     */
    public function show(Tabelvitamin $tabelvitamin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tabelvitamin  $tabelvitamin
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabelvitamin $tabelvitamin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTabelvitaminRequest  $request
     * @param  \App\Models\Tabelvitamin  $tabelvitamin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTabelvitaminRequest $request, Tabelvitamin $tabelvitamin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tabelvitamin  $tabelvitamin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabelvitamin $tabelvitamin)
    {
        //
    }
}
