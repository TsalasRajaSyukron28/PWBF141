<?php

namespace App\Http\Controllers;

use App\Models\CekKehamilan;
use App\Http\Requests\StoreCekKehamilanRequest;
use App\Http\Requests\UpdateCekKehamilanRequest;

class CekKehamilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hpht = date('d-m-Y',strtotime('+9 Month +7 Day',strtotime(request ('CekKehamilan'))));
        if (request('CekKehamilan')!=null) {
            return $hpht;
        }
        return view('CekKehamilan.hpht', [
        'title' == 'Cek Kehamilan'
        ]);
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
     * @param  \App\Http\Requests\StoreCekKehamilanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCekKehamilanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CekKehamilan  $cekKehamilan
     * @return \Illuminate\Http\Response
     */
    public function show(CekKehamilan $cekKehamilan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CekKehamilan  $cekKehamilan
     * @return \Illuminate\Http\Response
     */
    public function edit(CekKehamilan $cekKehamilan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCekKehamilanRequest  $request
     * @param  \App\Models\CekKehamilan  $cekKehamilan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCekKehamilanRequest $request, CekKehamilan $cekKehamilan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CekKehamilan  $cekKehamilan
     * @return \Illuminate\Http\Response
     */
    public function destroy(CekKehamilan $cekKehamilan)
    {
        //
    }
}
