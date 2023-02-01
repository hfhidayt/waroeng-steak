<?php

namespace App\Http\Controllers;

use App\Models\JenisPerawatan;
use Illuminate\Http\Request;

class JenisPerawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kendaraan.perawatan.jenis.index', [
            'title' => 'Jenis Perawatan',
            'jenis_perawatan' => JenisPerawatan::all()
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
        $request->session()->put('createJPS', 'true');
        $validatedData = $request->validate([
            'jenis_perawatan' => 'required'
        ]);

        JenisPerawatan::Create($validatedData);

        $request->session()->forget('createJPS');

        return redirect('/dashboard/jenis/perawatan/kendaraan')->with('success', 'Berhasil menambahkan jenis perawatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisPerawatan $kendaraan)
    {
        $request->session()->put('editJPS', $kendaraan->id);
        $validatedData = $request->validate([
            'jenis_perawatan' => 'required'
        ]);

        JenisPerawatan::where('id', $kendaraan->id)->update($validatedData);

        $request->session()->forget('editJPS');

        return redirect('/dashboard/jenis/perawatan/kendaraan')->with('success', 'Berhasil memperbarui jenis perawatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisPerawatan $kendaraan)
    {
        JenisPerawatan::destroy($kendaraan->id);
        return redirect('/dashboard/jenis/perawatan/kendaraan')->with('success', 'Berhasil menghapus jenis perawatan!');
    }
}
