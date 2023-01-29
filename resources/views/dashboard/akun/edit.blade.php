<div class="modal fade" id="edit{{ $u->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Akun {{ $u->username }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/dashboard/akun/{{ $u->id }}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username" id="u{{ $u->id }}" value="{{ $u->username }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback" id="a{{ $u->id }}">
                        </div>
                        {{-- @error('username')
                        @enderror --}}
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Password" name="password" id="p{{ $u->id }}" value="{{ $u->password }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback" id="b{{ $u->id }}">
                        </div>
                        {{-- @error('password')
                        @enderror --}}
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