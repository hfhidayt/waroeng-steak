<div class="modal fade" id="createP" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pembelian Kendaraan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/pembelian/kendaraan" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="PIC" name="pic">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Kota" name="kota">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text">Tanggal Perolehan</span>
                            <input type="date" class="form-control" placeholder="Tanggal Perolehan"
                                name="tgl_perolehan">
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Jumlah" name="jumlah">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Satuan" name="satuan">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Harga" name="harga">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Total" name="total">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="DP" name="dp">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text">Tanggal DP</span>
                            <input type="date" class="form-control" placeholder="Tanggal DP" name="tgl_dp">
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Angsuran" name="angsuran">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Jumlah Angsuran" name="jml_angsuran">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text">Mulai Angsuran</span>
                            <input type="date" class="form-control" placeholder="Mulai Angsuran"
                                name="mulai_angsuran">
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text">Selesai Angsuran</span>
                            <input type="date" class="form-control" placeholder="Selesai Angsuran"
                                name="selesai_angsuran">
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Rekening" name="rekening">
                        <div class="invalid-feedback">
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
