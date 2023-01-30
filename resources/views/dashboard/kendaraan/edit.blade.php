<div class="modal fade" id="edit{{ $k->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Kendaraan {{ $k->no_plat }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/kendaraan/{{ $k->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="input-group mb-3">
                        <label for="showWilayah" style="text-align: right" class="col-4 col-form-label">Wilayah</label>
                        <input type="text" class="form-control" placeholder="Wilayah" name="wilayah"
                            id="aa{{ $k->id }}" value="{{ $k->wilayah }}">
                        <div class="invalid-feedback" id="a{{ $k->id }}">
                        </div>
                        {{-- @error('wilayah')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showNomorPlat" style="text-align: right" class="col-4 col-form-label">Nomor
                            Plat</label>
                        <input type="text" class="form-control" placeholder="Nomor Plat" name="no_plat"
                            id="bb{{ $k->id }}" value="{{ $k->no_plat }}">
                        <div class="invalid-feedback" id="b{{ $k->id }}">
                        </div>
                        {{-- @error('no_plat')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showJenisKendaraan" style="text-align: right" class="col-4 col-form-label">Jenis
                            Kendaraan</label>
                        <input type="text" class="form-control" placeholder="Jenis Kendaraan" name="jenis_kendaraan"
                            id="cc{{ $k->id }}" value="{{ $k->jenis_kendaraan }}">
                        <div class="invalid-feedback" id="c{{ $k->id }}">
                        </div>
                        {{-- @error('jenis_kendaraan')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showNomorRangka" style="text-align: right" class="col-4 col-form-label">Nomor
                            Rangka</label>
                        <input type="text" class="form-control" placeholder="Nomor Rangka" name="no_rangka"
                            id="dd{{ $k->id }}" value="{{ $k->no_rangka }}">
                        <div class="invalid-feedback" id="d{{ $k->id }}">
                        </div>
                        {{-- @error('no_rangka')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showNomorMesin" style="text-align: right" class="col-4 col-form-label">Nomor
                            Mesin</label>
                        <input type="text" class="form-control" placeholder="Nomor Mesin" name="no_mesin"
                            id="ee{{ $k->id }}" value="{{ $k->no_mesin }}">
                        <div class="invalid-feedback" id="e{{ $k->id }}">
                        </div>
                        {{-- @error('no_mesin')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showNomorBPKB" style="text-align: right" class="col-4 col-form-label">Nomor
                            BPKB</label>
                        <input type="text" class="form-control" placeholder="Nomor BPKB" name="no_bpkb"
                            id="ff{{ $k->id }}" value="{{ $k->no_bpkb }}">
                        <div class="invalid-feedback" id="f{{ $k->id }}">
                        </div>
                        {{-- @error('no_bpkb')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showAtasNama" style="text-align: right" class="col-4 col-form-label">Atas
                            Nama</label>
                        <input type="text" class="form-control" placeholder="Atas Nama" name="atas_nama"
                            id="gg{{ $k->id }}" value="{{ $k->atas_nama }}">
                        <div class="invalid-feedback" id="g{{ $k->id }}">
                        </div>
                        {{-- @error('atas_nama')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showTahun" style="text-align: right" class="col-4 col-form-label">Tahun</label>
                        <input type="text" class="form-control" placeholder="Tahun" name="tahun"
                            id="hh{{ $k->id }}" value="{{ $k->tahun }}">
                        <div class="invalid-feedback" id="h{{ $k->id }}">
                        </div>
                        {{-- @error('tahun')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showWarna" style="text-align: right" class="col-4 col-form-label">Warna</label>
                        <input type="text" class="form-control" placeholder="Warna" name="warna"
                            id="ii{{ $k->id }}" value="{{ $k->warna }}">
                        <div class="invalid-feedback" id="i{{ $k->id }}">
                        </div>
                        {{-- @error('warna')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showJenisMerk" style="text-align: right"
                            class="col-4 col-form-label">Jenis/Merk</label>
                        <input type="text" class="form-control" placeholder="Jenis/Merk" name="jenis_merk"
                            id="jj{{ $k->id }}" value="{{ $k->jenis_merk }}">
                        <div class="invalid-feedback" id="j{{ $k->id }}">
                        </div>
                        {{-- @error('jenis_merk')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showPosisiKendaraan" style="text-align: right"
                            class="col-4 col-form-label">Posisi Kendaraan</label>
                        <input type="text" class="form-control" placeholder="Posisi Kendaraan"
                            name="posisi_kendaraan" id="kk{{ $k->id }}" value="{{ $k->posisi_kendaraan }}">
                        <div class="invalid-feedback" id="k{{ $k->id }}">
                        </div>
                        {{-- @error('posisi_kendaraan')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showPajak" style="text-align: right" class="col-4 col-form-label">Pajak</label>
                        <input type="date" class="form-control" placeholder="Pajak" name="pajak"
                            id="ll{{ $k->id }}" value="{{ $k->pajak }}">
                        <div class="invalid-feedback" id="l{{ $k->id }}">
                        </div>
                        {{-- @error('pajak')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showGantiPlat" style="text-align: right" class="col-4 col-form-label">Ganti
                            Plat</label>
                        <input type="date" class="form-control" placeholder="Ganti Plat" name="ganti_plat"
                            id="mm{{ $k->id }}" value="{{ $k->ganti_plat }}">
                        <div class="invalid-feedback" id="m{{ $k->id }}">
                        </div>
                        {{-- @error('ganti_plat')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <label for="showKeterangan" style="text-align: right"
                            class="col-4 col-form-label">Keterangan</label>
                        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan"
                            id="nn{{ $k->id }}" value="{{ $k->keterangan }}">
                        <div class="invalid-feedback" id="n{{ $k->id }}">
                        </div>
                        {{-- @error('keterangan')
                        @enderror --}}
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
