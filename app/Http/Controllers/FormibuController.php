<?php

namespace App\Http\Controllers;

use App\Models\Formibu;
use App\Http\Requests\StoreFormibuRequest;
use App\Http\Requests\UpdateFormibuRequest;

class FormibuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/formibu');
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
     * @param  \App\Http\Requests\StoreFormibuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormibuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formibu  $formibu
     * @return \Illuminate\Http\Response
     */
    public function show(Formibu $formibu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formibu  $formibu
     * @return \Illuminate\Http\Response
     */
    public function edit(Formibu $formibu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormibuRequest  $request
     * @param  \App\Models\Formibu  $formibu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormibuRequest $request, Formibu $formibu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formibu  $formibu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formibu $formibu)
    {
        //
    }
}
