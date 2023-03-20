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
            <div class="col my-3" id="filters">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="platP">Nomor Polisi</label>
                    <span id="pP"></span>
                </div>
                {{-- <div class="input-group mb-3">
                    <label class="input-group-text" for="bulanP">Bulan Pajak</label>
                    <span id="bPajak"></span>
                    <label class="input-group-text ml-3" for="tahunP">Tahun Pajak</label>
                    <span id="tPajak"></span>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="bulanP">Bulan Ganti Plat</label>
                    <span id="bGPajak"></span>
                    <label class="input-group-text ml-3" for="tahunP">Tahun Ganti Plat</label>
                    <span id="tGPajak"></span>
                </div> --}}
                <div class="input-group mb-3">
                    <label class="input-group-text" for="bulanP">Bulan</label>
                    <span id="bP"></span>
                    <label class="input-group-text ml-3" for="tahunP">Tahun</label>
                    <span id="tP"></span>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="jpP">Jenis Pajak</label>
                    <span id="jpP"></span>
                </div>
                <div class="input-group mb-3" style="width: fit-content">
                    <label class="input-group-text" for="pegawai">Pegawai</label>
                    <select class="form-select" name="pegawai" id="pegawai">
                        <option value="">Pegawai</option>
                        @foreach ($pegawai as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <a href="/dashboard/pajak/kendaraan" type="button" class="btn btn-primary">Kembali</a>
                <button type="button" class="btn btn-success" onclick="print()">Print</button>
                <button type="reset" class="btn btn-success" id="reset">Reset</button>
            </div>
        </div>
        <div class="print">
            <div class="row justify-content-center text-center">
                <div class="col mt-5">
                    <h3 class="headerPrint">LAPORAN PAJAK KENDARAAN</h3>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col">
                    <h3 class="headerPrint">PT WAROENG STEAK INDONESIA</h3>
                </div>
            </div>
            {{-- <div class="row justify-content-center text-center">
                <div class="col mb-3" id="jpnpbt">
                    <h3 class="headerPrint"><span id="jpPH">............</span> <span id="npPH">............</span> <span id="bPH">............</span> <span id="tPH">............</span></h3>
                </div>
            </div> --}}
            <div class="row">
                <div class="col">
                    <table class="table-sm table-bordered" id="table_print" width="100%">
                        <thead class="dt-head-center">
                            <tr>
                                <th>No</th>
                                <th>Jenis Kendaraan</th>
                                <th>Nomor Plat</th>
                                <th>Merk</th>
                                <th>PIC</th>
                                <th hidden>Bulan Pajak</th>
                                <th hidden>Tahun Pajak</th>
                                <th hidden>Jenis Perawatan</th>
                                {{-- <th class="tnw">Pajak <span id="jpPH"></span></th> --}}
                                <th>Pajak</th>
                                <th>Total Biaya</th>
                                <th hidden>TotalBiaya</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perawatan as $ps)
                                <tr id="row-{{ $ps->id }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ps->kendaraan->jenis_kendaraan }}</td>
                                    <td>{{ $ps->kendaraan->no_plat }}</td>
                                    <td>{{ $ps->kendaraan->jenis_merk }}</td>
                                    <td>{{ $ps->kendaraan->pic }}</td>
                                    <td hidden>{{ $ps->bulan }}</td>
                                    <td hidden>{{ $ps->tahun }}</td>
                                    <td hidden>{{ $ps->jenis_perawatan }}</td>
                                    <td>{{ $ps->tanggal }} {{ $ps->bulan }} {{ $ps->tahun }}</td>
                                    {{-- <td>Rp{{ number_format($ps->harga_satuan, 0, ',', '.') }}</td> --}}
                                    <td>Rp{{ number_format($ps->total_biaya, 0, ',', '.') }}</td>
                                    <td class="total_biaya" hidden>{{ $ps->total_biaya }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tr>
                            <td colspan="6" class="text-right"><strong>Total</strong></td>
                            <td class="sum" id="sum"></td>
                        </tr>
                        <tfoot style="display: none;">
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col tnw">
                    Yogyakarta, <span id="tanggalN">............</span> <span id="bulanN"></span> <span id="tahunN"></span>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <span id="jabatanN" class="tnw">............</span>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <span id="pegawaiN" class="tnw">............</span>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <span id="nipN" class="tnw">............</span>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
@push('script')
    <script>
        var pegawai = @json($pegawai);
        var jabatan = @json($jabatan);

        function print() {
            $('.print').printThis();
        }

        $('document').ready(function() {
            const date = new Date();
            document.getElementById('tanggalN').innerHTML = date.getDate();
            switch (date.getMonth()) {
                case 1:
                    document.getElementById('bulanN').innerHTML = 'Januari';
                    break;
                case 2:
                    document.getElementById('bulanN').innerHTML = 'Februari';
                    break;
                case 3:
                    document.getElementById('bulanN').innerHTML = 'Maret';
                    break;
                case 4:
                    document.getElementById('bulanN').innerHTML = 'April';
                    break;
                case 5:
                    document.getElementById('bulanN').innerHTML = 'Mei';
                    break;
                case 6:
                    document.getElementById('bulanN').innerHTML = 'Juni';
                    break;
                case 7:
                    document.getElementById('bulanN').innerHTML = 'Juli';
                    break;
                case 8:
                    document.getElementById('bulanN').innerHTML = 'Agustus';
                    break;
                case 9:
                    document.getElementById('bulanN').innerHTML = 'September';
                    break;
                case 10:
                    document.getElementById('bulanN').innerHTML = 'Oktober';
                    break;
                case 11:
                    document.getElementById('bulanN').innerHTML = 'November';
                    break;
                case 12:
                    document.getElementById('bulanN').innerHTML = 'Desember';
                    break;
                default:
                    document.getElementById('bulanN').innerHTML = '';
                    break;
            }
            document.getElementById('tahunN').innerHTML = date.getFullYear();
        });

        $('#pegawai').on('change', function() {
            var pn = this.value - 1;
            document.getElementById('pegawaiN').innerHTML = pegawai[pn].nama;
            document.getElementById('jabatanN').innerHTML = jabatan[pegawai[pn].jabatan_pegawai_id - 1].nama_jabatan;
            // document.getElementById('nipN').innerHTML = pegawai[pn].nip;
        });

        $('#reset').on('click', function() {
            var table = $('#table_print').DataTable();
            table.search('').draw();
            table.columns().search('').draw();

            $("#platP").val(null).trigger('change');

            document.getElementById('bulanP').value = '';
            var bPH = document.getElementById('bPH');
            bPH.innerHTML = '';

            document.getElementById('tahunP').value = '';
            document.getElementById('tPH').innerHTML = '';

            document.getElementById('jenis_perawatanP').value = '';
            document.getElementById('jpPH').innerHTML = '';

            document.getElementById('pegawai').value = '';
            document.getElementById('tanggalN').innerHTML = '';
            document.getElementById('bulanN').innerHTML = '';
            document.getElementById('tahunN').innerHTML = '';
            document.getElementById('pegawaiN').innerHTML = '';
            document.getElementById('jabatanN').innerHTML = '';
            document.getElementById('nipN').innerHTML = '';
        });

        var table = $('#table_print').DataTable({
            paging: false,
            bInfo: false,
            "sDom": "rtip",
            ordering: false,
            columnDefs: [{
                    targets: '_all',
                    className: 'dt-head-center'
                },
                // {
                //     target: 5,
                //     visible: false
                // },
                // {
                //     target: 6,
                //     visible: false
                // },
                // { 
                //     target: 10,
                //     visible: false
                // }
            ],
            initComplete: function() {
                this.api().columns(2).every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select pP" id="platP"><option value="">No Plat</option></select>'
                            )
                            .appendTo($('#pP')).on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();

                                var tots = document.getElementById('sum');
                                sum = table.column(10, {
                                    search: 'applied'
                                }).data().sum();
                                sumP = new Intl.NumberFormat('de-DE').format(sum)
                                tots.innerHTML = 'Rp' + sumP;

                                var npPH = document.getElementById('npPH');
                                npPH.innerHTML = val;
                            });
                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                    })
                    .columns(5).every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select bP" id="bulanP"><option value="">Bulan</option></select>'
                            )
                            .appendTo($('#bP'))
                            .on('input', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();

                                var tots = document.getElementById('sum');
                                sum = table.column(10, {
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
                    .columns(6).every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select tP" id="tahunP"><option value="">Tahun</option></select>'
                            )
                            .appendTo($('#tP'))
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();

                                var tots = document.getElementById('sum');
                                sum = table.column(10, {
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
                    .columns(7).every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select jpP" id="jenis_perawatanP"><option value="">Jenis Pajak</option></select>'
                            )
                            .appendTo($('#jpP'))
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();

                                var tots = document.getElementById('sum');
                                sum = table.column(10, {
                                    search: 'applied'
                                }).data().sum();
                                sumP = new Intl.NumberFormat('de-DE').format(sum)
                                tots.innerHTML = 'Rp' + sumP;

                                var jpPH = document.getElementById('jpPH');
                                jpPH.innerHTML = val;
                            });
                        column
                            // filter jenis perawatan with keyword "pajak"
                            .data().unique().sort().each(function(d, j) {
                                let pajak = d.includes("Pajak");
                                if (pajak) {
                                    select.append('<option value="' + d + '">' + d + '</option>');
                                    // console.log(d);
                                }
                                // console.log(pajak);
                            });
                    })
            }
        });

        var tots = document.getElementById('sum');
        sum = table.column(10, {
            search: 'applied'
        }).data().sum();
        sumP = new Intl.NumberFormat('de-DE').format(sum)
        tots.innerHTML = 'Rp' + sumP;

        $('.pP').select2({
            theme: 'bootstrap-5',
        });
    </script>
@endpush
