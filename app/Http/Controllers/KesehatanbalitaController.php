<?php

namespace App\Http\Controllers;

use App\Models\Kesehatanbalita;
use App\Http\Requests\StoreKesehatanbalitaRequest;
use App\Http\Requests\UpdateKesehatanbalitaRequest;

class KesehatanbalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/kesehatanbalita');
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
     * @param  \App\Http\Requests\StoreKesehatanbalitaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKesehatanbalitaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kesehatanbalita  $kesehatanbalita
     * @return \Illuminate\Http\Response
     */
    public function show(Kesehatanbalita $kesehatanbalita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kesehatanbalita  $kesehatanbalita
     * @return \Illuminate\Http\Response
     */
    public function edit(Kesehatanbalita $kesehatanbalita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKesehatanbalitaRequest  $request
     * @param  \App\Models\Kesehatanbalita  $kesehatanbalita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKesehatanbalitaRequest $request, Kesehatanbalita $kesehatanbalita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kesehatanbalita  $kesehatanbalita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kesehatanbalita $kesehatanbalita)
    {
        //
    }
}
