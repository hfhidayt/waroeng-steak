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
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nomor Polisi</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jenis Perawatan</th>
                            <th scope="col">Total Biaya</th>
                            <th scope="col">Tempat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perawatan as $ps)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                {{-- <td>{{ ddd($ps->kendaraan->no_plat) }}</td> --}}
                                <td class="text-center">{{ $ps->kendaraan->no_plat }}</td>
                                <td class="text-center">{{ $ps->tgl_perawatan }}</td>
                                <td class="text-center">{{ $ps->jenis_perawatan }}</td>
                                <td class="text-center">{{ $ps->total_biaya }}</td>
                                <td class="text-center">{{ $ps->tempat_perawatan }}</td>
                                <td>
                                    <a href="#show{{ $ps->id }}" class="btn btn-primary border-0" data-bs-toggle="modal">Lihat</a>
                                    @include('dashboard.kendaraan.perawatan.show')
                                    <a href="#edit{{ $ps->id }}" class="btn btn-warning border-0" data-bs-toggle="modal">Edit</a>
                                    @include('dashboard.kendaraan.perawatan.edit')
                                    <a href="#delete{{ $ps->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.kendaraan.perawatan.delete')
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $('#kendaraan_id').select2({
                theme: 'bootstrap-5',
            });
        });

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
        
        @if(session()->has('editPS'))
            $( document ).ready(function() {
                $('#edit{{ session("editPS") }}').modal('show');
            });

            const np = document.getElementById('kendaraan_id{{ session("editPS") }}');
            const npe = document.getElementById('np_e{{ session("editPS") }}');
            @error('kendaraan_id')
                np.classList.add('is-invalid');
                npe.append('@error("kendaraan_id") {{ $message }} @enderror');
            @enderror

            const tp = document.getElementById('tgl_perawatan{{ session("editPS") }}');
            const tpe = document.getElementById('tp_e{{ session("editPS") }}');
            @error('tgl_perawatan')
                tp.classList.add('is-invalid');
                tpe.append('@error("tgl_perawatan") {{ $message }} @enderror');
            @enderror

            const jp = document.getElementById('jenis_perawatan{{ session("editPS") }}');
            const jpe = document.getElementById('jp_e{{ session("editPS") }}');
            @error('jenis_perawatan')
                jp.classList.add('is-invalid');
                jpe.append('@error("jenis_perawatan") {{ $message }} @enderror');
            @enderror

            const tb = document.getElementById('total_biaya{{ session("editPS") }}');
            const tbe = document.getElementById('tb_e{{ session("editPS") }}');
            @error('total_biaya')
                tb.classList.add('is-invalid');
                tbe.append('@error("total_biaya") {{ $message }} @enderror');
            @enderror

            const tps = document.getElementById('tempat_perawatan{{ session("editPS") }}');
            const tpse = document.getElementById('tps_e{{ session("editPS") }}');
            @error('tempat_perawatan')
                tps.classList.add('is-invalid');
                tpse.append('@error("tempat_perawatan") {{ $message }} @enderror');
            @enderror
            
            const k = document.getElementById('kilometer{{ session("editPS") }}');
            const ke = document.getElementById('k_e{{ session("editPS") }}');
            @error('kilometer')
                k.classList.add('is-invalid');
                ke.append('@error("kilometer") {{ $message }} @enderror');
            @enderror
            
            const n = document.getElementById('nota{{ session("editPS") }}');
            const ne = document.getElementById('n_e{{ session("editPS") }}');
            @error('nota')
                n.classList.add('is-invalid');
                ne.append('@error("nota") {{ $message }} @enderror');
            @enderror

            @php
                Illuminate\Support\Facades\Session::forget('editPS')
            @endphp
        @elseif(session()->has('createPS'))
            $( document ).ready(function() {
                $('#createPS').modal('show');
            });

            const np = document.getElementById('kendaraan_id');
            const npe = document.getElementById('np_e');
            @error('kendaraan_id')
                np.classList.add('is-invalid');
                npe.append('@error("kendaraan_id") {{ $message }} @enderror');
            @enderror

            const tp = document.getElementById('tgl_perawatan');
            const tpe = document.getElementById('tp_e');
            @error('tgl_perawatan')
                tp.classList.add('is-invalid');
                tpe.append('@error("tgl_perawatan") {{ $message }} @enderror');
            @enderror
            tp.setAttribute('value', "{{ old('tgl_perawatan') }}");

            const jp = document.getElementById('jenis_perawatan');
            const jpe = document.getElementById('jp_e');
            @error('jenis_perawatan')
                jp.classList.add('is-invalid');
                jpe.append('@error("jenis_perawatan") {{ $message }} @enderror');
            @enderror

            const tb = document.getElementById('total_biaya');
            const tbe = document.getElementById('tb_e');
            @error('total_biaya')
                tb.classList.add('is-invalid');
                tbe.append('@error("total_biaya") {{ $message }} @enderror');
            @enderror
            tb.setAttribute('value', "{{ old('total_biaya') }}");

            const tps = document.getElementById('tempat_perawatan');
            const tpse = document.getElementById('tps_e');
            @error('tempat_perawatan')
                tps.classList.add('is-invalid');
                tpse.append('@error("total_biaya") {{ $message }} @enderror');
            @enderror
            tps.setAttribute('value', "{{ old('tempat_perawatan') }}");
            
            const k = document.getElementById('kilometer');
            const ke = document.getElementById('k_e');
            @error('kilometer')
                k.classList.add('is-invalid');
                ke.append('@error("kilometer") {{ $message }} @enderror');
            @enderror
            k.setAttribute('value', "{{ old('kilometer') }}");
            
            const n = document.getElementById('nota');
            const ne = document.getElementById('n_e');
            @error('nota')
                n.classList.add('is-invalid');
                ne.append('@error("nota") {{ $message }} @enderror');
            @enderror
            // n.setAttribute('value', "{{ old('nota') }}");

            @php
                Illuminate\Support\Facades\Session::forget('createPS')
            @endphp
        @endif
    </script>
@endpush