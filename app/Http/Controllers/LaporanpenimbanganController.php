<?php

namespace App\Http\Controllers;

use App\Models\Laporanpenimbangan;
use App\Http\Requests\StoreLaporanpenimbanganRequest;
use App\Http\Requests\UpdateLaporanpenimbanganRequest;

class LaporanpenimbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/laporanpenimbangan');
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
     * @param  \App\Http\Requests\StoreLaporanpenimbanganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaporanpenimbanganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporanpenimbangan  $laporanpenimbangan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporanpenimbangan $laporanpenimbangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporanpenimbangan  $laporanpenimbangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporanpenimbangan $laporanpenimbangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanpenimbanganRequest  $request
     * @param  \App\Models\Laporanpenimbangan  $laporanpenimbangan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporanpenimbanganRequest $request, Laporanpenimbangan $laporanpenimbangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporanpenimbangan  $laporanpenimbangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporanpenimbangan $laporanpenimbangan)
    {
        //
    }
}
