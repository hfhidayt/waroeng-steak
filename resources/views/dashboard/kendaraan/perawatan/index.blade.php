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
                <a href="#createPS" class="btn btn-success" data-bs-toggle="modal">Tambah Perawatan</a>
                @include('dashboard.kendaraan.perawatan.create')
                <a href="/dashboard/jenis/perawatan/kendaraan" class="btn btn-success">Jenis Perawatan</a>
                <a href="/dashboard/laporan/perawatan/kendaraan" class="btn btn-warning">Print Laporan Biaya</a>
                <a href="/dashboard/rincian/perawatan/kendaraan" class="btn btn-warning">Print Rincian Biaya</a>
            </div>
        </div>
        {{-- <select class="form-select kendaraan_idC" name="kendaraan_id" id="kendaraan_id">
            <option value="">-- Nomor Plat --</option>
            @foreach ($no_plat as $np)
                <option value="{{ $np->id }}" {{ old('no_plat') == $np->id ? "selected" : "" }}>{{ $np->no_plat }}</option>
            @endforeach
        </select> --}}
        <div class="div row">
            <div class="col mx-4">
                <table>
                    <tr>
                        <td id="plat"></td>
                        <td id="bulanF"></td>
                        <td id="tahunF"></td>
                        <td id="perawatan"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id" width="100%">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nomor Polisi</th>
                            <th scope="col">bulan</th>
                            <th scope="col">tahun</th>
                            <th scope="col">Tanggal Perawatan</th>
                            <th scope="col">Jenis Perawatan</th>
                            <th scope="col">PIC</th>
                            <th scope="col">Total Biaya</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perawatan as $ps)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ !empty($ps->kendaraan) ? $ps->kendaraan->no_plat : '' }}</td>
                                <td class="text-center">{{ $ps->bulan }}</td>
                                <td class="text-center">{{ $ps->tahun }}</td>
                                <td class="text-center">{{ $ps->tanggal }} {{ $ps->bulan }} {{ $ps->tahun }}</td>
                                <td class="text-center">{{ $ps->jenis_perawatan }}</td>
                                <td class="text-center">{{ !empty($ps->kendaraan) ? $ps->kendaraan->pic : ''  }}</td>
                                <td class="text-center">Rp{{ number_format($ps->total_biaya, 0, ',', '.') }}</td>
                                <td>
                                    <a href="#show{{ $ps->id }}" class="btn btn-primary border-0" data-bs-toggle="modal">Lihat</a>
                                    @include('dashboard.kendaraan.perawatan.show')
                                    <a href="#edit{{ $ps->id }}" class="btn btn-warning border-0" data-bs-toggle="modal" onclick="hitungEdit({{ $ps->id }})">Edit</a>
                                    @include('dashboard.kendaraan.perawatan.edit')
                                    <a href="#delete{{ $ps->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.kendaraan.perawatan.delete')
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
                        target: 2,
                        visible: false
                    },
                    {
                        target: 3,
                        visible: false
                    }
                ],

                initComplete: function() {
                    this.api()
                        // filter no_plat pajak.blade
                        // .columns(2)
                        // .every(function() {
                        //     var column = this;
                        //     var select = $(
                        //             '<select class="form-select platF"><option value="">-- Nomor Polisi --</option></select>'
                        //         )
                        //         .appendTo($('#platP'))
                        //         .on('change', function() {
                        //             var val = $.fn.dataTable.util.escapeRegex($(this).val());

                        //             column.search(val ? '^' + val + '$' : '', true, false)
                        //                 .draw();
                        //         });
                        //     column
                        //         .data()
                        //         .unique()
                        //         .sort()
                        //         .each(function(d, j) {
                        //             select.append('<option value="' + d + '">' + d +
                        //                 '</option>');
                        //         });
                        // })
                        // // filter bulan_pajak pajak.blade
                        // .columns(4)
                        // .every(function() {
                        //     var column = this;
                        //     var select = $(
                        //             '<select class="form-select"><option value="">-- Bulan Pajak --</option></select>'
                        //         )
                        //         .appendTo($('#bulanPajak'))
                        //         .on('change', function() {
                        //             var val = $.fn.dataTable.util.escapeRegex($(this).val());

                        //             column.search(val ? '^' + val + '$' : '', true, false)
                        //                 .draw();
                        //         });
                        //     column
                        //         .data()
                        //         .unique()
                        //         .sort()
                        //     select.append('<option value="Januari">Januari</option>')
                        //     select.append('<option value="Februari">Februari</option>')
                        //     select.append('<option value="Maret">Maret</option>')
                        //     select.append('<option value="April">April</option>')
                        //     select.append('<option value="Mei">Mei</option>')
                        //     select.append('<option value="Juni">Juni</option>')
                        //     select.append('<option value="Juli">Juli</option>')
                        //     select.append('<option value="Agustus">Agustus</option>')
                        //     select.append('<option value="September">September</option>')
                        //     select.append('<option value="Oktober">Oktober</option>')
                        //     select.append('<option value="November">November</option>')
                        //     select.append('<option value="Desember">Desember</option>')
                        // })
                        // // filter tahun_pajak pajak.blade
                        // .columns(5)
                        // .every(function() {
                        //     var column = this;
                        //     var select = $(
                        //             '<select class="form-select"><option value="">-- Tahun Pajak --</option></select>'
                        //         )
                        //         .appendTo($('#tahunPajak'))
                        //         .on('change', function() {
                        //             var val = $.fn.dataTable.util.escapeRegex($(this).val());

                        //             column.search(val ? '^' + val + '$' : '', true, false)
                        //                 .draw();
                        //         });
                        //     column
                        //         .data()
                        //         .unique()
                        //         .sort()
                        //         .each(function(d, j) {
                        //             select.append('<option value="' + d + '">' + d +
                        //                 '</option>');
                        //         });
                        // })
                        // // filter bulan_ganti_plat pajak.blade
                        // .columns(7)
                        // .every(function() {
                        //     var column = this;
                        //     var select = $(
                        //             '<select class="form-select"><option value="">-- Bulan Ganti Plat --</option></select>'
                        //         )
                        //         .appendTo($('#bulanGantiPlat'))
                        //         .on('change', function() {
                        //             var val = $.fn.dataTable.util.escapeRegex($(this).val());

                        //             column.search(val ? '^' + val + '$' : '', true, false)
                        //                 .draw();
                        //         });
                        //     column
                        //         .data()
                        //         .unique()
                        //         .sort()
                        //     select.append('<option value="Januari">Januari</option>')
                        //     select.append('<option value="Februari">Februari</option>')
                        //     select.append('<option value="Maret">Maret</option>')
                        //     select.append('<option value="April">April</option>')
                        //     select.append('<option value="Mei">Mei</option>')
                        //     select.append('<option value="Juni">Juni</option>')
                        //     select.append('<option value="Juli">Juli</option>')
                        //     select.append('<option value="Agustus">Agustus</option>')
                        //     select.append('<option value="September">September</option>')
                        //     select.append('<option value="Oktober">Oktober</option>')
                        //     select.append('<option value="November">November</option>')
                        //     select.append('<option value="Desember">Desember</option>')
                        // })
                        // // filter tahun_ganti_plat pajak.blade
                        // .columns(8)
                        // .every(function() {
                        //     var column = this;
                        //     var select = $(
                        //             '<select class="form-select"><option value="">-- Tahun Ganti Plat --</option></select>'
                        //         )
                        //         .appendTo($('#tahunGantiPlat'))
                        //         .on('change', function() {
                        //             var val = $.fn.dataTable.util.escapeRegex($(this).val());

                        //             column.search(val ? '^' + val + '$' : '', true, false)
                        //                 .draw();
                        //         });
                        //     column
                        //         .data()
                        //         .unique()
                        //         .sort()
                        //         .each(function(d, j) {
                        //             select.append('<option value="' + d + '">' + d +
                        //                 '</option>');
                        //         });
                        // })

                        // filter no_plat perawatan.blade
                        .columns(1)
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select class="form-select platF"><option value="">-- Nomor Polisi --</option></select>'
                                )
                                .appendTo($('#plat'))
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
                        // filter bulan perawatan.blade
                        .columns(2)
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select class="form-select"><option value="">-- Bulan --</option></select>'
                                )
                                .appendTo($('#bulanF'))
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
                        // filter tahun perawatan.blade
                        .columns(3)
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select class="form-select"><option value="">-- Tahun --</option></select>'
                                )
                                .appendTo($('#tahunF'))
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
                        // filter jenis_perawatan perawatan.blade
                        .columns(5)
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select class="form-select"><option value="">-- Jenis Perawatan --</option></select>'
                                )
                                .appendTo($('#perawatan'))
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
                        });
                },
            });

            $('.platF').select2({
                theme: 'bootstrap-5',
            });

            $('.tglF').select2({
                theme: 'bootstrap-5',
            });
        });

        $(document).ready(function() {
            $('.kendaraan_idC').select2({
                theme: 'bootstrap-5',
                dropdownParent: $("#createPS"),
            });
        });

        function hitung() {
            const harga_satuan = document.querySelector('.harga_satuan').value;
            const volume = document.querySelector('.volume').value;
            const tb = document.querySelector('.total_biaya');
            var hasil = harga_satuan * volume;
            console.log(harga_satuan);
            console.log(volume);
            tb.value = hasil;
            // console.log(harga_satuan, volume);
        }

        function hitungEdit(id) {
            const harga_satuan = document.querySelector(`.harga_satuan${id}`).value;
            const volume = document.querySelector(`.volume${id}`).value;
            const tb = document.querySelector(`.total_biaya${id}`);
            var hasil = harga_satuan * volume;
            console.log(id);
            console.log(harga_satuan);
            console.log(volume);
            tb.value = hasil;
            // console.log(harga_satuan, volume);
        }


        function previewImage() {
            const image = document.querySelector('#nota');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        @if (session()->has('editPS'))
            $(document).ready(function() {
                $('#edit{{ session('editPS') }}').modal('show');
            });

            const np = document.getElementById('kendaraan_id{{ session('editPS') }}');
            const npe = document.getElementById('np_e{{ session('editPS') }}');
            @error('kendaraan_id')
                np.classList.add('is-invalid');
                npe.append('@error('kendaraan_id') {{ $message }} @enderror');
            @enderror

            const tp = document.getElementById('tanggal{{ session('editPS') }}');
            const tpe = document.getElementById('tp_e{{ session('editPS') }}');
            @error('tanggal')
                tp.classList.add('is-invalid');
                tpe.append('@error('tanggal') {{ $message }} @enderror');
            @enderror

            const bp = document.getElementById('bulan{{ session('editPS') }}');
            const bpe = document.getElementById('bp_e{{ session('editPS') }}');
            @error('bulan')
                bp.classList.add('is-invalid');
                bpe.append('@error('bulan') {{ $message }} @enderror');
            @enderror

            const thp = document.getElementById('tahun{{ session('editPS') }}');
            const thpe = document.getElementById('thp_e{{ session('editPS') }}');
            @error('tahun')
                th.classList.add('is-invalid');
                thpe.append('@error('tahun') {{ $message }} @enderror');
            @enderror

            const jp = document.getElementById('jenis_perawatan{{ session('editPS') }}');
            const jpe = document.getElementById('jp_e{{ session('editPS') }}');
            @error('jenis_perawatan')
                jp.classList.add('is-invalid');
                jpe.append('@error('jenis_perawatan') {{ $message }} @enderror');
            @enderror

            const bj = document.getElementById('barang_jasa{{ session('editPS') }}');
            const bje = document.getElementById('bj_e{{ session('editPS') }}');
            @error('barang_jasa')
                bj.classList.add('is-invalid');
                bje.append('@error('barang_jasa') {{ $message }} @enderror');
            @enderror
            // bj.setAttribute('value', "{{ old('barang_jasa') }}");

            const v = document.getElementById('volume{{ session('editPS') }}');
            const ve = document.getElementById('v_e{{ session('editPS') }}');
            @error('volume')
                v.classList.add('is-invalid');
                ve.append('@error('volume') {{ $message }} @enderror');
            @enderror
            // v.setAttribute('value', "{{ old('volume') }}");

            const s = document.getElementById('satuan{{ session('editPS') }}');
            const se = document.getElementById('s_e{{ session('editPS') }}');
            @error('satuan')
                s.classList.add('is-invalid');
                se.append('@error('satuan') {{ $message }} @enderror');
            @enderror
            // s.setAttribute('value', "{{ old('satuan') }}");

            const tps = document.getElementById('tempat_perawatan{{ session('editPS') }}');
            const tpse = document.getElementById('tps_e{{ session('editPS') }}');
            @error('tempat_perawatan')
                tps.classList.add('is-invalid');
                tpse.append('@error('tempat_perawatan') {{ $message }} @enderror');
            @enderror

            const k = document.getElementById('kilometer{{ session('editPS') }}');
            const ke = document.getElementById('k_e{{ session('editPS') }}');
            @error('kilometer')
                k.classList.add('is-invalid');
                ke.append('@error('kilometer') {{ $message }} @enderror');
            @enderror

            const hs = document.getElementById('harga_satuan{{ session('editPS') }}');
            const hse = document.getElementById('hs_e{{ session('editPS') }}');
            @error('harga_satuan')
                hs.classList.add('is-invalid');
                hse.append('@error('harga_satuan') {{ $message }} @enderror');
            @enderror
            // hs.setAttribute('value', "{{ old('harga_satuan') }}");

            const tb = document.getElementById('total_biaya{{ session('editPS') }}');
            const tbe = document.getElementById('tb_e{{ session('editPS') }}');
            @error('total_biaya')
                tb.classList.add('is-invalid');
                tbe.append('@error('total_biaya') {{ $message }} @enderror');
            @enderror

            const n = document.getElementById('nota{{ session('editPS') }}');
            const ne = document.getElementById('n_e{{ session('editPS') }}');
            @error('nota')
                n.classList.add('is-invalid');
                ne.append('@error('nota') {{ $message }} @enderror');
            @enderror

            @php
                Illuminate\Support\Facades\Session::forget('editPS');
            @endphp
        @elseif (session()->has('createPS'))
            $(document).ready(function() {
                $('#createPS').modal('show');
            });

            const np = document.getElementById('kendaraan_id');
            const npe = document.getElementById('np_e');
            @error('kendaraan_id')
                np.classList.add('is-invalid');
                npe.append('@error('kendaraan_id') {{ $message }} @enderror');
            @enderror

            const tp = document.getElementById('tanggal');
            const tpe = document.getElementById('tp_e');
            @error('tanggal')
                tp.classList.add('is-invalid');
                tpe.append('@error('tanggal') {{ $message }} @enderror');
            @enderror
            tp.setAttribute('value', "{{ old('tanggal') }}");

            const bp = document.getElementById('bulan');
            const bpe = document.getElementById('bp_e');
            @error('bulan')
                bp.classList.add('is-invalid');
                bpe.append('@error('bulan') {{ $message }} @enderror');
            @enderror
            tp.setAttribute('value', "{{ old('bulan') }}");

            const thp = document.getElementById('tahun');
            const thpe = document.getElementById('thp_e');
            @error('tahun')
                thp.classList.add('is-invalid');
                thpe.append('@error('tahun') {{ $message }} @enderror');
            @enderror
            tp.setAttribute('value', "{{ old('tahun') }}");

            const jp = document.getElementById('jenis_perawatan');
            const jpe = document.getElementById('jp_e');
            @error('jenis_perawatan')
                jp.classList.add('is-invalid');
                jpe.append('@error('jenis_perawatan') {{ $message }} @enderror');
            @enderror

            const bj = document.getElementById('barang_jasa');
            const bje = document.getElementById('bj_e');
            @error('barang_jasa')
                bj.classList.add('is-invalid');
                bje.append('@error('barang_jasa') {{ $message }} @enderror');
            @enderror
            bj.setAttribute('value', "{{ old('barang_jasa') }}");

            const v = document.getElementById('volume');
            const ve = document.getElementById('v_e');
            @error('volume')
                v.classList.add('is-invalid');
                ve.append('@error('volume') {{ $message }} @enderror');
            @enderror
            v.setAttribute('value', "{{ old('volume') }}");

            const s = document.getElementById('satuan');
            const se = document.getElementById('s_e');
            @error('satuan')
                s.classList.add('is-invalid');
                se.append('@error('satuan') {{ $message }} @enderror');
            @enderror
            s.setAttribute('value', "{{ old('satuan') }}");

            const tps = document.getElementById('tempat_perawatan');
            const tpse = document.getElementById('tps_e');
            @error('tempat_perawatan')
                tps.classList.add('is-invalid');
                tpse.append('@error('total_biaya') {{ $message }} @enderror');
            @enderror
            tps.setAttribute('value', "{{ old('tempat_perawatan') }}");

            const k = document.getElementById('kilometer');
            const ke = document.getElementById('k_e');
            @error('kilometer')
                k.classList.add('is-invalid');
                ke.append('@error('kilometer') {{ $message }} @enderror');
            @enderror
            k.setAttribute('value', "{{ old('kilometer') }}");

            const hs = document.getElementById('harga_satuan');
            const hse = document.getElementById('hs_e');
            @error('harga_satuan')
                hs.classList.add('is-invalid');
                hse.append('@error('harga_satuan') {{ $message }} @enderror');
            @enderror
            hs.setAttribute('value', "{{ old('harga_satuan') }}");

            const tb = document.getElementById('total_biaya');
            const tbe = document.getElementById('tb_e');
            @error('total_biaya')
                tb.classList.add('is-invalid');
                tbe.append('@error('total_biaya') {{ $message }} @enderror');
            @enderror
            tb.setAttribute('value', "{{ old('total_biaya') }}");

            const n = document.getElementById('nota');
            const ne = document.getElementById('n_e');
            @error('nota')
                n.classList.add('is-invalid');
                ne.append('@error('nota') {{ $message }} @enderror');
            @enderror
            // n.setAttribute('value', "{{ old('nota') }}");

            @php
                Illuminate\Support\Facades\Session::forget('createPS');
            @endphp
        @endif
    </script>
@endpush
