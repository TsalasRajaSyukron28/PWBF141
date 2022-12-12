<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balita;
use App\Models\Vitamin;
use App\Http\Requests\StoreVitaminRequest;
use App\Http\Requests\UpdateVitaminRequest;

class VitaminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Vitamin::orderBy('id', 'desc')->get();
        // return view('admin.tabelvitamin')->with('data', $data);

        $balita = Vitamin::with('Balita')->get();

        return view('admin/tabelvitamin',[
            'balita'=>$balita
        ]);

        // $balita = Balita::all();
        // // dd($bali ta);
        // return view('admin.formvitamin',[
        //     'balita' => $balita
        // ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $balita = Balita::all();
        // dd($bali ta);
        return view('admin.formvitamin',[
            'balita' => $balita
        ]);

        // $balita = Balita::all();
        // return view('admin.formvitamin');

        // return view('admin.formvitamin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVitaminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVitaminRequest $request)
    {
        // Vitamin::create($request->except(['_token','submit']));
        // return redirect('/tabelvitamin');
        // dd(request('vitamin'));
        $data = [
            'id_balita'=>request('id_balitaa'),
            'namaVitamin'=>request('vitamin'),
            'saran'=>request('saran')
        ];
        Vitamin::create($data);
        return back()->withSuccess('Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function show(Vitamin $vitamin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */

    public function edit(Vitamin $vitamin)
    {
        $balita = Vitamin::find($balita->$id);
        return view('admin.tabelvitamin',compact(['item']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVitaminRequest  $request
     * @param  \App\Models\Vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


// dd(request('id'));
        $vitamin = [
            'namaVitamin'=>request('vitamin'),
            'saran'=>request('saran'),
        ];
        Vitamin::where('id_balita', request('id'))->update($vitamin);
        return redirect('/tabelvitamin')->withSuccess('Selamat Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vitamin  $vitamin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vitamin = Vitamin::find($id);
        $vitamin->delete();
        return redirect('/tabelvitamin');
    }
}
