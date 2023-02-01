<div class="modal fade" id="createPS" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Penjualan Kendaraan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/perawatan/kendaraan" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        {{-- <input type="text" class="form-control" placeholder="Nomor Plat" name="no_plat" id="no_plat"> --}}
                        <select class="form-select" name="kendaraan_id" id="kendaraan_id">
                            <option value="">-- Nomor Plat --</option>
                            @foreach ($no_plat as $np)
                                <option value="{{ $np->id }}" {{ old('no_plat') == $np->id ? "selected" : "" }}>{{ $np->no_plat }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback" id="np_e">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text">Tanggal Perawatan</span>
                            <input type="date" class="form-control" placeholder="Tanggal Perawatan" name="tgl_perawatan" id="tgl_perawatan">
                            <div class="invalid-feedback" id="tp_e">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" name="jenis_perawatan" id="jenis_perawatan">
                            <option value="">-- Perawatan Kendaraan --</option>
                            @foreach ($jenis_perawatan as $js)
                                <option value="{{ $js->jenis_perawatan }}" {{ old('jenis_perawatan') == $js->jenis_perawatan ? 'selected' : '' }}>{{ $js->jenis_perawatan }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback" id="jp_e">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Total Biaya" name="total_biaya" id="total_biaya">
                        <div class="invalid-feedback" id="tb_e">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Tempat Perawatan" name="tempat_perawatan" id="tempat_perawatan">
                        <div class="invalid-feedback" id="tps_e">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Kilometer Kendaraan" name="kilometer" id="kilometer">
                        <div class="invalid-feedback" id="k_e">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nota" class="form-label">Nota</label>
                        <img class="img-preview img-fluid mb-3">
                        <input class="form-control" type="file" id="nota" name="nota" onchange="previewImage()">
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