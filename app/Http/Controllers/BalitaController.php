<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Http\Requests\StoreBalitaRequest;
use App\Http\Requests\UpdateBalitaRequest;
use Symfony\Component\HttpFoundation\Request;

class BalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Balita::orderBy('id', 'asc')->get();
        return view('admin.tabelbalita')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formbalita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBalitaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBalitaRequest $request)
    {
        Balita::create($request->except(['_token','submit']));
        return redirect('/tabelbalita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function show(Balita $balita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function edit(Balita $balita)
    {
    $blt = Balita::find($id);
    return view('admin.tabelbalita',compact(['item']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBalitaRequest  $request
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $blt = Balita::find($request['id']);

        $blt->update([
            'Nama'=>$request['Nama'],
            'Nik'=>$request['Nik'],
            'Jeniskelamin'=>$request['Jeniskelamin'],
            'Tanggallahir'=>$request['Tanggallahir'],
            'Tinggibadan'=>$request['Tinggibadan'],
            'Beratbadan'=>$request['Beratbadan'],
            'Alamat'=>$request['Alamat'],
            'Namaibu'=>$request['Namaibu']
        ]);
        $blt->save();
        return redirect('/tabelbalita')->with('sukses','Selamat data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $blt = Balita::find($id);
       $blt->delete();
       return redirect('/tabelbalita');
    }
}
