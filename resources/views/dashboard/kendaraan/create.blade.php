<div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kendaraan Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/kendaraan" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Wilayah" name="wilayah"
                            id="inputWilayah">
                        <div class="invalid-feedback" id="a">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nomor Plat" name="no_plat"
                            id="inputNomorPlat">
                        <div class="invalid-feedback" id="b">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Jenis Kendaraan" name="jenis_kendaraan"
                            id="inputJenisKendaraan">
                        <div class="invalid-feedback" id="c">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nomor Rangka" name="no_rangka"
                            id="inputNomorRangka">
                        <div class="invalid-feedback" id="d">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nomor Mesin" name="no_mesin"
                            id="inputNomorMesin">
                        <div class="invalid-feedback" id="e">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nomor BPKB" name="no_bpkb"
                            id="inputNomorBPKB">
                        <div class="invalid-feedback" id="f">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Atas Nama" name="atas_nama"
                            id="inputAtasNama">
                        <div class="invalid-feedback" id="g">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Tahun" name="tahun" id="inputTahun">
                        <div class="invalid-feedback" id="h">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Warna" name="warna" id="inputWarna">
                        <div class="invalid-feedback" id="i">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Jenis/Merk" name="jenis_merk"
                            id="inputJenisMerk">
                        <div class="invalid-feedback" id="j">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="PIC" name="pic" id="inputPIC">
                        <div class="invalid-feedback" id="k">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Posisi Kendaraan"
                            name="posisi_kendaraan" id="inputPosisiKendaraan">
                        <div class="invalid-feedback" id="l">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Tanggal Pajak" name="tanggal_pajak"
                            id="inputTanggalPajak">
                        <div class="invalid-feedback" id="m">
                        </div>
                        {{-- <input type="text" class="form-control" placeholder="Bulan Pajak" name="bulan_pajak"
                            id="inputBulanPajak"> --}}
                        <select class="form-select" placeholder="Bulan Pajak" name="bulan_pajak"
                            id="inputBulanPajak">
                            <option selected>Bulan Pajak</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                        <div class="invalid-feedback" id="n">
                        </div>
                        <input type="text" class="form-control" placeholder="Tahun Pajak" name="tahun_pajak"
                            id="inputTahunPajak">
                        <div class="invalid-feedback" id="o">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Tgl Ganti Plat"
                            name="tanggal_ganti_plat" id="inputTanggalGantiPlat">
                        <div class="invalid-feedback" id="p">
                        </div>
                        {{-- <input type="text" class="form-control" placeholder="Bulan Ganti Plat"
                            name="bulan_ganti_plat" id="inputBulanGantiPlat"> --}}
                        <select class="form-select" type="text" placeholder="Bulan Ganti Plat"
                            name="bulan_ganti_plat" id="inputBulanGantiPlat">
                            <option selected>Bulan Ganti Plat</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                        <div class="invalid-feedback" id="q">
                        </div>
                        <input type="text" class="form-control" placeholder="Tahun Ganti Plat"
                            name="tahun_ganti_plat" id="inputTahunGantiPlat">
                        <div class="invalid-feedback" id="r">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan"
                            id="inputKeterangan">
                        <div class="invalid-feedback" id="s">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="surat_penanggung_jawab" class="form-label">Surat Penanggung
                            Jawab</label>
                        <input type="file" class="form-control" placeholder="Surat Penanggung Jawab"
                            name="surat_penanggung_jawab" id="inputSuratPenanggungJawab">
                        <div class="invalid-feedback" id="t">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_depan" class="form-label">Gambar Depan</label>
                        <img class="img-preview-front img-fluid mb-3">
                        <input type="file" class="form-control" placeholder="Gambar Depan" name="gambar_depan"
                            id="inputGambarDepan" onchange="previewGambarDepan()">
                        <div class="invalid-feedback" id="u">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_belakang" class="form-label">Gambar Belakang</label>
                        <img class="img-preview-behind img-fluid mb-3">
                        <input type="file" class="form-control" placeholder="Gambar Belakang"
                            name="gambar_belakang" id="inputGambarBelakang" onchange="previewGambarBelakang()">
                        <div class="invalid-feedback" id="v">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_samping_kanan" class="form-label">Gambar Samping Kanan</label>
                        <img class="img-preview-right img-fluid mb-3">
                        <input type="file" class="form-control" placeholder="Gambar Samping Kanan"
                            name="gambar_samping_kanan" id="inputGambarSampingKanan"
                            onchange="previewGambarSampingKanan()">
                        <div class="invalid-feedback" id="w">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_samping_kiri" class="form-label">Gambar Samping Kiri</label>
                        <img class="img-preview-left img-fluid mb-3">
                        <input type="file" class="form-control" placeholder="Gambar Samping Kiri"
                            name="gambar_samping_kiri" id="inputGambarSampingKiri"
                            onchange="previewGambarSampingKiri()">
                        <div class="invalid-feedback" id="x">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
