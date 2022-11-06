<?php

namespace App\Http\Controllers;

use App\Models\Formpenimbangan;
use App\Http\Requests\StoreFormpenimbanganRequest;
use App\Http\Requests\UpdateFormpenimbanganRequest;

class FormpenimbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/formpenimbangan');
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
     * @param  \App\Http\Requests\StoreFormpenimbanganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormpenimbanganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formpenimbangan  $formpenimbangan
     * @return \Illuminate\Http\Response
     */
    public function show(Formpenimbangan $formpenimbangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formpenimbangan  $formpenimbangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Formpenimbangan $formpenimbangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormpenimbanganRequest  $request
     * @param  \App\Models\Formpenimbangan  $formpenimbangan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormpenimbanganRequest $request, Formpenimbangan $formpenimbangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formpenimbangan  $formpenimbangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formpenimbangan $formpenimbangan)
    {
        //
    }
}
