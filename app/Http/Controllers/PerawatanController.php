<?php

namespace App\Http\Controllers;

use App\Models\JenisPerawatan;
use App\Models\Kendaraan;
use App\Models\Perawatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kendaraan.perawatan.index', [
            'title' => 'Perawatan',
            'jenis_perawatan' => JenisPerawatan::all(),
            'no_plat' => Kendaraan::select('id', 'no_plat')->get(),
            'perawatan' => Perawatan::all(),
            'kendaraan' => Kendaraan::all()
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
        // ddd($request);
        $request->session()->put('createPS', 'true');
        $validatedData = $request->validate([
            'kendaraan_id' => 'required',
            'tanggal' => 'nullable',
            'bulan' => 'nullable',
            'tahun' => 'nullable',
            'jenis_perawatan' => 'nullable',
            'barang_jasa' => 'nullable',
            'volume' => 'nullable',
            'satuan' => 'nullable',
            'tempat_perawatan' => 'nullable',
            'kilometer' => 'nullable',
            'harga_satuan' => 'nullable',
            // 'total_biaya' => 'nullable',
            'nota' => 'image|file'
        ]);

        if ($request->nota) {
            $validatedData['nota'] = $request->file('nota')->store('nota');
        } else {
            $validatedData['nota'] = 'nota/00.png';
        }

        $validatedData['total_biaya'] = (int)$validatedData['harga_satuan'] * (int)$validatedData['volume'];
        // ddd($validatedData['total_biaya'], $validatedData['harga_satuan'], $validatedData['volume']);

        Perawatan::Create($validatedData);

        $request->session()->forget('createPS');

        return redirect('/dashboard/perawatan/kendaraan')->with('success', 'Berhasil menambahkan perawatan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perawatan  $perawatan
     * @return \Illuminate\Http\Response
     */
    public function show(Perawatan $perawatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perawatan  $perawatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perawatan $perawatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perawatan  $perawatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perawatan $kendaraan)
    {
        $request->session()->put('editPS', $kendaraan->id);
        $validatedData = $request->validate([
            'kendaraan_id' => 'required',
            'tanggal' => 'nullable',
            'bulan' => 'nullable',
            'tahun' => 'nullable',
            'jenis_perawatan' => 'nullable',
            'barang_jasa' => 'nullable',
            'volume' => 'nullable',
            'satuan' => 'nullable',
            'tempat_perawatan' => 'nullable',
            'kilometer' => 'nullable',
            'harga_satuan' => 'nullable',
            // 'total_biaya' => 'nullable',
            'nota' => 'image|file'
        ]);

        if ($request->file('nota')) {
            if ($request->oldNota) {
                Storage::delete($request->oldNota);
            }
            $validatedData['nota'] = $request->file('nota')->store('nota');
        } else {
            $validatedData['nota'] = $request->oldNota;
        }

        $validatedData['total_biaya'] = (int)$validatedData['harga_satuan'] * (int)$validatedData['volume'];

        Perawatan::where('id', $kendaraan->id)->update($validatedData);

        $request->session()->forget('editPS');

        return redirect('/dashboard/perawatan/kendaraan')->with('success', 'Berhasil memperbarui perawatan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perawatan  $perawatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perawatan $kendaraan)
    {
        if ($kendaraan->nota != 'nota/00.jpg') {
            Storage::delete($kendaraan->nota);
        }
        Perawatan::destroy($kendaraan->id);
        return redirect('/dashboard/perawatan/kendaraan')->with('success', 'Berhasil menghapus perawatan!');
    }
}
