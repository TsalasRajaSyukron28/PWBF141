<?php

namespace App\Http\Controllers;

use App\Models\Keluhanuser;
use App\Http\Requests\StoreKeluhanuserRequest;
use App\Http\Requests\UpdateKeluhanuserRequest;

class KeluhanuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/keluhanuser');
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
     * @param  \App\Http\Requests\StoreKeluhanuserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeluhanuserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluhanuser  $keluhanuser
     * @return \Illuminate\Http\Response
     */
    public function show(Keluhanuser $keluhanuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluhanuser  $keluhanuser
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluhanuser $keluhanuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeluhanuserRequest  $request
     * @param  \App\Models\Keluhanuser  $keluhanuser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeluhanuserRequest $request, Keluhanuser $keluhanuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluhanuser  $keluhanuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluhanuser $keluhanuser)
    {
        //
    }
}
