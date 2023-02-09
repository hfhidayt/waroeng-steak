<?php

namespace App\Http\Controllers;

use App\Models\BahanBakar;
use Illuminate\Http\Request;

class BahanBakarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kendaraan.bbKendaraan.index', [
            'title' => 'Bahan Bakar',
            'bahan_bakar' => BahanBakar::all()
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
        $request->session()->put('createBB', 'true');
        $validatedData = $request->validate([
            'bahan_bakar' => 'required'
        ]);

        BahanBakar::Create($validatedData);

        $request->session()->forget('createBB');

        return redirect('/dashboard/bahanbakar/kendaraan')->with('success', 'Berhasil menambahkan bahan bakar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BahanBakar  $bahanBakar
     * @return \Illuminate\Http\Response
     */
    public function show(BahanBakar $bahanBakar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BahanBakar  $bahanBakar
     * @return \Illuminate\Http\Response
     */
    public function edit(BahanBakar $bahanBakar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BahanBakar  $bahanBakar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BahanBakar $bahanBakar)
    {
        $request->session()->put('editBB', $bahanBakar->id);
        $validatedData = $request->validate([
            'bahan_bakar' => 'required'
        ]);

        BahanBakar::where('id', $bahanBakar->id)->update($validatedData);

        $request->session()->forget('editBB');

        return redirect('/dashboard/bahanbakar/kendaraan')->with('success', 'Berhasil memperbarui bahan bakar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BahanBakar  $bahanBakar
     * @return \Illuminate\Http\Response
     */
    public function destroy(BahanBakar $bahanBakar)
    {
        BahanBakar::destroy($bahanBakar->id);
        return redirect('/dashboard/bahanbakar/kendaraan')->with('success', 'Berhasil menghapus bahan bakar!');
    }
}
