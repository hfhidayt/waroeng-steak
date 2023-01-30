<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kendaraan.index', [
            'title' => 'Kendaraan',
            'kendaraans' => Kendaraan::all()
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
            'wilayah' => 'required',
            'no_plat' => 'required|unique:kendaraans',
            'jenis_kendaraan' => 'nullable',
            'no_rangka' => 'nullable',
            'no_mesin' => 'nullable',
            'no_bpkb' => 'nullable',
            'atas_nama' => 'nullable',
            'tahun' => 'nullable',
            'warna' => 'nullable',
            'jenis_merk' => 'nullable',
            'posisi_kendaraan' => 'nullable',
            'pajak' => 'nullable|date',
            'ganti_plat' => 'nullable|date',
            'keterangan' => 'nullable',
        ]);

        Kendaraan::Create($validatedData);
        return redirect('/dashboard/kendaraan')->with('success', 'Berhasil menambah kendaraan baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $validatedData = $request->validate([
            'wilayah' => 'required',
            'no_plat' => 'required|unique:kendaraans',
            'jenis_kendaraan' => 'nullable',
            'no_rangka' => 'nullable',
            'no_mesin' => 'nullable',
            'no_bpkb' => 'nullable',
            'atas_nama' => 'nullable',
            'tahun' => 'nullable',
            'warna' => 'nullable',
            'jenis_merk' => 'nullable',
            'posisi_kendaraan' => 'nullable',
            'pajak' => 'nullable|date',
            'ganti_plat' => 'nullable|date',
            'keterangan' => 'nullable',
        ]);
        Kendaraan::Where('id', $kendaraan->id)->update($validatedData);
        return redirect('/dashboard/kendaraan')->with('success', 'Berhasil memperbarui data kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kendaraan $kendaraan)
    {
        Kendaraan::destroy($kendaraan->id);
        return redirect('/dashboard/kendaraan')->with('success', 'Kendaraan berhasil dihapus');
    }
}
