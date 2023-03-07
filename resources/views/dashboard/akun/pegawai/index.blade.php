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
                <a href="/dashboard/akun" class="btn btn-primary">Kembali</a>
                <a href="#create" class="btn btn-success" data-bs-toggle="modal">Tambah Pegawai Baru</a>
                @include('dashboard.akun.pegawai.create')
                <a href="/dashboard/jabatan/pegawai" class="btn btn-success">Jabatan Pegawai</a>
                <div class="h1">
                    {{ session('edit') }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($pegawai as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->nip }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->jabatan->nama_jabatan }}</td>
                                <td>
                                    <a href="#show{{ $p->id }}" class="btn btn-primary border-0" data-bs-toggle="modal">Lihat</a>
                                    @include('dashboard.akun.pegawai.show')
                                    <a href="#edit{{ $p->id }}" class="btn btn-warning border-0" data-bs-toggle="modal">Edit</a>
                                    @include('dashboard.akun.pegawai.edit')
                                    <a href="#delete{{ $p->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.akun.pegawai.delete')
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
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
        @if (session()->has('edit'))
            $(document).ready(function() {
                $('#edit{{ session('edit') }}').modal('show');
            });

            const n = document.getElementById('nama{{ session('edit') }}');
            const ne = document.getElementById('nama_e{{ session('edit') }}');
            @error('nama')
                n.classList.add('is-invalid');
                ne.append('@error('nama') {{ $message }} @enderror');
            @enderror

            const jp = document.getElementById('jabatan_pegawai_id{{ session('edit') }}');
            const jpe = document.getElementById('jabatan_pegawai_e{{ session('edit') }}');
            @error('jabatan_pegawai_id')
                jp.classList.add('is-invalid');
                jpe.append('@error('jabatan_pegawai_id') {{ $message }} @enderror');
            @enderror

            @php
                Illuminate\Support\Facades\Session::forget('edit');
            @endphp
        @elseif (session()->has('create'))
            $(document).ready(function() {
                $('#create').modal('show');
            });

            const n = document.getElementById('nama');
            const ne = document.getElementById('nama_e');
            @error('nama')
                n.classList.add('is-invalid');
                ne.append('@error('nama') {{ $message }} @enderror');
            @enderror
            n.setAttribute('value', "{{ old('nama') }}");

            const jp = document.getElementById('jabatan_pegawai_id');
            const jpe = document.getElementById('jabatan_pegawai_e');
            @error('jabatan_pegawai_id')
                jp.classList.add('is-invalid');
                jpe.append('@error('jabatan_pegawai_id') {{ $message }} @enderror');
            @enderror
            // jp.setAttribute('value', "{{ old('jabatan_pegawai') }}");

            @php
                Illuminate\Support\Facades\Session::forget('create');
            @endphp
        @endif
    </script>
@endpush
