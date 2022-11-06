<?php

namespace App\Http\Controllers;

use App\Models\Formvitamin;
use App\Http\Requests\StoreFormvitaminRequest;
use App\Http\Requests\UpdateFormvitaminRequest;

class FormvitaminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/formvitamin');
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
     * @param  \App\Http\Requests\StoreFormvitaminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormvitaminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formvitamin  $formvitamin
     * @return \Illuminate\Http\Response
     */
    public function show(Formvitamin $formvitamin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formvitamin  $formvitamin
     * @return \Illuminate\Http\Response
     */
    public function edit(Formvitamin $formvitamin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormvitaminRequest  $request
     * @param  \App\Models\Formvitamin  $formvitamin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormvitaminRequest $request, Formvitamin $formvitamin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formvitamin  $formvitamin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formvitamin $formvitamin)
    {
        //
    }
}
