<div class="modal fade" id="show{{ $ps->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Perawatan Kendaraan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/perawatan/kendaraan/{{ $ps->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="no_plat" class="form-label">Nomor Plat</label>
                        <select class="form-select" name="no_plat" id="no_plat" disabled>
                            <option value="">-- Nomor Plat --</option>
                            @foreach ($no_plat as $np)
                                <option value="{{ $np->id }}"
                                    {{ $ps->kendaraan_id == $np->id ? 'selected' : '' }}>{{ $np->no_plat }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Perawatan</label>
                        <input type="text" class="form-control" placeholder="Tanggal Perawatan" name="tanggal"
                            id="tanggal" value="{{ $ps->tanggal }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_perawatan" class="form-label">Bulan Perawatan</label>
                        <input type="text" class="form-control" placeholder="Bulan Perawatan" name="bulan"
                            id="bulan" value="{{ $ps->bulan }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_perawatan" class="form-label">Tahun Perawatan</label>
                        <input type="text" class="form-control" placeholder="Tahun Perawatan" name="tahun"
                            id="tahun" value="{{ $ps->tahun }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_perawatan" class="form-label">Jenis Perawatan</label>
                        <select class="form-select" name="jenis_perawatan" id="jenis_perawatan" disabled>
                            <option value="">-- Perawatan Kendaraan --</option>
                            @foreach ($jenis_perawatan as $js)
                                <option value="{{ $js->jenis_perawatan }}"
                                    {{ $ps->jenis_perawatan == $js->jenis_perawatan ? 'selected' : '' }}>
                                    {{ $js->jenis_perawatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="barang_jasa" class="form-label">Barang/Jasa</label>
                        <input type="text" class="form-control" placeholder="Barang/Jasa" name="barang_jasa"
                            id="barang_jasa" value="{{ $ps->barang_jasa }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="volume" class="form-label">Volume</label>
                        <input type="number" class="form-control" placeholder="Volume" name="volume" id="volume"
                            value="{{ $ps->volume }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" class="form-control" placeholder="Satuan" name="satuan" id="satuan"
                            value="{{ $ps->satuan }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="tempat_perawatan" class="form-label">Tempat Perawatan</label>
                        <input type="text" class="form-control" placeholder="Tempat Perawatan"
                            name="tempat_perawatan" id="tempat_perawatan" value="{{ $ps->tempat_perawatan }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="kilometer" class="form-label">Kilometer Kendaraan</label>
                        <input type="text" class="form-control" placeholder="Kilometer Kendaraan"
                            name="kilometer" id="kilometer" value="{{ $ps->kilometer }}KM" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="harga_satuan" class="form-label">Harga Satuan</label>
                        <input type="text" class="form-control" placeholder="Harga Satuan" name="harga_satuan"
                            id="harga_satuan" value="Rp{{ number_format($ps->harga_satuan, 0, ',', '.') }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="total_biaya" class="form-label">Total Biaya</label>
                        <input type="text" class="form-control" placeholder="Total Biaya" name="total_biaya"
                            {{-- id="total_biaya" value="{{ $ps->total_biaya }}" disabled> --}}
                            id="total_biaya" value="Rp{{ number_format($ps->total_biaya, 0, ',', '.') }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="nota" class="form-label text-center">Nota</label>
                        <img src="{{ asset('storage/' . $ps->nota) }}" class="img-preview img-fluid mb-3" disabled>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>
