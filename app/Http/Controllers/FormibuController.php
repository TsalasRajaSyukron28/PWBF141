<?php

namespace App\Http\Controllers;

use App\Models\Formibu;
use App\Http\Requests\StoreFormibuRequest;
use App\Http\Requests\UpdateFormibuRequest;

class FormibuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Formibu::orderBy('id', 'desc')->get();
        return view('Admin/Formibu')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/formibu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormibuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormibuRequest $request)
    {
        $data = [
            'keterangan' => $request->Keterangan,
            'Gambar' => $request->file
        ];
        Formibu::create($data);
        $data = Formibu::orderBy('id', 'desc')->get();
        return view('Admin.TabelPopup')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formibu  $formibu
     * @return \Illuminate\Http\Response
     */
    public function show(Formibu $formibu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formibu  $formibu
     * @return \Illuminate\Http\Response
     */
    public function edit(Formibu $formibu)
    {
        // $frmibu = Formibu::find($id);
        // return view('admin/edit',compact(['frmibu']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormibuRequest  $request
     * @param  \App\Models\Formibu  $formibu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormibuRequest $request, Formibu $formibu)
    {
        // $formibu= Formibu::find($id);
        // $pgn->update($request->except(['_token','submit']));
        // return redirect('admin/formibu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formibu  $formibu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formibu $formibu)
    {
        //
        // $frmibu= Formibu::find($id);
        // $frmibu->delete();

        // return redirect('/formibu');
    }
}
