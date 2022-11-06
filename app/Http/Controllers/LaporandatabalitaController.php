<?php

namespace App\Http\Controllers;

use App\Models\Laporandatabalita;
use App\Http\Requests\StoreLaporandatabalitaRequest;
use App\Http\Requests\UpdateLaporandatabalitaRequest;

class LaporandatabalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/laporanbalita');
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
     * @param  \App\Http\Requests\StoreLaporandatabalitaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaporandatabalitaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporandatabalita  $laporandatabalita
     * @return \Illuminate\Http\Response
     */
    public function show(Laporandatabalita $laporandatabalita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporandatabalita  $laporandatabalita
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporandatabalita $laporandatabalita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporandatabalitaRequest  $request
     * @param  \App\Models\Laporandatabalita  $laporandatabalita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporandatabalitaRequest $request, Laporandatabalita $laporandatabalita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporandatabalita  $laporandatabalita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporandatabalita $laporandatabalita)
    {
        //
    }
}
