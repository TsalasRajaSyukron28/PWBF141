<?php

namespace App\Http\Controllers;

use App\Models\Laporandataibu;
use App\Http\Requests\StoreLaporandataibuRequest;
use App\Http\Requests\UpdateLaporandataibuRequest;

class LaporandataibuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/laporanibu');
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
     * @param  \App\Http\Requests\StoreLaporandataibuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaporandataibuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporandataibu  $laporandataibu
     * @return \Illuminate\Http\Response
     */
    public function show(Laporandataibu $laporandataibu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporandataibu  $laporandataibu
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporandataibu $laporandataibu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporandataibuRequest  $request
     * @param  \App\Models\Laporandataibu  $laporandataibu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporandataibuRequest $request, Laporandataibu $laporandataibu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporandataibu  $laporandataibu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporandataibu $laporandataibu)
    {
        //
    }
}
