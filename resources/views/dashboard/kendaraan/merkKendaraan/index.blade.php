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
                <a href="/dashboard/kendaraan" class="btn btn-primary">Kembali</a>
                <a href="#createMK" class="btn btn-success" data-bs-toggle="modal">Tambah Merk Kendaraan</a>
                @include('dashboard.kendaraan.merkKendaraan.create')
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Merk Kendaraan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($merk as $mk)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $mk->merk }}</td>
                                <td class="text-center">
                                    <a href="#edit{{ $mk->id }}" class="btn btn-warning border-0" data-bs-toggle="modal">Edit</a>
                                    @include('dashboard.kendaraan.merkKendaraan.edit')
                                    <a href="#delete{{ $mk->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.kendaraan.merkKendaraan.delete')
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
        @if(session()->has('editMK'))
            $( document ).ready(function() {
                $('#edit{{ session("editMK") }}').modal('show');
            });

            const mk = document.getElementById('merk{{ session("editMK") }}');
            const mke = document.getElementById('mk_e{{ session("editMK") }}');
            @error('merk')
                mk.classList.add('is-invalid');
                mke.append('@error("merk") {{ $message }} @enderror');
            @enderror
            // mk.setAttribute('value', "{{ old('merk') }}");

            @php
                Illuminate\Support\Facades\Session::forget('editMK')
            @endphp
        @elseif(session()->has('createMK'))
            $( document ).ready(function() {
                $('#createMK').modal('show');
            });

            const mk = document.getElementById('merk');
            const mke = document.getElementById('mk_e');
            @error('merk')
                mk.classList.add('is-invalid');
                mke.append('@error("merk") {{ $message }} @enderror');
            @enderror
            // mk.setAttribute('value', "{{ old('merk') }}");

            const tp = document.getElementById('tgl_kendaraan');

            @php
                Illuminate\Support\Facades\Session::forget('createMK')
            @endphp
        @endif 
    </script>
@endpush