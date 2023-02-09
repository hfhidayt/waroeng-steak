<div class="modal fade" id="edit{{ $bb->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Bahan Bakar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/bahanbakar/kendaraan/{{ $bb->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="bahan_bakar" class="form-label">Bahan Bakar</label>
                        <input type="text" class="form-control" placeholder="Bahan Bakar" name="bahan_bakar"
                            id="bahan_bakar{{ $bb->id }}" value="{{ $bb->bahan_bakar }}">
                        <div class="invalid-feedback" id="bb_e{{ $bb->id }}">
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
