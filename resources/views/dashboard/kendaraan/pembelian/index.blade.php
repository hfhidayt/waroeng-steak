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
                {{-- <a href="#create" class="btn btn-success" data-bs-toggle="modal">Pembelian Kendaraan</a> --}}
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal Perolehan</th>
                            <th scope="col">Total</th>
                            <th scope="col">DP</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($pembelian as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->tgl_perolehan }}</td>
                                <td>{{ $p->total }}</td>
                                <td>{{ $p->dp }}</td>
                                <td>
                                    <a href="#show{{ $p->id }}" class="btn btn-primary border-0" data-bs-toggle="modal">Lihat</a>
                                    @include('dashboard.kendaraan.pembelian.show')
                                    <a href="#edit{{ $p->id }}" class="btn btn-warning border-0" data-bs-toggle="modal">Edit</a>
                                    @include('dashboard.kendaraan.pembelian.edit')
                                    <a href="#delete{{ $p->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.kendaraan.pembelian.delete')
                                </td>
                            </tr>
                        @endforeach
                        {{-- @foreach ($users as $u)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $u->username }}</td>
                                <td>
                                    <a href="#show{{ $u->id }}" class="btn btn-primary border-0" data-bs-toggle="modal">Lihat</a>
                                    @include('dashboard.pembelian.show')
                                    <a href="#edit{{ $u->id }}" class="btn btn-warning border-0" data-bs-toggle="modal" onclick="saveId({{ $u->id }})">Edit</a>
                                    @include('dashboard.pembelian.edit')
                                    <a href="#delete{{ $u->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.pembelian.delete')
                                </td>
                            </tr>
                        @endforeach --}}
                </table>
            </div>
        </div>
    </div>
@endsection