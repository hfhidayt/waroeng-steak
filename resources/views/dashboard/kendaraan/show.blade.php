<div class="modal fade" id="show{{ $k->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Kendaraan {{ $k->no_plat }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="showWilayah" class="form-label">Wilayah</label>
                    <input type="text" class="form-control" placeholder="-" name="wilayah"
                        value="{{ $k->wilayah }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="showNomorPlat" class="form-label">Nomor Plat</label>
                    <input type="text" class="form-control" placeholder="-" name="no_plat"
                        value="{{ $k->no_plat }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="showJenisKendaraan" class="form-label">Jenis
                        Kendaraan</label>
                    <input type="text" class="form-control" placeholder="-" name="jenis_kendaraan"
                        value="{{ $k->jenis_kendaraan }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="showNomorRangka" class="form-label">Nomor
                        Rangka</label>
                    <input type="text" class="form-control" placeholder="-" name="no_rangka"
                        value="{{ $k->no_rangka }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="showNomorMesin" class="form-label">Nomor
                        Mesin</label>
                    <input type="text" class="form-control" placeholder="-" name="no_mesin"
                        value="{{ $k->no_mesin }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="showNomorBPKB" class="form-label">Nomor BPKB</label>
                    <input type="text" class="form-control" placeholder="-" name="no_bpkb"
                        value="{{ $k->no_bpkb }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="showAtasNama" class="form-label">Atas Nama</label>
                    <input type="text" class="form-control" placeholder="-" name="atas_nama"
                        value="{{ $k->atas_nama }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="showTahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control" placeholder="-" name="tahun"
                        value="{{ $k->tahun }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="showWarna" class="form-label">Warna</label>
                    <input type="text" class="form-control" placeholder="-" name="warna"
                        value="{{ $k->warna }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="showJenisMerk" class="form-label">Jenis/Merk</label>
                    <input type="text" class="form-control" placeholder="-" name="jenis_merk"
                        value="{{ $k->jenis_merk }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="showPIC" class="form-label">PIC</label>
                    <input type="text" class="form-control @error('pic') is-invalid @enderror" placeholder="-"
                        name="pic" value="{{ $k->pic }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="showPosisiKendaraan" class="form-label">Posisi
                        Kendaraan</label>
                    <input type="text" class="form-control @error('posisi_kendaraan') is-invalid @enderror"
                        placeholder="-" name="posisi_kendaraan" value="{{ $k->posisi_kendaraan }}" disabled>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="showTanggalPajak" class="form-label">Tanggal Pajak</label>
                        </div>
                        <div class="col">
                            <label for="showBulanPajak" class="form-label">Bulan Pajak</label>
                        </div>
                        <div class="col">
                            <label for="showTahunPajak" class="form-label">Tahun Pajak</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="-" name="tanggal_pajak"
                                value="{{ $k->tanggal_pajak }}" disabled>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="-" name="bulan_pajak"
                                value="{{ $k->bulan_pajak }}" disabled>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="-" name="tahun_pajak"
                                value="{{ $k->tahun_pajak }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="showTanggalGantiPlat" class="form-label">Tanggal Ganti Plat</label>
                        </div>
                        <div class="col">
                            <label for="showBulanGantiPlat" class="form-label">Bulan Ganti Plat</label>
                        </div>
                        <div class="col">
                            <label for="showTahunGantiPlat" class="form-label">Tahun Ganti Plat</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control " placeholder="-" name="tanggal_ganti_plat"
                                value="{{ $k->tanggal_ganti_plat }}" disabled>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control " placeholder="-" name="bulan_ganti_plat"
                                value="{{ $k->bulan_ganti_plat }}" disabled>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control " placeholder="-" name="tahun_ganti_plat"
                                value="{{ $k->tahun_ganti_plat }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="showKeterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control " placeholder="-" name="keterangan"
                        value="{{ $k->keterangan }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="editSuratPenanggungJawab" class="form-label">Surat Penanggung
                        Jawab</label>
                    {{-- <img src="{{ asset('storage/' . $k->surat_penanggung_jawab) }}" class="mb-3" disabled> --}}
                </div>
                <div class="mb-3">
                    <label for="editGambarDepan" class="form-label">Gambar Depan</label>
                    <img src="{{ asset('storage/' . $k->gambar_depan) }}" class="img-preview-front img-fluid mb-3"
                        disabled>
                </div>
                <div class="mb-3">
                    <label for="editGambarBelakang" class="form-label">Gambar Belakang</label>
                    <img src="{{ asset('storage/' . $k->gambar_belakang) }}"
                        class="img-preview-behind img-fluid mb-3" disabled>
                </div>
                <div class="mb-3">
                    <label for="editGambarSampingKanan" class="form-label">Gambar Samping Kanan</label>
                    <img src="{{ asset('storage/' . $k->gambar_samping_kanan) }}"
                        class="img-preview-right img-fluid mb-3" disabled>
                </div>
                <div class="mb-3">
                    <label for="editGambarSampingKiri" class="form-label">Gambar Samping Kiri</label>
                    <img src="{{ asset('storage/' . $k->gambar_samping_kiri) }}"
                        class="img-preview-left img-fluid mb-3" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
