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
                {{-- <a href="#create" class="btn btn-success" data-bs-toggle="modal">Pembelian Kendaraan</a> --}}
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">PIC</th>
                            <th scope="col">Atas Nama</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">Tanggal Jual</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($penjualans as $j)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $j->pic }}</td>
                                <td>{{ $j->atas_nama }}</td>
                                <td>{{ $j->harga_jual }}</td>
                                <td>{{ $j->tanggal_jual }}</td>
                                <td>
                                    <a href="#show{{ $j->id }}" class="btn btn-primary border-0"
                                        data-bs-toggle="modal">Lihat</a>
                                    @include('dashboard.kendaraan.penjualan.show')
                                    <a href="#edit{{ $j->id }}" class="btn btn-warning border-0"
                                        data-bs-toggle="modal">Edit</a>
                                    @include('dashboard.kendaraan.penjualan.edit')
                                    <a href="#delete{{ $j->id }}" class="btn btn-danger border-0"
                                        data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.kendaraan.penjualan.delete')
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
