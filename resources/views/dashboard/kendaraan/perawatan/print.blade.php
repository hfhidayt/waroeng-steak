@extends('layouts.main')
@section('wrapper')
    <style>
        @page {
            /* size: 29.7cm 21cm; */
            /* size: landscape; */
            size: auto;
            /* margin: 10mm 10mm 10mm 10mm; */

        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col my-3">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="platP">Nomor Polisi</label>
                    <span id="pP"></span>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="bulanP">Bulan</label>
                    <span id="bP"></span>
                    <label class="input-group-text ml-3" for="tahunP">Tahun</label>
                    <span id="tP"></span>
                </div>
                <div class="input-group">
                    <label class="input-group-text" for="jpP">Jenis Perawatan</label>
                    <span id="jpP"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <a href="/dashboard/perawatan/kendaraan" type="button" class="btn btn-primary">Kembali</a>
                <button type="button" class="btn btn-success" onclick="print()">Print</button>
            </div>
        </div>
        <div class="print">
            <div class="row justify-content-center text-center">
                <div class="col mt-5">
                    <h3 class="headerPrint">LAPORAN BIAYA PERAWATAN KENDARAAN</h3>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col">
                    <h3 class="headerPrint">PT WAROENG STEAK INDONESIA</h3>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col mb-3" id="jpnpbt">
                    <h3 class="headerPrint"><span id="jpPH"></span> <span id="npPH"></span> <span
                            id="bPH"></span> <span id="tPH"></span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table-sm table-bordered" id="table_print">
                        <thead class="dt-head-center">
                            <tr>
                                <th>No</th>
                                <th>Nomor Plat</th>
                                <th>Tanggal</th>
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Jenis Perawatan</th>
                                <th>Barang/Jasa</th>
                                <th>Volume</th>
                                <th>Satuan</th>
                                <th>Tempat Perawatan</th>
                                <th>Kilometer</th>
                                <th>Harga Satuan</th>
                                <th>Total Biaya</th>
                                <th>TotalBiaya</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perawatan as $ps)
                                <tr id="row-{{ $ps->id }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ps->kendaraan->no_plat }}</td>
                                    <td>{{ $ps->tanggal }} {{ $ps->bulan }} {{ $ps->tahun }}</td>
                                    <td>{{ $ps->bulan }}</td>
                                    <td>{{ $ps->tahun }}</td>
                                    <td>{{ $ps->jenis_perawatan }}</td>
                                    <td>{{ $ps->barang_jasa }}</td>
                                    <td>{{ $ps->volume }}</td>
                                    <td>{{ $ps->satuan }}</td>
                                    <td>{{ $ps->tempat_perawatan }}</td>
                                    <td>{{ $ps->kilometer }}</td>
                                    <td>Rp{{ number_format($ps->harga_satuan, 0, ',', '.') }}</td>
                                    <td>Rp{{ number_format($ps->total_biaya, 0, ',', '.') }}</td>
                                    <td class="total_biaya">{{ $ps->total_biaya }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tr>
                            <td colspan="10" class="text-right"><strong>Total</strong></td>
                            <td class="sum" id="sum"></td>
                        </tr>
                        <tfoot style="display: none;"></tfoot>
                        {{-- <tfoot> --}}
                    </table>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    Yogyakarta,
                </div>
            </div>
            <div class="row mb-5">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    Staff Keuangan
                </div>
            </div>
            <div class="row pt-4">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    FEBTRI YANNA RAMADANI
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    ID : 0821/4514
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        function print() {
            $('.print').printThis();
        }
        // import {
        //     jsPDF
        // } from "jspdf";
        // const doc = new jsPDF('landscape');
        // doc.text("Hello world!", 10, 10);
        // doc.save("a4.pdf");

        var table = $('#table_print').DataTable({
            paging: false,
            bInfo: false,
            "sDom": "rtip",
            ordering: false,
            columnDefs: [{
                    targets: '_all',
                    className: 'dt-head-center'
                },
                {
                    target: 3,
                    visible: false
                },
                {
                    target: 4,
                    visible: false
                },
                {
                    target: 13,
                    visible: false
                }
            ],
            initComplete: function() {
                this.api().columns(1).every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select pP" id="platP"><option value="">No Plat</option></select>'
                            )
                            .appendTo($('#pP'))
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();

                                var tots = document.getElementById('sum');
                                sum = table.column(13, {
                                    search: 'applied'
                                }).data().sum();
                                sumP = new Intl.NumberFormat('de-DE').format(sum)
                                tots.innerHTML = 'Rp' + sumP;

                                var npPH = document.getElementById('npPH');
                                console.log(val);
                                npPH.innerHTML = val;
                            });
                        column
                            .data().unique().sort().each(function(d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                            });
                    })
                    .columns(3).every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select bP" id="bulanP"><option value="">Bulan</option></select>'
                            )
                            .appendTo($('#bP'))
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();

                                var tots = document.getElementById('sum');
                                sum = table.column(13, {
                                    search: 'applied'
                                }).data().sum();
                                sumP = new Intl.NumberFormat('de-DE').format(sum)
                                tots.innerHTML = 'Rp' + sumP;

                                var bPH = document.getElementById('bPH');
                                bPH.innerHTML = val;
                            });
                        column
                            .data().unique().sort()
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
                    .columns(4).every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select tP" id="tahunP"><option value="">Tahun</option></select>'
                            )
                            .appendTo($('#tP'))
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();

                                var tots = document.getElementById('sum');
                                sum = table.column(13, {
                                    search: 'applied'
                                }).data().sum();
                                sumP = new Intl.NumberFormat('de-DE').format(sum)
                                tots.innerHTML = 'Rp' + sumP;

                                var tPH = document.getElementById('tPH');
                                tPH.innerHTML = val;
                            });
                        column
                            .data().unique().sort().each(function(d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                            });
                    })
                    .columns(5).every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select jpP" id="jpP"><option value="">Jenis Perawatan</option></select>'
                            )
                            .appendTo($('#jpP'))
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();

                                var tots = document.getElementById('sum');
                                sum = table.column(13, {
                                    search: 'applied'
                                }).data().sum();
                                sumP = new Intl.NumberFormat('de-DE').format(sum)
                                tots.innerHTML = 'Rp' + sumP;

                                var jpPH = document.getElementById('jpPH');
                                jpPH.innerHTML = val;
                            });
                        column
                            .data().unique().sort().each(function(d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                            });
                    })
            }
        });

        var tots = document.getElementById('sum');
        sum = table.column(13, {
            search: 'applied'
        }).data().sum();
        sumP = new Intl.NumberFormat('de-DE').format(sum)
        tots.innerHTML = 'Rp' + sumP;

        $('.pP').select2({
            theme: 'bootstrap-5',
        });
    </script>
@endpush
