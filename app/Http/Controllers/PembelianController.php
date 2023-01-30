<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'a';
        return view('dashboard.kendaraan.pembelian.index', [
            'title' => 'Pembelian',
            'pembelian' => Pembelian::all()
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
        $request->session()->put('createP');
        $validatedData = $request->validate([
            'pic' => 'required',
            'kota' => 'required',
            'tgl_perolehan' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
            'total' => 'required',
            'dp' => 'required',
            'tgl_dp' => 'required',
            'angsuran' => 'required',
            'jml_angsuran' => 'required',
            'mulai_angsuran' => 'required',
            'selesai_angsuran' => 'required',
            'rekening' => 'required'
        ]);

        Pembelian::Create($validatedData);

        $request->session()->forget('createP', 'true');

        return redirect('/dashboard/pembelian/kendaraan')->with('success', 'Berhasil menambah pembelian!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelian $kendaraan)
    {
        $request->session()->put('editIdP', $kendaraan->id);
        $validatedData = $request->validate([
            'pic' => 'required',
            'kota' => 'required',
            'tgl_perolehan' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
            'total' => 'required',
            'dp' => 'required',
            'tgl_dp' => 'required',
            'angsuran' => 'required',
            'jml_angsuran' => 'required',
            'mulai_angsuran' => 'required',
            'selesai_angsuran' => 'required',
            'rekening' => 'required'
        ]);

        Pembelian::where('id', $kendaraan->id)->update($validatedData);

        $request->session()->forget('editIdP', 'true');

        return redirect('/dashboard/pembelian/kendaraan')->with('success', 'Berhasil memeperbarui pembelian!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelian $kendaraan)
    {
        // dd($kendaraan->id);
        Pembelian::destroy($kendaraan->id);

        return redirect('/dashboard/pembelian/kendaraan')->with('success', 'Pembelian berhasil dihapus');
    }
}
