<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kendaraan.penjualan.index', [
            'title' => 'Penjualan',
            'penjualans' => Penjualan::all()
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pic' => 'required',
            'atas_nama' => 'required',
            'harga_jual' => 'required',
            'tanggal_jual' => 'required|date',
        ]);
        Penjualan::Create($validatedData);
        return redirect('/dashboard/penjualan/kendaraan')->with('success', 'Berhasil menambah data penjualan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $kendaraan)
    {
        $validatedData = $request->validate([
            'pic' => 'required',
            'atas_nama' => 'required',
            'harga_jual' => 'required',
            'tanggal_jual' => 'required|date',
        ]);
        Penjualan::where('id', $kendaraan->id)->update($validatedData);
        return redirect('/dashboard/penjualan/kendaraan')->with('success', 'Berhasil menambah data penjualan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        Penjualan::destroy($penjualan->id);
        return redirect('/dashboard/penjualan/kendaraan')->with('success', 'Data Penjualan berhasil dihapus');
    }
}
