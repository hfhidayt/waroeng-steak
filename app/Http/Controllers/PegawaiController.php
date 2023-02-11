<?php

namespace App\Http\Controllers;

use App\Models\JabatanPegawai;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.akun.pegawai.index', [
            'title' => 'Pegawai',
            'pegawai' => Pegawai::all(),
            'jabatan_pegawai' => JabatanPegawai::all()
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
            'nip' => 'nullable',
            'nama' => 'required',
            'jabatan_pegawai_id' => 'required'
        ]);
        
        Pegawai::Create($validatedData);
        
        $request->session()->forget('create');

        return redirect('/dashboard/pegawai')->with('success', 'Berhasil menambah data pegawai baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->session()->put('edit', $pegawai->id);
        $validatedData = $request->validate([
            'nip' => 'nullable',
            'nama' => 'required',
            'jabatan_pegawai_id' => 'required'
        ]);

        Pegawai::Where('id', $pegawai->id)->update($validatedData);

        $request->session()->forget('edit');

        return redirect('/dashboard/pegawai')->with('success', 'Berhasil memperbarui data pegawai!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        Pegawai::destroy($pegawai->id);

        return redirect('/dashboard/pegawai')->with('success', 'Data pegawai berhasil dihapus');
    }
}
