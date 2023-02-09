<div class="modal fade" id="createBB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Bahan Bakar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/dashboard/bahanbakar/kendaraan" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Bahan Bakar" name="bahan_bakar"
                            id="bahan_bakar">
                        <div class="invalid-feedback" id="bb_e">
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
