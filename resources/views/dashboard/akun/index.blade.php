@extends('layouts.main')
@section('wrapper')
    @include('partials.navbar')
    @include('partials.sidebar')
    <div class="content-wrapper">
        <div class="row">
            <div class="col mx-4 my-4">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <a href="#create" class="btn btn-success" data-bs-toggle="modal">Tambah Akun Baru</a>
                <a href="/dashboard/pegawai" class="btn btn-success">Daftar Pegawai</a>
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($users as $u)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $u->username }}</td>
                                <td>
                                    <a href="#show{{ $u->id }}" class="btn btn-primary border-0" data-bs-toggle="modal">Lihat</a>
                                    @include('dashboard.akun.show')
                                    <a href="#edit{{ $u->id }}" class="btn btn-warning border-0" data-bs-toggle="modal" onclick="saveId({{ $u->id }})">Edit</a>
                                    @include('dashboard.akun.edit')
                                    <a href="#delete{{ $u->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.akun.delete')
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
        @include('dashboard.akun.create')
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            var table = $('#table_id').DataTable({
                ordering: false,
                columnDefs: [{
                    targets: '_all',
                    className: 'dt-head-center'
                }]
            });
        });
        @if (session()->has('editId'))
            $(document).ready(function() {
                $('#edit{{ session('editId') }}').modal('show');
            });
            @error('username')
                const cE = document.getElementById('u{{ session('editId') }}');
                cE.classList.add('is-invalid');
            @enderror
            @error('password')
                const dE = document.getElementById('p{{ session('editId') }}');
                dE.classList.add('is-invalid');
            @enderror
            const a = document.getElementById('a{{ session('editId') }}');
            a.append('@error('username') {{ $message }} @enderror');
            const b = document.getElementById('b{{ session('editId') }}');
            b.append('@error('password') {{ $message }} @enderror');
            @php
                Illuminate\Support\Facades\Session::forget('editId');
            @endphp
        @elseif (session()->has('create'))
            $(document).ready(function() {
                $('#create').modal('show');
            });
            @error('username')
                const c = document.getElementById('u');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('username') }}");
            @enderror
            @error('password')
                const d = document.getElementById('p');
                d.classList.add('is-invalid');
            @enderror
            const a = document.getElementById('a');
            a.append('@error('username') {{ $message }} @enderror');
            const b = document.getElementById('b');
            b.append('@error('password') {{ $message }} @enderror');
            @php
                Illuminate\Support\Facades\Session::forget('create');
            @endphp
        @endif
    </script>
@endpush
