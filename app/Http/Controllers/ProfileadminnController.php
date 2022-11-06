<?php

namespace App\Http\Controllers;

use App\Models\Profileadminn;
use App\Http\Requests\StoreProfileadminnRequest;
use App\Http\Requests\UpdateProfileadminnRequest;

class ProfileadminnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/profileadminn');
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
     * @param  \App\Http\Requests\StoreProfileadminnRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileadminnRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profileadminn  $profileadminn
     * @return \Illuminate\Http\Response
     */
    public function show(Profileadminn $profileadminn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profileadminn  $profileadminn
     * @return \Illuminate\Http\Response
     */
    public function edit(Profileadminn $profileadminn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileadminnRequest  $request
     * @param  \App\Models\Profileadminn  $profileadminn
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileadminnRequest $request, Profileadminn $profileadminn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profileadminn  $profileadminn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profileadminn $profileadminn)
    {
        //
    }
}
