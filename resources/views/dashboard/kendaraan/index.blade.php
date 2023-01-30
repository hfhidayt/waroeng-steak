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
                <a href="#createP" class="btn btn-success" data-bs-toggle="modal">Pembelian Kendaraan</a>
            </div>
        </div>
        <div class="row">
            <div class="col mx-4 my-3">
                <table class="table" id="table_id">
                    <thead class="table-dark dt-head-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Wilayah</th>
                            <th scope="col">Plat</th>
                            <th scope="col">Jenis/Merk</th>
                            <th scope="col">Atas Nama</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($kendaraans as $k)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->wilayah }}</td>
                                <td>{{ $k->no_plat }}</td>
                                <td>{{ $k->jenis_merk }}</td>
                                <td>{{ $k->atas_nama }}</td>
                                <td>{{ $k->keterangan }}</td>
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
    </div>
@endsection
@push('script')
    <script>
        @if(session()->has('create'))
            $( document ).ready(function() {
                $('#create').modal('show');
            });
            @error('wilayah')
                const c = document.getElementById('aa');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('wilayah') }}");
            @enderror
            @error('no_plat')
                const c = document.getElementById('bb');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_plat') }}");
            @enderror
            @error('jenis_kendaraan')
                const c = document.getElementById('cc');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('jenis_kendaraan') }}");
            @enderror
            @error('no_rangka')
                const c = document.getElementById('dd');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_rangka') }}");
            @enderror
            @error('no_mesin')
                const c = document.getElementById('ee');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_mesin') }}");
            @enderror
            @error('no_bpkb')
                const c = document.getElementById('ff');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_bpkb') }}");
            @enderror
            @error('atas_nama')
                const c = document.getElementById('gg');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('atas_nama') }}");
            @enderror
            @error('tahun')
                const c = document.getElementById('hh');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('tahun') }}");
            @enderror
            @error('warna')
                const c = document.getElementById('ii');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('warna') }}");
            @enderror
            @error('jenis_merk')
                const c = document.getElementById('jj');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('jenis_merk') }}");
            @enderror
            @error('posisi_kendaraan')
                const c = document.getElementById('kk');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('posisi_kendaraan') }}");
            @enderror
            @error('pajak')
                const c = document.getElementById('ll');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('pajak') }}");
            @enderror
            @error('ganti_plat')
                const c = document.getElementById('mm');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('ganti_plat') }}");
            @enderror
            @error('keterangan')
                const c = document.getElementById('nn');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('keterangan') }}");
            @enderror
            const a = document.getElementById('a');
            a.append('@error("wilayah") {{ $message }} @enderror');
            const b = document.getElementById('b');
            b.append('@error("no_plat") {{ $message }} @enderror');
            const c = document.getElementById('c');
            c.append('@error("jenis_kendaraan") {{ $message }} @enderror');
            const d = document.getElementById('d');
            d.append('@error("no_rangka") {{ $message }} @enderror');
            const e = document.getElementById('e');
            e.append('@error("no_mesin") {{ $message }} @enderror');
            const f = document.getElementById('f');
            f.append('@error("no_bpkb") {{ $message }} @enderror');
            const g = document.getElementById('g');
            g.append('@error("atas_nama") {{ $message }} @enderror');
            const h = document.getElementById('h');
            h.append('@error("tahun") {{ $message }} @enderror');
            const i = document.getElementById('i');
            i.append('@error("warna") {{ $message }} @enderror');
            const j = document.getElementById('j');
            j.append('@error("jenis_merk") {{ $message }} @enderror');
            const k = document.getElementById('k');
            k.append('@error("posisi_kendaraan") {{ $message }} @enderror');
            const l = document.getElementById('l');
            l.append('@error("pajak") {{ $message }} @enderror');
            const m = document.getElementById('m');
            m.append('@error("ganti_plat") {{ $message }} @enderror');
            const n = document.getElementById('n');
            n.append('@error("keterangan") {{ $message }} @enderror');
        @endif
        @if(session()->has('editId'))
            $( document ).ready(function() {
                $('#edit{{ session("editId") }}').modal('show');
            });
            @error('wilayah')
                const c = document.getElementById('aa{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('wilayah') }}");
            @enderror
            @error('no_plat')
                const c = document.getElementById('bb{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_plat') }}");
            @enderror
            @error('jenis_kendaraan')
                const c = document.getElementById('cc{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('jenis_kendaraan') }}");
            @enderror
            @error('no_rangka')
                const c = document.getElementById('dd{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_rangka') }}");
            @enderror
            @error('no_mesin')
                const c = document.getElementById('ee{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_mesin') }}");
            @enderror
            @error('no_bpkb')
                const c = document.getElementById('ff{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_bpkb') }}");
            @enderror
            @error('atas_nama')
                const c = document.getElementById('gg{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('atas_nama') }}");
            @enderror
            @error('tahun')
                const c = document.getElementById('hh{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('tahun') }}");
            @enderror
            @error('warna')
                const c = document.getElementById('ii{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('warna') }}");
            @enderror
            @error('jenis_merk')
                const c = document.getElementById('jj{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('jenis_merk') }}");
            @enderror
            @error('posisi_kendaraan')
                const c = document.getElementById('kk{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('posisi_kendaraan') }}");
            @enderror
            @error('pajak')
                const c = document.getElementById('ll{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('pajak') }}");
            @enderror
            @error('ganti_plat')
                const c = document.getElementById('mm{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('ganti_plat') }}");
            @enderror
            @error('keterangan')
                const c = document.getElementById('nn{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('keterangan') }}");
            @enderror
            const a = document.getElementById('a{{ session("editId") }}');
            a.append('@error("wilayah") {{ $message }} @enderror');
            const b = document.getElementById('b{{ session("editId") }}');
            b.append('@error("no_plat") {{ $message }} @enderror');
            const c = document.getElementById('c{{ session("editId") }}');
            c.append('@error("jenis_kendaraan") {{ $message }} @enderror');
            const d = document.getElementById('d{{ session("editId") }}');
            d.append('@error("no_rangka") {{ $message }} @enderror');
            const e = document.getElementById('e{{ session("editId") }}');
            e.append('@error("no_mesin") {{ $message }} @enderror');
            const f = document.getElementById('f{{ session("editId") }}');
            f.append('@error("no_bpkb") {{ $message }} @enderror');
            const g = document.getElementById('g{{ session("editId") }}');
            g.append('@error("atas_nama") {{ $message }} @enderror');
            const h = document.getElementById('h{{ session("editId") }}');
            h.append('@error("tahun") {{ $message }} @enderror');
            const i = document.getElementById('i{{ session("editId") }}');
            i.append('@error("warna") {{ $message }} @enderror');
            const j = document.getElementById('j{{ session("editId") }}');
            j.append('@error("jenis_merk") {{ $message }} @enderror');
            const k = document.getElementById('k{{ session("editId") }}');
            k.append('@error("posisi_kendaraan") {{ $message }} @enderror');
            const l = document.getElementById('l{{ session("editId") }}');
            l.append('@error("pajak") {{ $message }} @enderror');
            const m = document.getElementById('m{{ session("editId") }}');
            m.append('@error("ganti_plat") {{ $message }} @enderror');
            const n = document.getElementById('n{{ session("editId") }}');
            n.append('@error("keterangan") {{ $message }} @enderror');
        @endif
    </script>
@endpush
