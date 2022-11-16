<?php

namespace App\Http\Controllers;

use App\Models\Tabelibu;
use App\Http\Requests\StoreTabelibuRequest;
use App\Http\Requests\UpdateTabelibuRequest;

class TabelibuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tblibu = Formibu::all();
        // return view('admin/tbl',compact(['tblibu']));
        return view('admin/tabelibu');
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
     * @param  \App\Http\Requests\StoreTabelibuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTabelibuRequest $request)
    {
        // Tabelibu::create($request->except(['_token','submit']));
        // return redirect('/tabelibu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tabelibu  $tabelibu
     * @return \Illuminate\Http\Response
     */
    public function show(Tabelibu $tabelibu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tabelibu  $tabelibu
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabelibu $tabelibu)
    {
        // $tblibu = Tabelibu::find($id);
        // return view('admin/edit',compact(['tblibu']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTabelibuRequest  $request
     * @param  \App\Models\Tabelibu  $tabelibu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTabelibuRequest $request, Tabelibu $tabelibu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tabelibu  $tabelibu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabelibu $tabelibu)
    {

        // $tblibu= Tabelibu::find($id);
        // $tblibu->delete();

        // return redirect('/formibu');
    }
}
