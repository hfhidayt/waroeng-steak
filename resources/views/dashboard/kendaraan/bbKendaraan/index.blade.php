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
                <a href="#createBB" class="btn btn-success" data-bs-toggle="modal">Tambah Bahan Bakar</a>
                @include('dashboard.kendaraan.bbKendaraan.create')
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Bahan Bakar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bahan_bakar as $bb)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $bb->bahan_bakar }}</td>
                                <td class="text-center">
                                    <a href="#edit{{ $bb->id }}" class="btn btn-warning border-0" data-bs-toggle="modal">Edit</a>
                                    @include('dashboard.kendaraan.bbKendaraan.edit')
                                    <a href="#delete{{ $bb->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                                    @include('dashboard.kendaraan.bbKendaraan.delete')
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
        @if(session()->has('editBB'))
            $( document ).ready(function() {
                $('#edit{{ session("editBB") }}').modal('show');
            });

            const bb = document.getElementById('bahan_bakar{{ session("editBB") }}');
            const bbe = document.getElementById('bb_e{{ session("editBB") }}');
            @error('bahan_bakar')
                bb.classList.add('is-invalid');
                bbe.append('@error("bahan_bakar") {{ $message }} @enderror');
            @enderror
            bb.setAttribute('value', "{{ old('bahan_bakar') }}");

            @php
                Illuminate\Support\Facades\Session::forget('editBB')
            @endphp
        @elseif(session()->has('createBB'))
            $( document ).ready(function() {
                $('#createBB').modal('show');
            });

            const bb = document.getElementById('bahan_bakar');
            const bbe = document.getElementById('bb_e');
            @error('bahan_bakar')
                bb.classList.add('is-invalid');
                bbe.append('@error("bahan_bakar") {{ $message }} @enderror');
            @enderror
            bb.setAttribute('value', "{{ old('bahan_bakar') }}");

            const tp = document.getElementById('tgl_kendaraan');

            @php
                Illuminate\Support\Facades\Session::forget('createBB')
            @endphp
        @endif 
    </script>
@endpush