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
                <a href="/dashboard/perawatan/kendaraan" class="btn btn-primary">Kembali</a>
                <a href="#createJPS" class="btn btn-success" data-bs-toggle="modal">Tambah Jenis Perawatan</a>
                @include('dashboard.kendaraan.perawatan.jenis.create')
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Perawatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jenis_perawatan as $jps)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $jps->jenis_perawatan }}</td>
                                <td class="text-center">
                                    <a href="#show{{ $jps->id }}" class="btn btn-primary border-0" data-bs-toggle="modal">Lihat</a>
                                    @include('dashboard.kendaraan.perawatan.jenis.show')
                                    <a href="#edit{{ $jps->id }}" class="btn btn-warning border-0" data-bs-toggle="modal">Edit</a>
                                    @include('dashboard.kendaraan.perawatan.jenis.edit')
                                    <a href="#delete{{ $jps->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.kendaraan.perawatan.jenis.delete')
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
            var table = $('#table_id').DataTable({
                ordering: false,
                columnDefs: [{
                    targets: '_all',
                    className: 'dt-head-center'
                }]
            });
        });
        @if (session()->has('editJPS'))
            $(document).ready(function() {
                $('#edit{{ session('editJPS') }}').modal('show');
            });

            const jp = document.getElementById('jenis_perawatan{{ session('editJPS') }}');
            const jpse = document.getElementById('jps_e{{ session('editJPS') }}');
            @error('jenis_perawatan')
                jp.classList.add('is-invalid');
                jpse.append('@error('jenis_perawatan') {{ $message }} @enderror');
            @enderror
            jp.setAttribute('value', "{{ old('jenis_perawatan') }}");

            @php
                Illuminate\Support\Facades\Session::forget('editJPS');
            @endphp
        @elseif (session()->has('createJPS'))
            $(document).ready(function() {
                $('#createJPS').modal('show');
            });

            const jp = document.getElementById('jenis_perawatan');
            const jpse = document.getElementById('jps_e');
            @error('jenis_perawatan')
                jp.classList.add('is-invalid');
                jpse.append('@error('jenis_perawatan') {{ $message }} @enderror');
            @enderror
            jp.setAttribute('value', "{{ old('jenis_perawatan') }}");

            const tp = document.getElementById('tgl_perawatan');

            @php
                Illuminate\Support\Facades\Session::forget('createJPS');
            @endphp
        @endif
    </script>
@endpush
