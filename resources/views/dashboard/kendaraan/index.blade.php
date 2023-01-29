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
                <a href="#create" class="btn btn-success" data-bs-toggle="modal">Tambah Baru</a>
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Wilayah</th>
                            <th scope="col">Plat</th>
                            <th scope="col">Atas Nama</th>
                            <th scope="col">Jenis/Merk</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>a</td>
                            <td>b</td>
                            <td>c</td>
                            <td>d</td>
                            <td>e</td>
                            <td>
                                <a href="#show" class="btn btn-primary border-0" data-bs-toggle="modal">Lihat</a>
                                <a href="#edit" class="btn btn-warning border-0" data-bs-toggle="modal">Edit</a>
                                <a href="#delete" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
@endsection