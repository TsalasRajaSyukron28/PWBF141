<?php

namespace App\Http\Controllers;

use App\Models\Keluhanadmin;
use App\Models\Keluhanuser;
use App\Http\Requests\StoreKeluhanadminRequest;
use App\Http\Requests\UpdateKeluhanadminRequest;

class KeluhanadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluhan = Keluhanuser::all();
        return view('admin/keluhanadmin', compact('keluhan'));
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
     * @param  \App\Http\Requests\StoreKeluhanadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeluhanadminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluhanadmin  $keluhanadmin
     * @return \Illuminate\Http\Response
     */
    public function show(Keluhanadmin $keluhanadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluhanadmin  $keluhanadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluhanadmin $keluhanadmin, $id)
    {
        $keluhan = Keluhanuser::where('id', '=', $id)->get();

        return view('admin.formfeedback', compact('keluhan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeluhanadminRequest  $request
     * @param  \App\Models\Keluhanadmin  $keluhanadmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeluhanadminRequest $request, Keluhanuser $keluhanuser, $id)
    {
        $feedback = Keluhanuser::find($id);
        $feedback->feedback = $request->feedback;
        $feedback->update();

        return redirect('/keluhanadmin')->with('success', 'Feedback added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluhanadmin  $keluhanadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluhanadmin $keluhanadmin)
    {
        //
    }
}
