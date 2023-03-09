<?php

namespace App\Http\Controllers;

use App\Models\BahanBakar;
use App\Models\JenisKendaraan;
use App\Models\Kendaraan;
use App\Models\Merk;
use Illuminate\Support\Facades\Storage;
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
            'jenis_kendaraan' => JenisKendaraan::all(),
            'merk' => Merk::all(),
            'bahan_bakar' => BahanBakar::all(),
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
        $request->session()->put('create', 'true');
        $validatedData = $request->validate([
            'wilayah' => 'nullable',
            'no_plat' => 'required|unique:kendaraans',
            'jenis_kendaraan' => 'nullable',
            'no_rangka' => 'nullable',
            'no_mesin' => 'nullable',
            'no_bpkb' => 'nullable',
            'atas_nama' => 'nullable',
            'tahun' => 'nullable',
            'warna' => 'nullable',
            'bahan_bakar' => 'nullable',
            'jenis_merk' => 'nullable',
            'pic' => 'nullable',
            'posisi_kendaraan' => 'nullable',
            'tanggal_pajak' => 'nullable',
            'bulan_pajak' => 'nullable',
            'tahun_pajak' => 'nullable',
            'tanggal_ganti_plat' => 'nullable',
            'bulan_ganti_plat' => 'nullable',
            'tahun_ganti_plat' => 'nullable',
            'surat_penanggung_jawab' => 'nullable',
            'gambar_depan' => 'nullable',
            'gambar_belakang' => 'nullable',
            'gambar_samping_kanan' => 'nullable',
            'gambar_samping_kiri' => 'nullable',
            'keterangan' => 'nullable',
        ]);

        $validatedData['surat_penanggung_jawab'] = $request->file('surat_penanggung_jawab')->store('surat');
        $validatedData['gambar_depan'] = $request->file('gambar_depan')->store('kendaraan');
        $validatedData['gambar_belakang'] = $request->file('gambar_belakang')->store('kendaraan');
        $validatedData['gambar_samping_kanan'] = $request->file('gambar_samping_kanan')->store('kendaraan');
        $validatedData['gambar_samping_kiri'] = $request->file('gambar_samping_kiri')->store('kendaraan');

        Kendaraan::Create($validatedData);

        $request->session()->forget('create');

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
        $request->session()->put('editId', $kendaraan->id);
        $validatedData = $request->validate([
            'wilayah' => 'nullable',
            'no_plat' => 'required',
            'jenis_kendaraan' => 'nullable',
            'no_rangka' => 'nullable',
            'no_mesin' => 'nullable',
            'no_bpkb' => 'nullable',
            'atas_nama' => 'nullable',
            'tahun' => 'nullable',
            'warna' => 'nullable',
            'bahan_bakar' => 'nullable',
            'jenis_merk' => 'nullable',
            'pic' => 'nullable',
            'posisi_kendaraan' => 'nullable',
            'tanggal_pajak' => 'nullable',
            'bulan_pajak' => 'nullable',
            'tahun_pajak' => 'nullable',
            'tanggal_ganti_plat' => 'nullable',
            'bulan_ganti_plat' => 'nullable',
            'tahun_ganti_plat' => 'nullable',
            'surat_penanggung_jawab' => 'nullable',
            'gambar_depan' => 'nullable',
            'gambar_belakang' => 'nullable',
            'gambar_samping_kanan' => 'nullable',
            'gambar_samping_kiri' => 'nullable',
            'keterangan' => 'nullable',
        ]);

        if($request->no_plat === $kendaraan->no_plat) {
            unset($validatedData['no_plat']);
        }
        // dd("request: ".$request->no_plat, "kendaraan: ".$kendaraan->no_plat, $validatedData);

        if ($request->file('surat_penanggung_jawab')) {
            if ($request->oldSurat_penanggung_jawab) {
                Storage::delete($request->oldSurat_penanggung_jawab);
            }
            $validatedData['surat_penanggung_jawab'] = $request->file('surat_penanggung_jawab')->store('surat');
        }
        if ($request->file('gambar_depan')) {
            if ($request->oldGambar_depan) {
                Storage::delete($request->oldGambar_depan);
            }
            $validatedData['gambar_depan'] = $request->file('gambar_depan')->store('kendaraan');
        }
        if ($request->file('gambar_belakang')) {
            if ($request->oldGambar_belakang) {
                Storage::delete($request->oldGambar_belakang);
            }
            $validatedData['gambar_belakang'] = $request->file('gambar_belakang')->store('kendaraan');
        }
        if ($request->file('gambar_samping_kanan')) {
            if ($request->oldGambar_samping_kanan) {
                Storage::delete($request->oldGambar_samping_kanan);
            }
            $validatedData['gambar_samping_kanan'] = $request->file('gambar_samping_kanan')->store('kendaraan');
        }
        if ($request->file('gambar_samping_kiri')) {
            if ($request->oldGambar_samping_kiri) {
                Storage::delete($request->oldGambar_samping_kiri);
            }
            $validatedData['gambar_samping_kiri'] = $request->file('gambar_samping_kiri')->store('kendaraan');
        }

        Kendaraan::Where('id', $kendaraan->id)->update($validatedData);

        $request->session()->forget('editId');

        return redirect('/dashboard/kendaraan')->with('success', 'Berhasil memperbarui data kendaraan');
    }
	// tes push
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
