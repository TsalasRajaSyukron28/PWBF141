<?php

namespace App\Http\Controllers;

use App\Models\Formbalita;
use App\Http\Requests\StoreFormbalitaRequest;
use App\Http\Requests\UpdateFormbalitaRequest;

class FormbalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/formbalita');
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
     * @param  \App\Http\Requests\StoreFormbalitaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormbalitaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formbalita  $formbalita
     * @return \Illuminate\Http\Response
     */
    public function show(Formbalita $formbalita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formbalita  $formbalita
     * @return \Illuminate\Http\Response
     */
    public function edit(Formbalita $formbalita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormbalitaRequest  $request
     * @param  \App\Models\Formbalita  $formbalita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormbalitaRequest $request, Formbalita $formbalita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formbalita  $formbalita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formbalita $formbalita)
    {
        //
    }
}
