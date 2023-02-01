<div class="modal fade" id="edit{{ $jps->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Perawatan Kendaraan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/jenis/perawatan/kendaraan/{{ $jps->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="jenis_perawatan" class="form-label">Jenis Perawatan</label>
                        <input type="text" class="form-control" placeholder="Jenis Perawatan" name="jenis_perawatan" id="jenis_perawatan{{ $jps->id }}" value="{{ $jps->jenis_perawatan }}">
                        <div class="invalid-feedback" id="jps_e{{ $jps->id }}">
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