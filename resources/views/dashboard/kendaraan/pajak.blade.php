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
            </div>
        </div>
        <div class="div row">
            <div class="col mx-4">
                <table>
                    <tr>
                        <td id="platP"></td>
                    </tr>
                </table>
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
                            <th scope="col">Jenis/Merk</th>
                            <th scope="col">Pajak</th>
                            <th scope="col">Ganti Plat</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($kendaraan as $k)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->wilayah }}</td>
                                <td>{{ $k->no_plat }}</td>
                                <td>{{ $k->jenis_merk }}</td>
                                <td>{{ $k->pajak }}</td>
                                <td>{{ $k->ganti_plat }}</td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
