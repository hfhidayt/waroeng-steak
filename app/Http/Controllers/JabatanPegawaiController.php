<?php

namespace App\Http\Controllers;

use App\Models\JabatanPegawai;
use Illuminate\Http\Request;

class JabatanPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.akun.pegawai.jabatan.index', [
            'title' => 'Jabatan Pegawai',
            'jabatan' => JabatanPegawai::all()
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
        $request->session()->put('create', 'true');
        $validatedData = $request->validate([
            'nama_jabatan' => 'required'
        ]);
        
        JabatanPegawai::Create($validatedData);
        
        $request->session()->forget('create');

        return redirect('/dashboard/jabatan/pegawai')->with('success', 'Berhasil menambah jabatan baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JabatanPegawai  $jabatanPegawai
     * @return \Illuminate\Http\Response
     */
    public function show(JabatanPegawai $jabatanPegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JabatanPegawai  $jabatanPegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(JabatanPegawai $jabatanPegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JabatanPegawai  $jabatanPegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JabatanPegawai $pegawai)
    {
        $request->session()->put('edit', $pegawai->id);
        $validatedData = $request->validate([
            'nama_jabatan' => 'required'
        ]);
        
        JabatanPegawai::where('id', $pegawai->id)->update($validatedData);
        
        $request->session()->forget('edit');

        return redirect('/dashboard/jabatan/pegawai')->with('success', 'Berhasil mengubah jabatan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JabatanPegawai  $jabatanPegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(JabatanPegawai $pegawai)
    {
        JabatanPegawai::destroy($pegawai->id);

        return redirect('/dashboard/jabatan/pegawai')->with('success', 'Data jabatan pegawai berhasil dihapus');
    }
}
