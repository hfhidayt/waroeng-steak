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
        <div class="row">
            <div class="col mb-3">
                <a href="/dashboard/kendaraan" type="button" class="btn btn-primary">Kembali</a>
                {{-- <button type="button" class="btn btn-success" aria-controls="table_print" onclick="print()">Print</button>
                <button type="reset" class="btn btn-success" id="reset">Reset</button> --}}
            </div>
        </div>
        <div class="print">
            <div class="row justify-content-center text-center">
                <div class="col mt-5">
                    <h3 class="headerPrint">DATA KENDARAAN</h3>
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
                    <table class="table-sm table-bordered" id="example" width="100%">
                        <thead class="dt-head-center">
                            <tr>
                                <th>No</th> {{-- index 0 --}}
                                <th>Wilayah</th>
                                <th>No Plat</th>
                                <th>Jenis Kendaraan</th>
                                <th>No Rangka</th>
                                <th>No Mesin</th>
                                <th>No BPKB</th>
                                <th>Atas Nama</th>
                                <th>Tahun</th>
                                <th>Warna</th>
                                <th>Bahan Bakar</th>
                                <th>Jenis/Merk</th>
                                <th>PIC</th>
                                <th>Posisi Kendaraan</th> {{-- index 14 --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kendaraan as $k)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> {{-- index 0 --}}
                                    <td>{{ $k->wilayah }}</td>
                                    <td>{{ $k->no_plat }}</td>
                                    <td>{{ $k->jenis_kendaraan }}</td>
                                    <td>{{ $k->no_rangka }}</td>
                                    <td>{{ $k->no_mesin }}</td>
                                    <td>{{ $k->no_bpkb }}</td>
                                    <td>{{ $k->atas_nama }}</td>
                                    <td>{{ $k->tahun }}</td>
                                    <td>{{ $k->warna }}</td>
                                    <td>{{ $k->bahan_bakar }}</td>
                                    <td>{{ $k->jenis_merk }}</td>
                                    <td>{{ $k->pic }}</td>
                                    <td>{{ $k->posisi_kendaraan }}</td> {{-- index 14 --}}
                                </tr>
                            @endforeach
                        </tbody>
                        {{-- <tr>
                            <td colspan="14" class="text-right"><strong>Total</strong></td>
                            <td class="sum" id="sum"></td>
                        </tr> --}}
                        <tfoot style="display: none;">
                        </tfoot>
                    </table>
                </div>
            </div>
            {{-- <div class="row mt-5">
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
            </div> --}}
            {{-- <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <span id="nipN" class="tnw">............</span>
                </div>
            </div> --}}
        </div>
@endsection
@push('script')
    <script>
        let table = new DataTable('#example', {
            ordering: false,
            columnDefs: [{
                targets: '_all',
                className: 'dt-head-center'
            }],
            dom: 'Bfrtip',
            buttons: [
            {
                extend: 'excelHtml5',
                customize: function ( xlsx ){
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
    
                    // jQuery selector to add a border
                    $('row c', sheet).attr( 's', '25' );
                },
                createEmptyCells: true
            },
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            }
        ]
        });
    </script>
@endpush
