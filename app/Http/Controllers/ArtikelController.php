<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Http\Requests\StoreArtikelRequest;
use App\Http\Requests\UpdateArtikelRequest;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::orderBy('id', 'asc')->get();
        return view('admin.tabelartikel')->with('artikel', $artikel);
        // return view('admin.tabelartikel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formartikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArtikelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArtikelRequest $request)
    {

        $artikel = [
            'Gambar'=>request('Gambar'),
            'Kategori'=>request('Kategori'),
            'Judul'=>request('Judul'),
            'Isi'=>request('Isi'),
        ];
        // dd($artikel);
        Artikel::create($artikel);
        return back()->withSuccess('Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArtikelRequest  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateArtikelRequest $request, Artikel $artikel)
    public function update(Request $request)
    {
        $artikel = Artikel::find($request['id']);

        $artikel->update([
            'Gambar'=>$request['Gambar'],
            'Kategori'=>$request['Kategori'],
            'Judul'=>$request['Judul'],
            'Isi'=>$request['Isi'],
        ]);
        $artikel->save();
        return redirect('/tabelartikel')->with('sukses','Selamat data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $art = Artikel::find($id);
        $art->delete();
        return redirect('/tabelartikel');
    }
}
