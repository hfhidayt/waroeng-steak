@extends('layouts.main')
@section('wrapper')
    <div class="container" id="print">
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
            <div class="col">
                <h3 class="headerPrint">jenis_perwatan - no_plat - bulan_tahun</h3>
            </div>
        </div>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>No</th>
                    <th>Nomor Plat</th>
                    <th>Tanggal</th>
                    <th>Jenis Perawatan</th>
                    <th>Tempat Perawatan</th>
                    <th>Total Biaya</th>
                </tr>
                @foreach ($perawatan as $ps)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ps->kendaraan->no_plat }}</td>
                        <td>{{ $ps->tanggal }} {{ $ps->bulan }} {{ $ps->tahun }}</td>
                        <td>{{ $ps->jenis_perawatan }}</td>
                        <td>{{ $ps->tempat_perawatan }}</td>
                        <td>{{ $ps->total_biaya }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4"></th>
                    <th>Total</th>
                    <th></th>
                </tr>
        </table>
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
    <div class="col-1 mx-auto my-5">
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <td>
                            <a href="/dashboard/perawatan/kendaraan" type="button" class="btn btn-warning">Kembali</a>
                        </td>
                        <td>
                            {{-- <button type="button" class="btn btn-primary" onclick="printDiv('print')">Print</button> --}}
                            <button type="button" class="btn btn-primary" onclick="print()">Print</button>
                            {{-- <button type="button" class="btn btn-primary" onclick="printData()">Print</button> --}}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        function print() {
            $('.container').printThis();
        }
    </script>
@endpush
