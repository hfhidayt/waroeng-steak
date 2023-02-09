<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kendaraan.merkKendaraan.index', [
            'title' => 'Merk Kendaraan',
            'merk' => Merk::all()
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
        $request->session()->put('createMK', 'true');
        $validatedData = $request->validate([
            'merk' => 'required'
        ]);

        Merk::Create($validatedData);

        $request->session()->forget('createMK');

        return redirect('/dashboard/merk/kendaraan')->with('success', 'Berhasil menambahkan merk kendaraan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show(Merk $merk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit(Merk $merk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merk $merk)
    {
        $request->session()->put('editMK', $merk->id);
        $validatedData = $request->validate([
            'merk_perawatan' => 'required'
        ]);

        Merk::where('id', $merk->id)->update($validatedData);

        $request->session()->forget('editMK');

        return redirect('/dashboard/merk/kendaraan')->with('success', 'Berhasil memperbarui merk kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merk $merk)
    {
        Merk::destroy($merk->id);
        return redirect('/dashboard/merk/kendaraan')->with('success', 'Berhasil menghapus merk kendaraan!');
    }
}
