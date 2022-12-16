<?php

namespace App\Http\Controllers;

use Illuminate\Http\PenjualanRequest;
use App\Models\Obat;
use App\Models\penjualan;
use Illuminate\Http\Request;

class jualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataJual = penjualan::with('obat');
        return view('jual.index',compact('dataJual'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new penjualan;
        $obat = Obat::all();
        return view('jual.create',compact('model','obat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new penjualan;
        $model->No_Nota = $request->No_Nota;
        $model->id_nama = $request->id_nama;
        $model->jumlah = $request->jumlah;
        $model->tanggal = $request->tanggal;
        $model-> total =  $request->jumlah ;
        $model->save();

        return redirect('Jual')->with('success','Data Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = penjualan::find($id);
        return view('jual.show',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = penjualan::find($id);
        $model->delete();

        return redirect('Jual')->with('success','Data Berhasil Di Hapus');
    }
}
