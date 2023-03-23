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
                <a href="#create" class="btn btn-success" data-bs-toggle="modal">Tambah Baru</a>
                <a href="/dashboard/merk/kendaraan" class="btn btn-success">Merk Kendaraan</a>
                <a href="/dashboard/jenis/kendaraan" class="btn btn-success">Jenis Kendaraan</a>
                <a href="/dashboard/bahanbakar/kendaraan" class="btn btn-success">Bahan Bakar</a>
                <a href="/dashboard/download/kendaraan" class="btn btn-warning">Download Data Kendaraan</a>
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id" width="100%">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Wilayah</th>
                            <th scope="col">Plat</th>
                            <th scope="col">Jenis/Merk</th>
                            <th scope="col">Jenis Kendaraan</th>
                            <th scope="col">PIC</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kendaraans as $k)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $k->wilayah }}</td>
                                <td class="text-center">{{ $k->no_plat }}</td>
                                <td class="text-center">{{ $k->jenis_merk }}</td>
                                <td class="text-center">{{ $k->jenis_kendaraan }}</td>
                                <td class="text-center">{{ $k->pic }}</td>
                                <td class="text-center">{{ $k->keterangan }}</td>
                                <td>
                                    <a href="#show{{ $k->id }}" class="btn btn-primary border-0" data-bs-toggle="modal">Lihat</a>
                                    @include('dashboard.kendaraan.show')
                                    <a href="#edit{{ $k->id }}" class="btn btn-warning border-0" data-bs-toggle="modal" onclick="saveId({{ $k->id }})">Edit</a>
                                    @include('dashboard.kendaraan.edit')
                                    <a href="#delete{{ $k->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.kendaraan.delete')
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
        @include('dashboard.kendaraan.create')
        @include('dashboard.kendaraan.pembelian.create')
        @include('dashboard.kendaraan.penjualan.create')
    </div>
@endsection
@push('script')
    <script>
        let table = new DataTable('#table_id', {
            ordering: false,
            columnDefs: [{
                targets: '_all',
                className: 'dt-head-center'
            }]
        });
        // $(document).ready(function() {
        //     var table = $('#table_id').DataTable({
        //         // ordering: false,
        //         // columnDefs: [{
        //         //     targets: '_all',
        //         //     className: 'dt-head-center'
        //         // }],
        //         // dom: 'B',
        //         buttons: [
        //             'print', 'copy'
        //         ]
        //     });
        // });

        // $(document).ready(function() {
        //     $('#table_id').DataTable( {
        //         dom: 'Blfrtip',
        //         buttons: [
        //             'copy', 'csv', 'excel', 'pdf', 'print'
        //         ]
        //     } );
        // } );

        // printview image create
        function previewGambarDepan() {
            const image = document.querySelector('#gambar_depan');
            const imgPreview = document.querySelector('.img-preview1');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewGambarBelakang() {
            const image = document.querySelector('#gambar_belakang');
            const imgPreview = document.querySelector('.img-preview2');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewGambarSampingKanan() {
            const image = document.querySelector('#gambar_samping_kanan');
            const imgPreview = document.querySelector('.img-preview3');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewGambarSampingKiri() {
            const image = document.querySelector('#gambar_samping_kiri');
            const imgPreview = document.querySelector('.img-preview4');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewBPKB() {
            const image = document.querySelector('#foto_bpkb');
            const imgPreview = document.querySelector('.img-preview5');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewSTNK() {
            const image = document.querySelector('#foto_stnk');
            const imgPreview = document.querySelector('.img-preview6');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        // preview image update / edit
        function previewGambarDepanEdit() {
            const image = document.querySelector('#gambar_depan');
            const imgPreview = document.querySelector('.img-preview11');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewGambarBelakangEdit() {
            const image = document.querySelector('#gambar_belakang');
            const imgPreview = document.querySelector('.img-preview22');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewGambarSampingKananEdit() {
            const image = document.querySelector('#gambar_samping_kanan');
            const imgPreview = document.querySelector('.img-preview33');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewGambarSampingKiriEdit() {
            const image = document.querySelector('#gambar_samping_kiri');
            const imgPreview = document.querySelector('.img-preview44');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewBPKBEdit() {
            const image = document.querySelector('#foto_bpkb');
            const imgPreview = document.querySelector('.img-preview55');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewSTNKEdit() {
            const image = document.querySelector('#foto_stnk');
            const imgPreview = document.querySelector('.img-preview66');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        // error handling for create
        @if (session()->has('create'))
            $(document).ready(function() {
                $('#create').modal('show');
            });

            const np = document.getElementById('no_plat');
            const npe = document.getElementById('np_e');
            @error('no_plat')
                np.classList.add('is-invalid');
                npe.append('@error('no_plat') {{ $message }} @enderror');
            @enderror
            np.setAttribute('value', "{{ old('no_plat') }}");

            @php
                Illuminate\Support\Facades\Session::forget('create');
            @endphp
        @endif

        // error handling for edit
        @if (session()->has('editId'))
            $(document).ready(function() {
                $('#edit{{ session('editId') }}').modal('show');
            });

            const np = document.getElementById('no_plat{{ session('editId') }}');
            const npe = document.getElementById('np_e{{ session('editId') }}');
            @error('no_plat')
                np.classList.add('is-invalid');
                npe.append('@error('no_plat') {{ $message }} @enderror');
            @enderror

            @php
                Illuminate\Support\Facades\Session::forget('editId');
            @endphp
        @endif
    </script>
@endpush
