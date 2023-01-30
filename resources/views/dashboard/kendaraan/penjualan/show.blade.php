<div class="modal fade" id="show{{ $j->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Penjualan {{ $loop->iteration }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <label for="pic" style="text-align: right" class="col-4 col-form-label">PIC</label>
                    <input type="text" class="form-control" placeholder="-" name="pic"
                        value="{{ $j->pic }}" disabled>
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label for="atas_nama" style="text-align: right" class="col-4 col-form-label">Atas Nama</label>
                    <input type="text" class="form-control" placeholder="-" name="atas_nama"
                        value="{{ $j->atas_nama }}" disabled>
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label for="harga_jual" style="text-align: right" class="col-4 col-form-label">Harga Jual</label>
                    <input type="number" class="form-control" placeholder="-" name="harga_jual"
                        value="{{ $j->harga_jual }}" disabled>
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group">
                        <label for="tanggal_jual" style="text-align: right" class="col-4 col-form-label">Tanggal
                            Jual</label>
                        <input type="date" class="form-control" placeholder="-" name="tanggal_jual"
                            value="{{ $j->tanggal_jual }}" disabled>
                    </div>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
