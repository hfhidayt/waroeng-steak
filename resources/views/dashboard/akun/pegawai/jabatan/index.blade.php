@extends('layouts.main')
@section('wrapper')
    @include('partials.navbar')
    @include('partials.sidebar')
    <div class="content-wrapper">
        <div class="row">
            <div class="col mx-4 my-4">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <a href="/dashboard/pegawai" class="btn btn-primary">Kembali</a>
                <a href="#create" class="btn btn-success" data-bs-toggle="modal">Jabatan Pegawai</a>
                @include('dashboard.akun.pegawai.jabatan.create')
                <h1>
                    {{ session('create') }}
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Jabatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($jabatan as $j)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $j->nama_jabatan }}</td>
                                <td>
                                    <a href="#edit{{ $j->id }}" class="btn btn-warning border-0" data-bs-toggle="modal">Edit</a>
                                    @include('dashboard.akun.pegawai.jabatan.edit')
                                    <a href="#delete{{ $j->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.akun.pegawai.jabatan.delete')
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
        @if(session()->has('edit'))
            $( document ).ready(function() {
                $('#edit{{ session("edit") }}').modal('show');
            });

            const nj = document.getElementById('nama_jabatan{{ session("edit") }}');
            const nje = document.getElementById('nama_jabatan_e{{ session("edit") }}');
            @error('nama_jabatan')
                nj.classList.add('is-invalid');
                nje.append('@error("nama_jabatan") {{ $message }} @enderror');
            @enderror

            @php
                Illuminate\Support\Facades\Session::forget('edit')
            @endphp
        @elseif(session()->has('create'))
            $( document ).ready(function() {
                $('#create').modal('show');
            });

            const nj = document.getElementById('nama_jabatan');
            const nje = document.getElementById('nama_jabatan_e');
            @error('nama_jabatan')
                nj.classList.add('is-invalid');
                nje.append('@error("nama_jabatan") {{ $message }} @enderror');
            @enderror
            nj.setAttribute('value', "{{ old('nama_jabatan') }}");

            @php
                Illuminate\Support\Facades\Session::forget('create')
            @endphp
        @endif
    </script>
@endpush