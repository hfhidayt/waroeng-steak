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
                <a href="#createJK" class="btn btn-success" data-bs-toggle="modal">Tambah Jenis Kendaraan</a>
                @include('dashboard.kendaraan.jenisKendaraan.create')
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Kendaraan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jenis_kendaraan as $jk)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $jk->jenis_kendaraan }}</td>
                                <td class="text-center">
                                    <a href="#edit{{ $jk->id }}" class="btn btn-warning border-0" data-bs-toggle="modal">Edit</a>
                                    @include('dashboard.kendaraan.jenisKendaraan.edit')
                                    <a href="#delete{{ $jk->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.kendaraan.jenisKendaraan.delete')
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
        @if(session()->has('editJK'))
            $( document ).ready(function() {
                $('#edit{{ session("editJK") }}').modal('show');
            });

            const jk = document.getElementById('jenis_kendaraan{{ session("editJK") }}');
            const jke = document.getElementById('jk_e{{ session("editJK") }}');
            @error('jenis_kendaraan')
                jk.classList.add('is-invalid');
                jke.append('@error("jenis_kendaraan") {{ $message }} @enderror');
            @enderror
            jk.setAttribute('value', "{{ old('jenis_kendaraan') }}");

            @php
                Illuminate\Support\Facades\Session::forget('editJK')
            @endphp
        @elseif(session()->has('createJK'))
            $( document ).ready(function() {
                $('#createJK').modal('show');
            });

            const jk = document.getElementById('jenis_kendaraan');
            const jke = document.getElementById('jk_e');
            @error('jenis_kendaraan')
                jk.classList.add('is-invalid');
                jke.append('@error("jenis_kendaraan") {{ $message }} @enderror');
            @enderror
            jk.setAttribute('value', "{{ old('jenis_kendaraan') }}");

            const tp = document.getElementById('tgl_kendaraan');

            @php
                Illuminate\Support\Facades\Session::forget('createJK')
            @endphp
        @endif 
    </script>
@endpush