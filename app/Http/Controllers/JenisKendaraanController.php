<?php

namespace App\Http\Controllers;

use App\Models\JenisKendaraan;
use Illuminate\Http\Request;

class JenisKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kendaraan.jenisKendaraan.index', [
            'title' => 'Jenis Kendaraan',
            'jenis_kendaraan' => JenisKendaraan::all()
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
        $request->session()->put('createJK', 'true');
        $validatedData = $request->validate([
            'jenis_kendaraan' => 'required'
        ]);

        JenisKendaraan::Create($validatedData);

        $request->session()->forget('createJK');

        return redirect('/dashboard/jenis/kendaraan')->with('success', 'Berhasil menambahkan jenis kendaraan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisKendaraan  $jenisKendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(JenisKendaraan $jenisKendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisKendaraan  $jenisKendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisKendaraan $jenisKendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisKendaraan  $jenisKendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisKendaraan $kendaraan)
    {
        $request->session()->put('editJK', $kendaraan->id);
        $validatedData = $request->validate([
            'jenis_kendaraan' => 'required'
        ]);

        JenisKendaraan::where('id', $kendaraan->id)->update($validatedData);

        $request->session()->forget('editJK');

        return redirect('/dashboard/jenis/kendaraan')->with('success', 'Berhasil memperbarui jenis kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisKendaraan  $jenisKendaraan 
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisKendaraan $kendaraan)
    {
        JenisKendaraan::destroy($kendaraan->id);
        return redirect('/dashboard/jenis/kendaraan')->with('success', 'Berhasil menghapus jenis kendaraan!');
    }
}
