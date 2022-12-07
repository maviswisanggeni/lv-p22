<?php

namespace App\Http\Controllers;

use App\Models\penumpang;
use Illuminate\Http\Request;

class PenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penumpang.all',["data_penumpang" => Penumpang::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penumpang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valideData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'alamat' => 'required',
        ]);

        Penumpang::create($valideData);
        return redirect('/penumpang/all')->with('status', 'Data Penumpang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function show(Penumpang $penumpang)
    {
        return view('penumpang.detail', [
            'penumpang' => $penumpang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function edit(Penumpang $penumpang)
    {
        return view('penumpang.edit', [
            'penumpang' => $penumpang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penumpang $penumpang)
    {
        $rules = [
            'nama' => 'required|min:3|max:50',
            'alamat' => 'required',
        ];

        $valideData = $request->validate($rules);
        Penumpang::where('id', $penumpang->id)
            ->update($valideData);

        return redirect('/penumpang/all')->with('status', 'Data Penumpang Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function destroy(penumpang $penumpang)
    {
        Penumpang::destroy($penumpang->id);
        return redirect('/penumpang/all')->with('status', 'Data Penumpang Berhasil Dihapus');
    }
}
