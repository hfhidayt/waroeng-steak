<div class="modal fade" id="edit{{ $k->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Kendaraan {{ $k->no_plat }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/kendaraan/{{ $k->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="editWilayah" class="form-label">Wilayah</label>
                        <input type="text" class="form-control" placeholder="Wilayah" name="wilayah"
                            id="inputWilayah{{ $k->id }}" value="{{ $k->wilayah }}">
                        <div class="invalid-feedback" id="a{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editNomorPlat" class="form-label">Nomor
                            Plat</label>
                        <input type="text" class="form-control" placeholder="Nomor Plat" name="no_plat"
                            id="inputNomorPlat{{ $k->id }}" value="{{ $k->no_plat }}">
                        <div class="invalid-feedback" id="b{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editJenisKendaraan" class="form-label">Jenis
                            Kendaraan</label>
                        {{-- <input type="text" class="form-control" placeholder="Jenis Kendaraan" name="jenis_kendaraan"
                            id="inputJenisKendaraan{{ $k->id }}" value="{{ $k->jenis_kendaraan }}"> --}}
                        <select class="form-select" name="jenis_kendaraan" id="jenis_kendaraan" required>
                            <option value="{{ $k->jenis_kendaraan }}">{{ $k->jenis_kendaraan }}</option>
                            @foreach ($jenis_kendaraan as $jk)
                                <option value="{{ $jk->jenis_kendaraan }}"
                                    {{ old('jenis_kendaraan') == $jk->jenis_kendaraan ? 'selected' : '' }}>
                                    {{ $jk->jenis_kendaraan }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback" id="c{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editNomorRangka" class="form-label">Nomor
                            Rangka</label>
                        <input type="text" class="form-control" placeholder="Nomor Rangka" name="no_rangka"
                            id="inputNomorRangka{{ $k->id }}" value="{{ $k->no_rangka }}">
                        <div class="invalid-feedback" id="d{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editNomorMesin" class="form-label">Nomor
                            Mesin</label>
                        <input type="text" class="form-control" placeholder="Nomor Mesin" name="no_mesin"
                            id="inputNomorMesin{{ $k->id }}" value="{{ $k->no_mesin }}">
                        <div class="invalid-feedback" id="e{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editNomorBPKB" class="form-label">Nomor
                            BPKB</label>
                        <input type="text" class="form-control" placeholder="Nomor BPKB" name="no_bpkb"
                            id="inputNomorBPKB{{ $k->id }}" value="{{ $k->no_bpkb }}">
                        <div class="invalid-feedback" id="f{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editAtasNama" class="form-label">Atas
                            Nama</label>
                        <input type="text" class="form-control" placeholder="Atas Nama" name="atas_nama"
                            id="inputAtasNama{{ $k->id }}" value="{{ $k->atas_nama }}">
                        <div class="invalid-feedback" id="g{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editTahun" class="form-label">Tahun</label>
                        <input type="text" class="form-control" placeholder="Tahun" name="tahun"
                            id="inputTahun{{ $k->id }}" value="{{ $k->tahun }}">
                        <div class="invalid-feedback" id="h{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editWarna" class="form-label">Warna</label>
                        <input type="text" class="form-control" placeholder="Warna" name="warna"
                            id="inputWarna{{ $k->id }}" value="{{ $k->warna }}">
                        <div class="invalid-feedback" id="i{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editBahanBakar" class="form-label">Bahan Bakar</label>
                        {{-- <input type="text" class="form-control" placeholder="Warna" name="warna"
                            id="inputWarna{{ $k->id }}" value="{{ $k->warna }}"> --}}
                        <select class="form-select" name="bahan_bakar" id="bahan_bakar" required>
                            <option value="{{ $k->bahan_bakar }}">{{ $k->bahan_bakar }}</option>
                            @foreach ($bahan_bakar as $bb)
                                <option value="{{ $bb->bahan_bakar }}"
                                    {{ old('bahan_bakar') == $bb->bahan_bakar ? 'selected' : '' }}>
                                    {{ $bb->bahan_bakar }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editMerk" class="form-label">Merk</label>
                        {{-- <input type="text" class="form-control" placeholder="Jenis/Merk" name="jenis_merk"
                            id="inputJenisMerk{{ $k->id }}" value="{{ $k->jenis_merk }}"> --}}
                        <select class="form-select" name="merk" id="merk" required>
                            <option value="{{ $k->merk }}">{{ $k->merk }}</option>
                            @foreach ($merk as $m)
                                <option value="{{ $m->merk }}" {{ old('merk') == $m->merk ? 'selected' : '' }}>
                                    {{ $m->merk }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback" id="j{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputPIC" class="form-label">PIC</label>
                        <input type="text" class="form-control" placeholder="PIC" name="pic"
                            id="inputPIC{{ $k->id }}" value="{{ $k->pic }}">
                        <div class="invalid-feedback" id="k{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editPosisiKendaraan" class="form-label">Posisi
                            Kendaraan</label>
                        <input type="text" class="form-control" placeholder="Posisi Kendaraan"
                            name="posisi_kendaraan" id="inputPIC{{ $k->id }}"
                            value="{{ $k->posisi_kendaraan }}">
                        <div class="invalid-feedback" id="l{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="editTanggalPajak" class="form-label">Tanggal Pajak</label>
                            </div>
                            <div class="col">
                                <label for="editBulanPajak" class="form-label">Bulan Pajak</label>
                            </div>
                            <div class="col">
                                <label for="editTahunPajak" class="form-label">Tahun Pajak</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Tanggal Pajak"
                                    name="tanggal_pajak" id="inputTanggalPajak{{ $k->id }}"
                                    value="{{ $k->tanggal_pajak }}">
                                <div class="invalid-feedback" id="m{{ $k->id }}">
                                </div>
                            </div>
                            <div class="col">
                                {{-- <input type="text" class="form-control" placeholder="Bulan Pajak"
                                    name="bulan_pajak" id="inputBulanPajak{{ $k->id }}"
                                    value="{{ $k->bulan_pajak }}"> --}}
                                <select class="form-select" placeholder="Bulan Pajak" name="bulan_pajak"
                                    id="inputBulanPajak{{ $k->id }}">
                                    <option value="{{ $k->bulan_pajak }}" selected>{{ $k->bulan_pajak }}</option>
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
                                <div class="invalid-feedback" id="n{{ $k->id }}">
                                </div>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Tahun Pajak"
                                    name="tahun_pajak" id="inputTahunPajak{{ $k->id }}"
                                    value="{{ $k->tahun_pajak }}">
                                <div class="invalid-feedback" id="o{{ $k->id }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="editTanggalGantiPlat" class="form-label">Tanggal Ganti Plat</label>
                            </div>
                            <div class="col">
                                <label for="editBulanGantiPlat" class="form-label">Bulan Ganti Plat</label>
                            </div>
                            <div class="col">
                                <label for="editTahunGantiPlat" class="form-label">Tahun Ganti Plat</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Tgl Ganti Plat"
                                    name="tanggal_ganti_plat" id="inputTanggalGantiPlat{{ $k->id }}"
                                    value="{{ $k->tanggal_ganti_plat }}">
                                <div class="invalid-feedback" id="p{{ $k->id }}">
                                </div>
                            </div>
                            <div class="col">
                                {{-- <input type="text" class="form-control" placeholder="Bulan Ganti Plat"
                                    name="bulan_ganti_plat" id="inputBulanGantiPlat{{ $k->id }}"
                                    value="{{ $k->bulan_ganti_plat }}"> --}}
                                <select class="form-select" placeholder="Bulan Ganti Plat" name="bulan_ganti_plat"
                                    id="inputBulanGantiPlat{{ $k->id }}">
                                    <option value="{{ $k->bulan_ganti_plat }}" selected>{{ $k->bulan_ganti_plat }}
                                    </option>
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
                                <div class="invalid-feedback" id="q{{ $k->id }}">
                                </div>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Tahun Ganti Plat"
                                    name="tahun_ganti_plat" id="inputTahunGantiPlat{{ $k->id }}"
                                    value="{{ $k->tahun_ganti_plat }}">
                                <div class="invalid-feedback" id="r{{ $k->id }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editKeterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan"
                            id="inputKeterangan{{ $k->id }}" value="{{ $k->keterangan }}">
                        <div class="invalid-feedback" id="s{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="surat_penanggung_jawab" class="form-label">Surat Penanggung
                            Jawab</label>
                        <input type="hidden" name="oldSurat_penanggung_jawab" id="oldSurat_penanggung_jawab"
                            value="{{ $k->surat_penanggung_jawab }}">
                        <input type="file" class="form-control"
                            placeholder="Surat Penanggung
                        Jawab" name="surat_penanggung_jawab"
                            id="surat_penanggung_jawab{{ $k->id }}" value="{{ $k->surat_penanggung_jawab }}">
                        <div class="invalid-feedback" id="t{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_depan_baru" class="form-label">Gambar Depan</label>
                        <input type="hidden" name="oldGambar_depan" id="oldGambar_depan"
                            value="{{ $k->gambar_depan }}">
                        @if ($k->gambar_depan)
                            <img src="{{ asset('storage/' . $k->gambar_depan) }}"
                                class="img-preview11 img-fluid mb-3">
                        @else
                            <img class="img-preview11 img-fluid mb-3">
                        @endif
                        <input type="file" class="form-control" name="gambar_depan_baru"
                            id="gambar_depan_baru{{ $k->id }}" onchange="previewGambarDepanEdit()">
                        <div class="invalid-feedback" id="u{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_belakang_baru" class="form-label">Gambar Belakang</label>
                        <input type="hidden" name="oldGambar_belakang" id="oldGambar_belakang"
                            value="{{ $k->gambar_belakang }}">
                        @if ($k->gambar_belakang)
                            <img src="{{ asset('storage/' . $k->gambar_belakang) }}"
                                class="img-preview22 img-fluid mb-3">
                        @else
                            <img class="img-preview22 img-fluid mb-3">
                        @endif
                        <input type="file" class="form-control" name="gambar_belakang_baru"
                            id="gambar_belakang_baru{{ $k->id }}" onchange="previewGambarBelakangEdit()">
                        <div class="invalid-feedback" id="v{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_samping_kanan_baru" class="form-label">Gambar Samping Kanan</label>
                        <input type="hidden" name="oldGambar_samping_kanan" id="oldGambar_samping_kanan"
                            value="{{ $k->gambar_samping_kanan }}">
                        @if ($k->gambar_samping_kanan)
                            <img src="{{ asset('storage/' . $k->gambar_samping_kanan) }}"
                                class="img-preview33 img-fluid mb-3">
                        @else
                            <img class="img-preview33 img-fluid mb-3">
                        @endif
                        <input type="file" class="form-control" name="gambar_samping_kanan_baru"
                            id="gambar_samping_kanan_baru{{ $k->id }}"
                            onchange="previewGambarSampingKananEdit()">
                        <div class="invalid-feedback" id="w{{ $k->id }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_samping_kiri_baru" class="form-label">Gambar Samping Kiri</label>
                        <input type="hidden" name="oldGambar_samping_kiri" id="oldGambar_samping_kiri"
                            value="{{ $k->gambar_samping_kiri }}">
                        @if ($k->gambar_samping_kiri)
                            <img src="{{ asset('storage/' . $k->gambar_samping_kiri) }}"
                                class="img-preview44 img-fluid mb-3">
                        @else
                            <img class="img-preview44 img-fluid mb-3">
                        @endif
                        <input type="file" class="form-control" name="gambar_samping_kiri_baru"
                            id="gambar_samping_kiri_baru{{ $k->id }}"
                            onchange="previewGambarSampingKiriEdit()">
                        <div class="invalid-feedback" id="x{{ $k->id }}">
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
</div>
