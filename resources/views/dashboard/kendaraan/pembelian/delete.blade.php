<div class="modal fade" id="delete{{ $p->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Pembelian Kendaraan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/dashboard/pembelian/kendaraan/{{ $p->id }}" method="post">
                @csrf
                @method('delete')
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus pembelian ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mr-auto" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
