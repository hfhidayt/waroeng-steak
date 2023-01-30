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
                <a href="#create" class="btn btn-success" data-bs-toggle="modal">Pembelian Kendaraan</a>
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
                        <tr>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
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