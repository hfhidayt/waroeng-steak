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
                <a href="/dashboard/laporan/pajak/kendaraan" class="btn btn-warning">Print Laporan Pajak</a>
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
                            <th scope="col">Jenis Kendaraan</th>
                            <th scope="col">Plat</th>
                            <th scope="col">Merk</th>
                            <th scope="col">PIC</th>
                            <th scope="col">Bulan Pajak</th>
                            <th scope="col">Tahun Pajak</th>
                            <th scope="col">Pajak</th>
                            <th scope="col">Bulan Ganti Plat</th>
                            <th scope="col">Tahun Ganti Plat</th>
                            <th scope="col">Ganti Plat</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($kendaraan as $k)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $k->jenis_kendaraan }}</td>
                                <td class="text-center">{{ $k->no_plat }}</td>
                                <td class="text-center">{{ $k->jenis_merk }}</td>
                                <td class="text-center">{{ $k->pic }}</td>
                                <td class="text-center">{{ $k->bulan_pajak }}</td>
                                <td class="text-center">{{ $k->tahun_pajak }}</td>
                                <td class="text-center">{{ $k->tanggal_pajak }} {{ $k->bulan_pajak }} {{ $k->tahun_pajak }}</td>
                                <td class="text-center">{{ $k->bulan_ganti_plat }}</td>
                                <td class="text-center">{{ $k->tahun_ganti_plat }}</td>
                                <td class="text-center">{{ $k->tanggal_ganti_plat }} {{ $k->bulan_ganti_plat }} {{ $k->tahun_ganti_plat }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            var table = $('#table_id').DataTable({
                columnDefs: [{
                    targets: '_all',
                    className: 'dt-head-center'
                },
                {
                    target: 5,
                    visible: false
                },
                {
                    target: 6,
                    visible: false
                },
                {
                    target: 8,
                    visible: false
                },
                {
                    target: 9,
                    visible: false
                }
            ],

                initComplete: function() {
                    this.api()
                        // filter no_plat pajak.blade
                        .columns(2)
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select class="form-select platP"><option value="">-- Nomor Polisi --</option></select>'
                                )
                                .appendTo($('#platP'))
                                .on('change', function() {
                                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                    column.search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                                });
                            column
                                .data()
                                .unique()
                                .sort()
                                .each(function(d, j) {
                                    select.append('<option value="' + d + '">' + d +
                                        '</option>');
                                });
                        })
                        // filter bulan_pajak pajak.blade
                        .columns(5)
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select class="form-select"><option value="">-- Bulan Pajak --</option></select>'
                                )
                                .appendTo($('#bulanPajak'))
                                .on('change', function() {
                                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                    column.search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                                });
                            column
                                .data()
                                .unique()
                                .sort()
                            select.append('<option value="Januari">Januari</option>')
                            select.append('<option value="Februari">Februari</option>')
                            select.append('<option value="Maret">Maret</option>')
                            select.append('<option value="April">April</option>')
                            select.append('<option value="Mei">Mei</option>')
                            select.append('<option value="Juni">Juni</option>')
                            select.append('<option value="Juli">Juli</option>')
                            select.append('<option value="Agustus">Agustus</option>')
                            select.append('<option value="September">September</option>')
                            select.append('<option value="Oktober">Oktober</option>')
                            select.append('<option value="November">November</option>')
                            select.append('<option value="Desember">Desember</option>')
                        })
                        // filter tahun_pajak pajak.blade
                        .columns(6)
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select class="form-select"><option value="">-- Tahun Pajak --</option></select>'
                                )
                                .appendTo($('#tahunPajak'))
                                .on('change', function() {
                                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                    column.search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                                });
                            column
                                .data()
                                .unique()
                                .sort()
                                .each(function(d, j) {
                                    select.append('<option value="' + d + '">' + d +
                                        '</option>');
                                });
                        })
                        // filter bulan_ganti_plat pajak.blade
                        .columns(8)
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select class="form-select"><option value="">-- Bulan Ganti Plat --</option></select>'
                                )
                                .appendTo($('#bulanGantiPlat'))
                                .on('change', function() {
                                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                    column.search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                                });
                            column
                                .data()
                                .unique()
                                .sort()
                            select.append('<option value="Januari">Januari</option>')
                            select.append('<option value="Februari">Februari</option>')
                            select.append('<option value="Maret">Maret</option>')
                            select.append('<option value="April">April</option>')
                            select.append('<option value="Mei">Mei</option>')
                            select.append('<option value="Juni">Juni</option>')
                            select.append('<option value="Juli">Juli</option>')
                            select.append('<option value="Agustus">Agustus</option>')
                            select.append('<option value="September">September</option>')
                            select.append('<option value="Oktober">Oktober</option>')
                            select.append('<option value="November">November</option>')
                            select.append('<option value="Desember">Desember</option>')
                        })
                        // filter tahun_ganti_plat pajak.blade
                        .columns(9)
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select class="form-select"><option value="">-- Tahun Ganti Plat --</option></select>'
                                )
                                .appendTo($('#tahunGantiPlat'))
                                .on('change', function() {
                                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                    column.search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                                });
                            column
                                .data()
                                .unique()
                                .sort()
                                .each(function(d, j) {
                                    select.append('<option value="' + d + '">' + d +
                                        '</option>');
                                });
                        })
                },
            });
        });
    </script>
@endpush
