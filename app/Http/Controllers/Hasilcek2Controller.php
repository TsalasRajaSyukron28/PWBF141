<?php

namespace App\Http\Controllers;

use App\Models\Hasilcek2;
use App\Http\Requests\StoreHasilcek2Request;
use App\Http\Requests\UpdateHasilcek2Request;

class Hasilcek2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $tlght = date('d-m-Y',strtotime('+14 Day',strtotime(request ('CekKesuburan'))));
        return view('CekKesuburan/hasil2',[
            'tgl'=>$tlght
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
     * @param  \App\Http\Requests\StoreHasilcek2Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHasilcek2Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hasilcek2  $hasilcek2
     * @return \Illuminate\Http\Response
     */
    public function show(Hasilcek2 $hasilcek2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hasilcek2  $hasilcek2
     * @return \Illuminate\Http\Response
     */
    public function edit(Hasilcek2 $hasilcek2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHasilcek2Request  $request
     * @param  \App\Models\Hasilcek2  $hasilcek2
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHasilcek2Request $request, Hasilcek2 $hasilcek2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hasilcek2  $hasilcek2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hasilcek2 $hasilcek2)
    {
        //
    }
}
