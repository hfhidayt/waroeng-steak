<div class="modal fade" id="edit{{ $ps->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Perawatan Kendaraan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/perawatan/kendaraan/{{ $ps->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="kendaraan_id" class="form-label">Nomor Plat</label>
                        <select class="form-select" name="kendaraan_id" id="kendaraan_id{{ $ps->id }}">
                            <option value="">-- Nomor Plat --</option>
                            @foreach ($no_plat as $np)
                                <option value="{{ $np->id }}"
                                    {{ $ps->kendaraan_id == $np->id ? 'selected' : '' }}>{{ $np->no_plat }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback" id="np_e{{ $ps->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Perawatan</label>
                        <input type="text" class="form-control" placeholder="Tanggal Perawatan" name="tanggal"
                            id="tanggal{{ $ps->id }}" value="{{ $ps->tanggal }}">
                        <div class="invalid-feedback" id="tp_e{{ $ps->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Bulan Perawatan</label>
                        <input type="text" class="form-control" placeholder="Bulan Perawatan" name="bulan"
                            id="bulan{{ $ps->id }}" value="{{ $ps->bulan }}">
                        <div class="invalid-feedback" id="tp_e{{ $ps->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tahun Perawatan</label>
                        <input type="text" class="form-control" placeholder="Tahun Perawatan" name="tahun"
                            id="tahun{{ $ps->id }}" value="{{ $ps->tahun }}">
                        <div class="invalid-feedback" id="tp_e{{ $ps->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_perawatan" class="form-label">Jenis Perawatan</label>
                        <select class="form-select" name="jenis_perawatan" id="jenis_perawatan{{ $ps->id }}">
                            <option value="">-- Perawatan Kendaraan --</option>
                            @foreach ($jenis_perawatan as $js)
                                <option value="{{ $js->jenis_perawatan }}"
                                    {{ $ps->jenis_perawatan == $js->jenis_perawatan ? 'selected' : '' }}>
                                    {{ $js->jenis_perawatan }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback" id="jp_e{{ $ps->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tempat_perawatan" class="form-label">Tempat Perawatan</label>
                        <input type="text" class="form-control" placeholder="Tempat Perawatan"
                            name="tempat_perawatan" id="tempat_perawatan{{ $ps->id }}"
                            value="{{ $ps->tempat_perawatan }}">
                        <div class="invalid-feedback" id="tps_e{{ $ps->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="barang_jasa" class="form-label">Barang/Jasa</label>
                        <input type="text" class="form-control" placeholder="Barang/Jasa" name="barang_jasa"
                            id="barang_jasa{{ $ps->id }}" value="{{ $ps->barang_jasa }}">
                        <div class="invalid-feedback" id="bj_e{{ $ps->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="volume" class="form-label">Volume</label>
                        <input type="text" class="form-control volume{{ $ps->id }}" placeholder="Volume"
                            name="volume" id="volume{{ $ps->id }}" value="{{ $ps->volume }}"
                            oninput="hitungEdit({{ $ps->id }})">
                        <div class="invalid-feedback" id="v_e{{ $ps->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" class="form-control" placeholder="Satuan" name="satuan"
                            id="satuan{{ $ps->id }}" value="{{ $ps->satuan }}">
                        <div class="invalid-feedback" id="s_e{{ $ps->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kilometer" class="form-label">Kilometer Kendaraan</label>
                        <input type="number" class="form-control" placeholder="Kilometer Kendaraan"
                            name="kilometer" id="kilometer{{ $ps->id }}" value="{{ $ps->kilometer }}">
                        <div class="invalid-feedback" id="k_e{{ $ps->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="harga_satuan" class="form-label">Harga Satuan</label>
                        <input type="number" class="form-control harga_satuan{{ $ps->id }}"
                            placeholder="Harga Satuan" name="harga_satuan" id="harga_satuan{{ $ps->id }}"
                            value="{{ $ps->harga_satuan }}" oninput="hitungEdit({{ $ps->id }})">
                        <div class="invalid-feedback" id="hs_e{{ $ps->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="total_biaya" class="form-label">Total Biaya</label>
                        <input type="number" class="form-control total_biaya{{ $ps->id }}"
                            placeholder="Total Biaya" name="total_biaya" id="total_biaya{{ $ps->id }}"
                            disabled>
                        <div class="invalid-feedback" id="tb_e{{ $ps->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nota" class="form-label">Nota</label>
                        <input type="hidden" name="oldNota" id="oldNota" value="{{ $ps->nota }}">
                        <img src="{{ asset('storage/' . $ps->nota) }}" class="img-preview img-fluid mb-3">
                        <input class="form-control" type="file" id="nota{{ $ps->id }}" name="nota"
                            onchange="previewImage()">
                        <div class="invalid-feedback" id="n_e{{ $ps->id }}">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
