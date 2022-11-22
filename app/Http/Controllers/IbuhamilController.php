<?php

namespace App\Http\Controllers;

use App\Models\Ibuhamil;
use App\Http\Requests\StoreIbuhamilRequest;
use App\Http\Requests\UpdateIbuhamilRequest;
use Symfony\Component\HttpFoundation\Request;

class IbuhamilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ibuhamil::orderBy('id', 'desc')->get();
        return view('admin.tabelibu')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formibu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIbuhamilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIbuhamilRequest $request)
    {
        Ibuhamil::create($request->except(['_token','submit']));
        return redirect('/tabelibu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ibuhamil  $ibuhamil
     * @return \Illuminate\Http\Response
     */
    public function show(Ibuhamil $ibuhamil)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ibuhamil  $ibuhamil
     * @return \Illuminate\Http\Response
     */
    public function edit(Ibuhamil $ibuhamil)
    {
        $ibu = Ibuhamil::find($id);
        return view('admin.tabelibu',compact(['item']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIbuhamilRequest  $request
     * @param  \App\Models\Ibuhamil  $ibuhamil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $ibu = Ibuhamil::find($request['id']);

        $ibu->update([
            'Nama'=>$request['Nama'],
            'Nik'=>$request['Nik'],
            'Alamat'=>$request['Alamat'],
            'Tanggallahir'=>$request['Tanggallahir'],
            'Tinggibadan'=>$request['Tinggibadan'],
            'Beratbadan'=>$request['Beratbadan'],
            'Tekanandarah'=>$request['Tekanandarah']
        ]);
        $ibu->save();
        return redirect('/tabelibu')->with('sukses','Selamat data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ibuhamil  $ibuhamil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ibu = Ibuhamil::find($id);
        $ibu->delete();
        return redirect('/tabelibu');
    }
}
