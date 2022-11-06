<?php

namespace App\Http\Controllers;

use App\Models\Tabelbalita;
use App\Http\Requests\StoreTabelbalitaRequest;
use App\Http\Requests\UpdateTabelbalitaRequest;

class TabelbalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/tabelbalita');
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
     * @param  \App\Http\Requests\StoreTabelbalitaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTabelbalitaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tabelbalita  $tabelbalita
     * @return \Illuminate\Http\Response
     */
    public function show(Tabelbalita $tabelbalita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tabelbalita  $tabelbalita
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabelbalita $tabelbalita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTabelbalitaRequest  $request
     * @param  \App\Models\Tabelbalita  $tabelbalita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTabelbalitaRequest $request, Tabelbalita $tabelbalita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tabelbalita  $tabelbalita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabelbalita $tabelbalita)
    {
        //
    }
}
