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
                <div class="input-group mb-3">
                    <label class="input-group-text" for="jperawatanP">Jenis Perawatan</label>
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
                <a href="/dashboard/perawatan/kendaraan" type="button" class="btn btn-primary">Kembali</a>
                <button type="button" class="btn btn-success" onclick="print()">Print</button>
                <button type="reset" class="btn btn-success" id="reset">Reset</button>
            </div>
        </div>
        <div class="print">
            <div class="row justify-content-center text-center">
                <div class="col mt-5">
                    <h3 class="headerPrint">RINCIAN BIAYA PERBAIKAN</h3>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col">
                    <h3 class="headerPrint">KENDARAAN <span id="npPH"></span></h3>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col">
                    <h3 class="headerPrint">PT WAROENG STEAK</h3>

                </div>
            </div>
            <div class="row row-margin-rincian-head mb-3">
                <div class="col">
                    <hr class="s9">
                    <div class="row">
                        <div class="col">
                            <table border="0" class="tnw">
                                <tr>
                                    <td>Nomor Polisi</td>
                                    <td>:</td>
                                    <td><span id="npD">............</span></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><span id="tanggalD"></span> <span id="bulanD"></span> <span id="tahunD"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Perawatan</td>
                                    <td>:</td>
                                    <td><span id="jpD">............</span></td>
                                </tr>
                            </table>
                        </div>
                        {{-- <div class="col-auto">
                            <table border="0" class="tnw">
                                <tr>
                                    <td>KM</td>
                                    <td>:</td>
                                    <td><span id="kmD">............</span></td>
                                </tr>
                            </table>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table-sm table-bordered" id="table_print" width="100%">
                        <thead class="dt-head-center">
                            <tr>
                                <th>No</th>
                                <th>NoPlat</th>
                                <th>JenisPerawatan</th>
                                <th>Barang/Jasa</th>
                                <th>Volume</th>
                                <th>Satuan</th>
                                <th>Harga Satuan</th>
                                <th>Total Biaya</th>
                                <th>TempatPerawatan</th>
                                <th>Kilometer</th>
                                <th>TotalBiaya</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perawatan as $ps)
                                <tr id="row-{{ $ps->id }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ps->kendaraan->no_plat }}</td>
                                    <td>{{ $ps->jenis_perawatan }}</td>
                                    <td>{{ $ps->barang_jasa }}</td>
                                    <td>{{ $ps->volume }}</td>
                                    <td>{{ $ps->satuan }}</td>
                                    <td>Rp{{ number_format($ps->harga_satuan, 0, ',', '.') }}</td>
                                    <td>Rp{{ number_format($ps->total_biaya, 0, ',', '.') }}</td>
                                    <td>{{ $ps->tempat_perawatan }}</td>
                                    <td>{{ $ps->kilometer }}</td>
                                    <td class="total_biaya">{{ $ps->total_biaya }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tr>
                            <td colspan="5" class="text-right"><strong>Total</strong></td>
                            <td class="sum" id="sum"></td>
                        </tr>
                        <tfoot style="display: none;">
                        </tfoot>
                    </table>
                </div>
            </div>
            {{-- <div class="row row-margin-rincian-foot mt-2">
                <div class="col">
                    <span class="tnw">Tempat</span> : <span class="tnw" id="tempat">............</span>
                </div>
            </div> --}}
            <div class="row mt-3">
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
            document.getElementById('tanggalD').innerHTML = date.getDate();
            document.getElementById('tanggalN').innerHTML = date.getDate();
            switch (date.getMonth()) {
                case 1:
                    document.getElementById('bulanD').innerHTML = 'Januari';
                    document.getElementById('bulanN').innerHTML = 'Januari';
                    break;
                case 2:
                    document.getElementById('bulanD').innerHTML = 'Februari';
                    document.getElementById('bulanN').innerHTML = 'Februari';
                    break;
                case 3:
                    document.getElementById('bulanD').innerHTML = 'Maret';
                    document.getElementById('bulanN').innerHTML = 'Maret';
                    break;
                case 4:
                    document.getElementById('bulanD').innerHTML = 'April';
                    document.getElementById('bulanN').innerHTML = 'April';
                    break;
                case 5:
                    document.getElementById('bulanD').innerHTML = 'Mei';
                    document.getElementById('bulanN').innerHTML = 'Mei';
                    break;
                case 6:
                    document.getElementById('bulanD').innerHTML = 'Juni';
                    document.getElementById('bulanN').innerHTML = 'Juni';
                    break;
                case 7:
                    document.getElementById('bulanD').innerHTML = 'Juli';
                    document.getElementById('bulanN').innerHTML = 'Juli';
                    break;
                case 8:
                    document.getElementById('bulanD').innerHTML = 'Agustus';
                    document.getElementById('bulanN').innerHTML = 'Agustus';
                    break;
                case 9:
                    document.getElementById('bulanD').innerHTML = 'September';
                    document.getElementById('bulanN').innerHTML = 'September';
                    break;
                case 10:
                    document.getElementById('bulanD').innerHTML = 'Oktober';
                    document.getElementById('bulanN').innerHTML = 'Oktober';
                    break;
                case 11:
                    document.getElementById('bulanD').innerHTML = 'November';
                    document.getElementById('bulanN').innerHTML = 'November';
                    break;
                case 12:
                    document.getElementById('bulanD').innerHTML = 'Desember';
                    document.getElementById('bulanN').innerHTML = 'Desember';
                    break;
                default:
                    document.getElementById('bulanD').innerHTML = '';
                    document.getElementById('bulanN').innerHTML = '';
                    break;
            }
            document.getElementById('tahunD').innerHTML = date.getFullYear();
            document.getElementById('tahunN').innerHTML = date.getFullYear();
        });

        $('#pegawai').on('change', function() {
            var pn = this.value - 2;
            document.getElementById('pegawaiN').innerHTML = pegawai[pn].nama;
            document.getElementById('jabatanN').innerHTML = jabatan[pegawai[pn].jabatan_pegawai_id].nama_jabatan;
            // document.getElementById('nipN').innerHTML = pegawai[pn].nip;
        });

        $('#reset').on('click', function() {
            $("#platP").val(null).trigger('change');

            document.getElementById('jperawatanP').value = '';
            // document.getElementById('kmD').innerHTML = '';
            document.getElementById('jpD').innerHTML = '';
            document.getElementById('tempat').innerHTML = '';

            document.getElementById('pegawai').value = '';
            document.getElementById('tanggalN').innerHTML = '';
            document.getElementById('bulanN').innerHTML = '';
            document.getElementById('tahunN').innerHTML = '';
            document.getElementById('pegawaiN').innerHTML = '';
            document.getElementById('jabatanN').innerHTML = '';
            // document.getElementById('nipN').innerHTML = '';

            var table = $('#table_print').DataTable();
            table.search('').draw();
            table.columns().search('').draw();
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
                {
                    target: 1,
                    visible: false
                },
                {
                    target: 2,
                    visible: false
                },
                {
                    target: 8,
                    visible: false
                },
                {
                    target: 9,
                    visible: false
                },
                {
                    target: 10,
                    visible: false
                }
            ],
            initComplete: function() {
                this.api()
                    .columns(1).every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select pP" id="platP"><option value="">No Plat</option></select>'
                            )
                            .appendTo($('#pP')).on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();

                                sum = table.column(10, {
                                    search: 'applied'
                                }).data().sum();
                                sumP = new Intl.NumberFormat('de-DE').format(sum)
                                document.getElementById('sum').innerHTML = 'Rp' + sumP;

                                // kmD = table.column(9, {
                                //     search: 'applied'
                                // }).data()[0];
                                // document.getElementById('kmD').innerHTML = kmD;

                                document.getElementById('npPH').innerHTML = val;
                                document.getElementById('npD').innerHTML = val;
                            });
                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                    })
                    .columns(2).every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select jpP" id="jperawatanP"><option value="">Jenis Perawatan</option></select>'
                            )
                            .appendTo($('#jpP')).on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();

                                sum = table.column(10, {
                                    search: 'applied'
                                }).data().sum();
                                sumP = new Intl.NumberFormat('de-DE').format(sum)
                                document.getElementById('sum').innerHTML = 'Rp' + sumP;

                                // tempat = table.column(8, {
                                //     search: 'applied'
                                // }).data()[0];
                                // document.getElementById('tempat').innerHTML = tempat;

                                document.getElementById('jpD').innerHTML = val;
                            });
                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                    })
            }
        });

        sum = table.column(10, {
            search: 'applied'
        }).data().sum();
        sumP = new Intl.NumberFormat('de-DE').format(sum)
        document.getElementById('sum').innerHTML = 'Rp' + sumP;

        $('.pP').select2({
            theme: 'bootstrap-5',
        });
    </script>
@endpush
