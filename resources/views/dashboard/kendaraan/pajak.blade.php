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
                        <td id="bulanPajak"></td>
                        <td id="tahunPajak"></td>
                        <td id="bulanGantiPlat"></td>
                        <td id="tahunGantiPlat"></td>
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
                            <th scope="col" hidden>Bulan Pajak</th>
                            <th scope="col" hidden>Tahun Pajak</th>
                            <th scope="col">Pajak</th>
                            <th scope="col" hidden>Bulan Ganti Plat</th>
                            <th scope="col" hidden>Tahun Ganti Plat</th>
                            <th scope="col">Ganti Plat</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($kendaraan as $k)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $k->wilayah }}</td>
                                <td class="text-center">{{ $k->no_plat }}</td>
                                <td class="text-center">{{ $k->jenis_merk }}</td>
                                <td class="text-center" hidden>{{ $k->bulan_pajak }}</td>
                                <td class="text-center" hidden>{{ $k->tahun_pajak }}</td>
                                <td class="text-center">{{ $k->tanggal_pajak }} - {{ $k->bulan_pajak }} -
                                    {{ $k->tahun_pajak }}</td>
                                <td class="text-center" hidden>{{ $k->bulan_ganti_plat }}</td>
                                <td class="text-center" hidden>{{ $k->tahun_ganti_plat }}</td>
                                <td class="text-center">{{ $k->tanggal_ganti_plat }} - {{ $k->bulan_ganti_plat }} -
                                    {{ $k->tahun_ganti_plat }}
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
