<div class="modal fade" id="show{{ $jps->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Jenis Perawatan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Jenis Perawatan" name="jenis_perawatan" id="jenis_perawatan" value="{{ $jps->jenis_perawatan }}" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>