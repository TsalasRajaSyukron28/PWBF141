<?php

namespace App\Http\Controllers;

use App\Models\Profiluser;
use App\Http\Requests\StoreProfiluserRequest;
use App\Http\Requests\UpdateProfiluserRequest;

class ProfiluserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/profiluser');
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
     * @param  \App\Http\Requests\StoreProfiluserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfiluserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profiluser  $profiluser
     * @return \Illuminate\Http\Response
     */
    public function show(Profiluser $profiluser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profiluser  $profiluser
     * @return \Illuminate\Http\Response
     */
    public function edit(Profiluser $profiluser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfiluserRequest  $request
     * @param  \App\Models\Profiluser  $profiluser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfiluserRequest $request, Profiluser $profiluser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profiluser  $profiluser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profiluser $profiluser)
    {
        //
    }
}
