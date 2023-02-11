<div class="modal fade" id="show{{ $p->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pegawai Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="NIP" name="nip" id="nip" value="{{ $p->nip }}" disabled>
                    <div class="invalid-feedback" id="nip_e">
                    </div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama" value="{{ $p->nama }}" disabled>
                    <div class="invalid-feedback" id="nama_e">
                    </div>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="jabatan_pegawai_id" id="jabatan_pegawai_id" disabled>
                        <option value="">Jabatan Pegawai</option>
                        @foreach ($jabatan_pegawai as $jp)
                            <option value="{{ $jp->id }}" {{ $p->jabatan_pegawai_id === $jp->id ? 'selected' : '' }}>{{ $jp->nama_jabatan }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback" id="jabatan_pegawai_e">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Buat</button>
            </div>
        </div>
    </div>
</div>