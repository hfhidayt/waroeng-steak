<div class="modal fade" id="show{{ $k->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Kendaraan {{ $k->no_plat }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="wilayah" class="form-label">Wilayah</label>
                    <input type="text" class="form-control" placeholder="-" name="wilayah" value="{{ $k->wilayah }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="no_plat" class="form-label">Nomor Plat</label>
                    <input type="text" class="form-control" placeholder="-" name="no_plat" value="{{ $k->no_plat }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="jenis_kendaraan" class="form-label">Jenis
                        Kendaraan</label>
                    <input type="text" class="form-control" placeholder="-" name="jenis_kendaraan" value="{{ $k->jenis_kendaraan }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="no_rangka" class="form-label">Nomor
                        Rangka</label>
                    <input type="text" class="form-control" placeholder="-" name="no_rangka" value="{{ $k->no_rangka }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="no_mesin" class="form-label">Nomor
                        Mesin</label>
                    <input type="text" class="form-control" placeholder="-" name="no_mesin" value="{{ $k->no_mesin }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="no_bpkb" class="form-label">Nomor BPKB</label>
                    <input type="text" class="form-control" placeholder="-" name="no_bpkb" value="{{ $k->no_bpkb }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="atas_nama" class="form-label">Atas Nama</label>
                    <input type="text" class="form-control" placeholder="-" name="atas_nama" value="{{ $k->atas_nama }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control" placeholder="-" name="tahun" value="{{ $k->tahun }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="warna" class="form-label">Warna</label>
                    <input type="text" class="form-control" placeholder="-" name="warna" value="{{ $k->warna }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="bahan_bakar" class="form-label">Bahan Bakar</label>
                    <input type="text" class="form-control" placeholder="-" name="bahan_bakar" value="{{ $k->warna }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" placeholder="-" name="merk" value="{{ $k->jenis_merk }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="pic" class="form-label">PIC</label>
                    <input type="text" class="form-control @error('pic') is-invalid @enderror" placeholder="-" name="pic" value="{{ $k->pic }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="posisi_kendaraan" class="form-label">Posisi
                        Kendaraan</label>
                    <input type="text" class="form-control @error('posisi_kendaraan') is-invalid @enderror" placeholder="-" name="posisi_kendaraan" value="{{ $k->posisi_kendaraan }}" disabled>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="tanggal_pajak" class="form-label">Tanggal Pajak</label>
                        </div>
                        <div class="col">
                            <label for="bulan_pajak" class="form-label">Bulan Pajak</label>
                        </div>
                        <div class="col">
                            <label for="tahun_pajak" class="form-label">Tahun Pajak</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="-" name="tanggal_pajak" value="{{ $k->tanggal_pajak }}" disabled>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="-" name="bulan_pajak" value="{{ $k->bulan_pajak }}" disabled>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="-" name="tahun_pajak" value="{{ $k->tahun_pajak }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="tanggal_ganti_plat" class="form-label">Tanggal Ganti Plat</label>
                        </div>
                        <div class="col">
                            <label for="bulan_ganti_plat" class="form-label">Bulan Ganti Plat</label>
                        </div>
                        <div class="col">
                            <label for="tahun_ganti_plat" class="form-label">Tahun Ganti Plat</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="-" name="tanggal_ganti_plat" value="{{ $k->tanggal_ganti_plat }}" disabled>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="-" name="bulan_ganti_plat" value="{{ $k->bulan_ganti_plat }}" disabled>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="-" name="tahun_ganti_plat" value="{{ $k->tahun_ganti_plat }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" placeholder="-" name="keterangan" value="{{ $k->keterangan }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="surat_penanggung_jawab" class="form-label">Surat Penanggung Jawab</label>
                    <div class="col mb-3">
                        {{-- <iframe src="http://docs.google.com/gview?url={{ asset('storage/'.$k->surat_penanggung_jawab) }}&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe> --}}
                        <a href="#" onclick="window.open('{{ asset('storage/' . $k->surat_penanggung_jawab) }}', '_blank')">Lihat
                            Surat Penanggung Jawab</a>
                    </div>
                    {{-- <a href="#" onclick="window.open({{ asset('storage/'.$k->surat_penanggung_jawab) }}, '_blank')">Lihat Surat Penanggung Jawab</a> --}}
                    {{-- <input type="text" class="form-control " placeholder="-" name="surat_penanggung_jawab" value="{{ $k->surat_penanggung_jawab }}" disabled> --}}
                    {{-- <img src="{{ asset('storage/' . $k->surat_penanggung_jawab) }}" class="mb-3" disabled> --}}
                </div>
                <div class="mb-3">
                    <label for="gambar_depan" class="form-label">Gambar Depan</label>
                    <br>
                    <img src="{{ asset('storage/' . $k->gambar_depan) }}" class="img-preview img-fluid border-dark mb-3 border" disabled>
                </div>
                <div class="mb-3">
                    <label for="gambar_belakang" class="form-label">Gambar Belakang</label>
                    <br>
                    <img src="{{ asset('storage/' . $k->gambar_belakang) }}" class="img-preview img-fluid border-dark mb-3 border" disabled>
                </div>
                <div class="mb-3">
                    <label for="gambar_samping_kanan" class="form-label">Gambar Samping Kanan</label>
                    <br>
                    <img src="{{ asset('storage/' . $k->gambar_samping_kanan) }}" class="img-preview img-fluid border-dark mb-3 border" disabled>
                </div>
                <div class="mb-3">
                    <label for="gambar_samping_kiri" class="form-label">Gambar Samping Kiri</label>
                    <br>
                    <img src="{{ asset('storage/' . $k->gambar_samping_kiri) }}" class="img-preview img-fluid border-dark mb-3 border" disabled>
                </div>
                <div class="mb-3">
                    <label for="foto_bpkb" class="form-label">Foto BPKB</label>
                    <br>
                    <img src="{{ asset('storage/' . $k->foto_bpkb) }}" class="img-preview img-fluid border-dark mb-3 border" disabled>
                </div>
                <div class="mb-3">
                    <label for="foto_stnk" class="form-label">Foto STNK</label>
                    <br>
                    <img src="{{ asset('storage/' . $k->foto_stnk) }}" class="img-preview img-fluid border-dark mb-3 border" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
