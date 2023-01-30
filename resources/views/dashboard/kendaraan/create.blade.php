<div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kendaraan Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/kendaraan" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Wilayah" name="wilayah" id="aa">
                        <div class="invalid-feedback" id="a">
                        </div>
                        {{-- @error('wilayah')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nomor Plat" name="no_plat"
                            id="bb">
                        <div class="invalid-feedback" id="b">
                        </div>
                        {{-- @error('no_plat')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Jenis Kendaraan" name="jenis_kendaraan"
                            id="cc">
                        <div class="invalid-feedback" id="c">
                        </div>
                        {{-- @error('jenis_kendaraan')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nomor Rangka" name="no_rangka"
                            id="dd">
                        <div class="invalid-feedback" id="d">
                        </div>
                        {{-- @error('no_rangka')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nomor Mesin" name="no_mesin"
                            id="ee">
                        <div class="invalid-feedback" id="e">
                        </div>
                        {{-- @error('no_mesin')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nomor BPKB" name="no_bpkb"
                            id="ff">
                        <div class="invalid-feedback" id="f">
                        </div>
                        {{-- @error('no_bpkb')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Atas Nama" name="atas_nama"
                            id="gg">
                        <div class="invalid-feedback" id="g">
                        </div>
                        {{-- @error('atas_nama')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Tahun" name="tahun" id="hh">
                        <div class="invalid-feedback" id="h">
                        </div>
                        {{-- @error('tahun')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Warna" name="warna" id="ii">
                        <div class="invalid-feedback" id="i">
                        </div>
                        {{-- @error('warna')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Jenis/Merk" name="jenis_merk"
                            id="jj">
                        <div class="invalid-feedback" id="j">
                        </div>
                        {{-- @error('jenis_merk')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Posisi Kendaraan"
                            name="posisi_kendaraan" id="kk">
                        <div class="invalid-feedback" id="k">
                        </div>
                        {{-- @error('posisi_kendaraan')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" placeholder="Pajak" name="pajak"
                            id="ll">
                        <div class="invalid-feedback" id="l">
                        </div>
                        {{-- @error('pajak')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" placeholder="Ganti Plat" name="ganti_plat"
                            id="mm">
                        <div class="invalid-feedback" id="m">
                        </div>
                        {{-- @error('ganti_plat')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan"
                            id="nn">
                        <div class="invalid-feedback" id="n">
                        </div>
                        {{-- @error('keterangan')
                        @enderror --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
