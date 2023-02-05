@extends('layouts.main')
@section('wrapper')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col">
                <h3>LAPORAN BIAYA PERAWATAN KENDARAAN</h3>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col">
                <h3>PT WAROENG STEAK INDONESIA</h3>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col">
                <h3>jenis_perwatan - no_plat - bulan_tahun</h3>
            </div>
        </div>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Nomor Data</th> <!-- id -->
                    <th>No</th> <!-- urut -->
                    <th>Nomor Plat</th>
                    <th>Tanggal</th> <!-- tanggal-bulan-tahun -->
                    <th>Jenis Perawatan</th>
                    <th>Total Biaya</th>
                    <th>Tempat</th>
                </tr>
                @foreach ($perawatan as $ps)
                    <tr>
                        <td>{{ $ps->id }}</td>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ps->kendaraan->no_plat }}</td>
                        <td>{{ $ps->tanggal }} {{ $ps->bulan }} {{ $ps->tahun }}</td>
                        <td>{{ $ps->jenis_perawatan }}</td>
                        <td>{{ $ps->total_biaya }}</td>
                        <td>{{ $ps->tempat_perawatan }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4"></th>
                    <th>Total</th>
                    <th></th>
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
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
                <u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
                ID :
            </div>
        </div>
    </div>
    <div class="d-grid gap-2 col-1 mx-auto my-5">
        <button type="button" class="btn btn-primary" onclick="printData()">
            Print</button>
        {{-- <button type="button" class="btn btn-primary" id="create_pdf">
            Print</button> --}}
    </div>
    <script>
        function printData() {
            var print = document.getElementById("printTabel");
            newWin = window.open("");
            newWin.document.write(print.outerHTML);
            newWin.print();
            newWin.close();
        }
    </script>
@endsection
