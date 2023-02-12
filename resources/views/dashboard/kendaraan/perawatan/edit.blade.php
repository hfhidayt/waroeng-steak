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
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="tanggal" class="form-label">Tanggal Perawatan</label>
                            </div>
                            <div class="col">
                                <label for="tanggal" class="form-label">Bulan Perawatan</label>
                            </div>
                            <div class="col">
                                <label for="tanggal" class="form-label">Tahun Perawatan</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Tanggal Perawatan"
                                    name="tanggal" id="tanggal{{ $ps->id }}" value="{{ $ps->tanggal }}">
                            </div>
                            <div class="col">
                                <select class="form-select" placeholder="Bulan Perawatan" name="bulan"
                                    id="inputBulanPerawatan{{ $ps->id }}">
                                    {{-- <option value="{{ $ps->bulan }}" selected>{{ $ps->bulan }}
                                    </option> --}}
                                    <option value="Januari" {{ $ps->bulan == 'Januari' ? 'selected' : '' }}>Januari
                                    </option>
                                    <option value="Februari" {{ $ps->bulan == 'Februari' ? 'selected' : '' }}>Februari
                                    </option>
                                    <option value="Maret" {{ $ps->bulan == 'Maret' ? 'selected' : '' }}>Maret</option>
                                    <option value="April" {{ $ps->bulan == 'April' ? 'selected' : '' }}>April</option>
                                    <option value="Mei" {{ $ps->bulan == 'Mei' ? 'selected' : '' }}>Mei</option>
                                    <option value="Juni" {{ $ps->bulan == 'Juni' ? 'selected' : '' }}>Juni</option>
                                    <option value="Juli" {{ $ps->bulan == 'Juli' ? 'selected' : '' }}>Juli</option>
                                    <option value="Agustus" {{ $ps->bulan == 'Agustus' ? 'selected' : '' }}>Agustus
                                    </option>
                                    <option value="September" {{ $ps->bulan == 'September' ? 'selected' : '' }}>
                                        September</option>
                                    <option value="Oktober" {{ $ps->bulan == 'Oktober' ? 'selected' : '' }}>Oktober
                                    </option>
                                    <option value="November" {{ $ps->bulan == 'November' ? 'selected' : '' }}>November
                                    </option>
                                    <option value="Desember" {{ $ps->bulan == 'Desember' ? 'selected' : '' }}>Desember
                                    </option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Tahun Perawatan" name="tahun"
                                    id="tahun{{ $ps->id }}" value="{{ $ps->tahun }}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_perawatan" class="form-label">Jenis Perawatan</label>
                        <select class="form-select" name="jenis_perawatan" id="jenis_perawatan{{ $ps->id }} ">
                            <option value="">-- Perawatan Kendaraan --</option>
                            @foreach ($jenis_perawatan as $js)
                                <option value="{{ $js->jenis_perawatan }}"
                                    {{ $ps->jenis_perawatan == $js->jenis_perawatan ? 'selected' : '' }}>
                                    {{ $js->jenis_perawatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tempat_perawatan" class="form-label">Tempat Perawatan</label>
                        <input type="text" class="form-control" placeholder="Tempat Perawatan"
                            name="tempat_perawatan" id="tempat_perawatan{{ $ps->id }}"
                            value="{{ $ps->tempat_perawatan }}">
                    </div>
                    <div class="mb-3">
                        <label for="barang_jasa" class="form-label">Barang/Jasa</label>
                        <input type="text" class="form-control" placeholder="Barang/Jasa" name="barang_jasa"
                            id="barang_jasa{{ $ps->id }}" value="{{ $ps->barang_jasa }}">
                    </div>
                    <div class="mb-3">
                        <label for="volume" class="form-label">Volume</label>
                        <input type="text" class="form-control volume{{ $ps->id }}" placeholder="Volume"
                            name="volume" id="volume{{ $ps->id }}" value="{{ $ps->volume }}"
                            oninput="hitungEdit({{ $ps->id }})">
                    </div>
                    <div class="mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" class="form-control" placeholder="Satuan" name="satuan"
                            id="satuan{{ $ps->id }}" value="{{ $ps->satuan }}">
                    </div>
                    <div class="mb-3">
                        <label for="kilometer" class="form-label">Kilometer Kendaraan</label>
                        <input type="number" class="form-control" placeholder="Kilometer Kendaraan"
                            name="kilometer" id="kilometer{{ $ps->id }}" value="{{ $ps->kilometer }}">
                    </div>
                    <div class="mb-3">
                        <label for="harga_satuan" class="form-label">Harga Satuan</label>
                        <input type="number" class="form-control harga_satuan{{ $ps->id }}"
                            placeholder="Harga Satuan" name="harga_satuan" id="harga_satuan{{ $ps->id }}"
                            value="{{ $ps->harga_satuan }}" oninput="hitungEdit({{ $ps->id }})">
                    </div>
                    <div class="mb-3">
                        <label for="total_biaya" class="form-label">Total Biaya</label>
                        <input type="number" class="form-control total_biaya{{ $ps->id }}"
                            placeholder="Total Biaya" name="total_biaya" id="total_biaya{{ $ps->id }}"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="nota" class="form-label">Nota</label>
                        <br>
                        <input type="hidden" name="oldNota" id="oldNota" value="{{ $ps->nota }}">
                        @if ($ps->nota)
                            <img src="{{ asset('storage/' . $ps->nota) }}"
                                class="img-preview img-fluid border border-dark mb-3">
                        @else
                            <img class="img-preview img-fluid border border-dark mb-3">
                        @endif
                        <input class="form-control" type="file" id="nota{{ $ps->id }}" name="nota"
                            onchange="previewImage()">
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
