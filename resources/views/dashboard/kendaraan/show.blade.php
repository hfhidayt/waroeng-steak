<div class="modal fade" id="show{{ $k->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Kendaraan {{ $k->no_plat }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <label for="showWilayah" style="text-align: right" class="col-4 col-form-label">Wilayah</label>
                    <input type="text" class="form-control" placeholder="-" name="wilayah"
                        value="{{ $k->wilayah }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showNomorPlat" style="text-align: right" class="col-4 col-form-label">Nomor Plat</label>
                    <input type="text" class="form-control" placeholder="-" name="no_plat"
                        value="{{ $k->no_plat }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showJenisKendaraan" style="text-align: right" class="col-4 col-form-label">Jenis
                        Kendaraan</label>
                    <input type="text" class="form-control" placeholder="-" name="jenis_kendaraan"
                        value="{{ $k->jenis_kendaraan }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showNomorRangka" style="text-align: right" class="col-4 col-form-label">Nomor
                        Rangka</label>
                    <input type="text" class="form-control" placeholder="-" name="no_rangka"
                        value="{{ $k->no_rangka }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showNomorMesin" style="text-align: right" class="col-4 col-form-label">Nomor
                        Mesin</label>
                    <input type="text" class="form-control" placeholder="-" name="no_mesin"
                        value="{{ $k->no_mesin }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showNomorBPKB" style="text-align: right" class="col-4 col-form-label">Nomor BPKB</label>
                    <input type="text" class="form-control" placeholder="-" name="no_bpkb"
                        value="{{ $k->no_bpkb }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showAtasNama" style="text-align: right" class="col-4 col-form-label">Atas Nama</label>
                    <input type="text" class="form-control" placeholder="-" name="atas_nama"
                        value="{{ $k->atas_nama }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showTahun" style="text-align: right" class="col-4 col-form-label">Tahun</label>
                    <input type="text" class="form-control" placeholder="-" name="tahun"
                        value="{{ $k->tahun }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showWarna" style="text-align: right" class="col-4 col-form-label">Warna</label>
                    <input type="text" class="form-control" placeholder="-" name="warna"
                        value="{{ $k->warna }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showJenisMerk" style="text-align: right"
                        class="col-4 col-form-label">Jenis/Merk</label>
                    <input type="text" class="form-control" placeholder="-" name="jenis_merk"
                        value="{{ $k->jenis_merk }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showPosisiKendaraan" style="text-align: right" class="col-4 col-form-label">Posisi
                        Kendaraan</label>
                    <input type="text" class="form-control @error('posisi_kendaraan') is-invalid @enderror"
                        placeholder="-" name="posisi_kendaraan" value="{{ $k->posisi_kendaraan }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showPajak" style="text-align: right" class="col-4 col-form-label">Pajak</label>
                    <input type="text" class="form-control" placeholder="-" name="pajak"
                        value="{{ $k->pajak }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showGantiPlat" style="text-align: right" class="col-4 col-form-label">Ganti
                        Plat</label>
                    <input type="text" class="form-control " placeholder="-" name="ganti_plat"
                        value="{{ $k->ganti_plat }}" disabled>
                </div>
                <div class="input-group mb-3">
                    <label for="showKeterangan" style="text-align: right"
                        class="col-4 col-form-label">Keterangan</label>
                    <input type="text" class="form-control " placeholder="-" name="keterangan"
                        value="{{ $k->keterangan }}" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
