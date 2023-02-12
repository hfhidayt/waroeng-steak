<div class="modal fade" id="createPS" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Perawatan Kendaraan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/perawatan/kendaraan" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        {{-- <input type="text" class="form-control" placeholder="Nomor Plat" name="no_plat" id="no_plat"> --}}
                        <select class="form-select kendaraan_idC" name="kendaraan_id" id="kendaraan_id">
                            <option value="">-- Nomor Plat --</option>
                            @foreach ($no_plat as $np)
                                <option value="{{ $np->id }}" {{ old('no_plat') == $np->id ? 'selected' : '' }}>
                                    {{ $np->no_plat }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback" id="np_e">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Tgl Perawatan" name="tanggal"
                            id="tanggal">
                        <div class="invalid-feedback" id="tp_e">
                        </div>
                        {{-- <input type="text" class="form-control" placeholder="Bulan Perawatan" name="bulan"
                            id="bulan"> --}}
                        <select class="form-select" placeholder="Bulan Perawatan" name="bulan" id="bulan">
                            <option value="" selected>Bulan Perawatan</option>
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
                        {{-- <div class="invalid-feedback" id="bp_e">
                        </div> --}}
                        <input type="number" class="form-control" placeholder="Tahun Perawatan" name="tahun"
                            id="tahun">
                        {{-- <div class="invalid-feedback" id="thp_e">
                        </div> --}}
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" name="jenis_perawatan" id="jenis_perawatan">
                            <option value="">-- Perawatan Kendaraan --</option>
                            @foreach ($jenis_perawatan as $js)
                                <option value="{{ $js->jenis_perawatan }}"
                                    {{ old('jenis_perawatan') == $js->jenis_perawatan ? 'selected' : '' }}>
                                    {{ $js->jenis_perawatan }}</option>
                            @endforeach
                        </select>
                        {{-- <div class="invalid-feedback" id="jp_e">
                        </div> --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Barang/Jasa" name="barang_jasa"
                            id="barang_jasa">
                        <div class="invalid-feedback" id="bj_e">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control volume" placeholder="Volume" name="volume"
                            id="volume" oninput="hitung()">
                        <div class="invalid-feedback" id="v_e">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Satuan" name="satuan" id="satuan">
                        <div class="invalid-feedback" id="s_e">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Tempat Perawatan"
                            name="tempat_perawatan" id="tempat_perawatan">
                        <div class="invalid-feedback" id="tps_e">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Kilometer Kendaraan" name="kilometer"
                            id="kilometer">
                        <div class="invalid-feedback" id="k_e">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control harga_satuan" placeholder="Harga Satuan"
                            name="harga_satuan" id="harga_satuan" oninput="hitung()">
                        <div class="invalid-feedback" id="hs_e">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control total_biaya" placeholder="Total Biaya"
                            name="total_biaya" id="total_biaya" disabled>
                        <div class="invalid-feedback" id="tb_e">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nota" class="form-label">Nota</label>
                        <img class="img-preview img-fluid mb-3">
                        <input class="form-control" type="file" id="nota" name="nota"
                            onchange="previewImage()">
                        <div class="invalid-feedback" id="n_e">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Buat</button>
            </div>
            </form>
        </div>
    </div>
</div>
