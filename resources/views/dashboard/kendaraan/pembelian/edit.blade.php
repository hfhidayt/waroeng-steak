<div class="modal fade" id="edit{{ $p->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Pembelian {{ $loop->iteration }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/pembelian/kendaraan/{{ $p->id }}" method="post">
                @csrf
                @method('put')
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="PIC" name="pic" value="{{ $p->pic }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Kota" name="kota" value="{{ $p->kota }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text">Tanggal Perolehan</span>
                            <input type="date" class="form-control" placeholder="Tanggal Perolehan" name="tgl_perolehan" value="{{ $p->tgl_perolehan }}">
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" value="{{ $p->jumlah }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Satuan" name="satuan" value="{{ $p->satuan }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Harga" name="harga" value="{{ $p->harga }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Total" name="total" value="{{ $p->total }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="DP" name="dp" value="{{ $p->dp }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text">Tanggal DP</span>
                            <input type="date" class="form-control" placeholder="Tanggal DP" name="tgl_dp" value="{{ $p->tgl_dp }}">
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Angsuran" name="angsuran" value="{{ $p->angsuran }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Jumlah Angsuran" name="jml_angsuran" value="{{ $p->jml_angsuran }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text">Mulai Angsuran</span>
                            <input type="date" class="form-control" placeholder="Mulai Angsuran" name="mulai_angsuran" value="{{ $p->mulai_angsuran }}">
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text">Selesai Angsuran</span>
                            <input type="date" class="form-control" placeholder="Selesai Angsuran" name="selesai_angsuran" value="{{ $p->selesai_angsuran }}">
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Rekening" name="rekening" value="{{ $p->rekening }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
        </div>
    </div>
</div>