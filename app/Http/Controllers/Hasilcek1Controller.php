<?php

namespace App\Http\Controllers;

use App\Models\Hasilcek1;
use App\Http\Requests\StoreHasilcek1Request;
use App\Http\Requests\UpdateHasilcek1Request;

class Hasilcek1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hpht = date('d-m-Y',strtotime('+9 Month +7 Day',strtotime(request ('CekKehamilan'))));

        return view('CekKehamilan/hasil',[
            'tgl'=>$hpht
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
     * @param  \App\Http\Requests\StoreHasilcek1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHasilcek1Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hasilcek1  $hasilcek1
     * @return \Illuminate\Http\Response
     */
    public function show(Hasilcek1 $hasilcek1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hasilcek1  $hasilcek1
     * @return \Illuminate\Http\Response
     */
    public function edit(Hasilcek1 $hasilcek1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHasilcek1Request  $request
     * @param  \App\Models\Hasilcek1  $hasilcek1
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHasilcek1Request $request, Hasilcek1 $hasilcek1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hasilcek1  $hasilcek1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hasilcek1 $hasilcek1)
    {
        //
    }
}
