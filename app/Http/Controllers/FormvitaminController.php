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
    public function edit(Formvitamin $id)
    {
        $balita = Balita::find($id);
        return view('formvitamin',compact('vitamin','balita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormvitaminRequest  $request
     * @param  \App\Models\Formvitamin  $formvitamin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama'=>'required',
            'Nik'=>'required',
            'Jeniskelamin'=>'required',
            'Tanggallahir'=>'required'
        ]);

        $balita= Balita::find($id);
        // Getting values from the blade template form
        $balita->Nama =  $request->get('Nama');
        $balita->Nik = $request->get('Nik');
        $balita->Jeniskelamin = $request->get('Jeniskelamin');
        $balita->Tanggallahir = $request->get('Tanggallahir');
        $balita->save();
        $balita_vitamin = new Balita_Vitamin;
        $balita_vitamin->create([
            'balita_id'=>$balita->id,
            'vitamin_id'=>$request->id
        ]);
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
