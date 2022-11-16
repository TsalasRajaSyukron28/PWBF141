<?php

namespace App\Http\Controllers;

use App\Models\CekKesuburan;
use App\Http\Requests\StoreCekKesuburanRequest;
use App\Http\Requests\UpdateCekKesuburanRequest;

class CekKesuburanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('CekKesuburan.tlght', [
        'title' => 'Cek Kesuburan'
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
     * @param  \App\Http\Requests\StoreCekKesuburanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCekKesuburanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CekKesuburan  $cekKesuburan
     * @return \Illuminate\Http\Response
     */
    public function show(CekKesuburan $cekKesuburan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CekKesuburan  $cekKesuburan
     * @return \Illuminate\Http\Response
     */
    public function edit(CekKesuburan $cekKesuburan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCekKesuburanRequest  $request
     * @param  \App\Models\CekKesuburan  $cekKesuburan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCekKesuburanRequest $request, CekKesuburan $cekKesuburan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CekKesuburan  $cekKesuburan
     * @return \Illuminate\Http\Response
     */
    public function destroy(CekKesuburan $cekKesuburan)
    {
        //
    }
}
