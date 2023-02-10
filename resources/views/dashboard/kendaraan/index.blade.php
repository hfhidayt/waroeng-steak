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
                {{-- <a href="#createP" class="btn btn-success" data-bs-toggle="modal">Tambah Pembelian Kendaraan</a>
                <a href="#createJ" class="btn btn-danger" data-bs-toggle="modal">Tambah Penjualan Kendaraan</a> --}}
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
                            <th scope="col">Jenis Kendaraan</th>
                            <th scope="col">PIC</th>
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

        // preview image update
        function previewGambarDepanEdit() {
            const image = document.querySelector('#gambar_depan_baru');
            const imgPreview = document.querySelector('.img-preview11');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            }
        }
        function previewGambarBelakangEdit() {
            const image = document.querySelector('#gambar_belakang_baru');
            const imgPreview = document.querySelector('.img-preview22');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            }
        }
        function previewGambarSampingKananEdit() {
            const image = document.querySelector('#gambar_samping_kanan_baru');
            const imgPreview = document.querySelector('.img-preview33');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            }
        }
        function previewGambarSampingKiriEdit   () {
            const image = document.querySelector('#gambar_samping_kiri_baru');
            const imgPreview = document.querySelector('.img-preview44');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            }
        }

        // error handling for create
        @if(session()->has('create'))
            $( document ).ready(function() {
                $('#create').modal('show');
            });
            @error('wilayah')
                const c = document.getElementById('inputWilayah');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('wilayah') }}");
            @enderror
            @error('no_plat')
                const c = document.getElementById('inputNomorPlat');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_plat') }}");
            @enderror
            @error('jenis_kendaraan')
                const c = document.getElementById('inputJenisKendaraan');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('jenis_kendaraan') }}");
            @enderror
            @error('no_rangka')
                const c = document.getElementById('inputNomorRangka');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_rangka') }}");
            @enderror
            @error('no_mesin')
                const c = document.getElementById('inputNomorMesin');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_mesin') }}");
            @enderror
            @error('no_bpkb')
                const c = document.getElementById('inputNomorBPKB');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_bpkb') }}");
            @enderror
            @error('atas_nama')
                const c = document.getElementById('inputAtasNama');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('atas_nama') }}");
            @enderror
            @error('tahun')
                const c = document.getElementById('inputTahun');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('tahun') }}");
            @enderror
            @error('warna')
                const c = document.getElementById('inputWarna');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('warna') }}");
            @enderror
            @error('jenis_merk')
                const c = document.getElementById('inputJenisMerk');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('jenis_merk') }}");
            @enderror
            @error('pic')
                const c = document.getElementById('inputPIC');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('pic') }}");
            @enderror
            @error('posisi_kendaraan')
                const c = document.getElementById('inputPosisiKendaraan');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('posisi_kendaraan') }}");
            @enderror
            @error('tanggal_pajak')
                const c = document.getElementById('inputTanggalPajak');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('tanggal_pajak') }}");
            @enderror
            @error('bulan_pajak')
                const c = document.getElementById('inputBulanPajak');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('bulan_pajak') }}");
            @enderror
            @error('tahun_pajak')
                const c = document.getElementById('inputTahunPajak');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('tahun_pajak') }}");
            @enderror
            @error('tanggal_ganti_plat')
                const c = document.getElementById('inputTanggalGantiPlat');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('tanggal_ganti_plat') }}");
            @enderror
            @error('bulan_ganti_plat')
                const c = document.getElementById('inputBulanGantiPlat');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('bulan_ganti_plat') }}");
            @enderror
            @error('tahun_ganti_plat')
                const c = document.getElementById('inputTahunGantiPlat');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('tahun_ganti_plat') }}");
            @enderror
            @error('keterangan')
                const c = document.getElementById('inputKeterangan');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('keterangan') }}");
            @enderror
            @error('surat_penanggung_jawab')
                const c = document.getElementById('inputSuratPenanggungJawab');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('surat_penanggung_jawab') }}");
            @enderror
            @error('gambar_depan')
                const c = document.getElementById('inputGambarDepan');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('gambar_depan') }}");
            @enderror
            @error('gambar_belakang')
                const c = document.getElementById('inputGambarBelakang');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('gambar_belakang') }}");
            @enderror
            @error('gambar_samping_kanan')
                const c = document.getElementById('inputGambarSampingKanan');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('gambar_samping_kanan') }}");
            @enderror
            @error('gambar_samping_kiri')
                const c = document.getElementById('inputGambarSampingKiri');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('gambar_samping_kiri') }}");
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
            k.append('@error("pic") {{ $message }} @enderror');
            const l = document.getElementById('l');
            l.append('@error("posisi_kendaraan") {{ $message }} @enderror');
            const m = document.getElementById('m');
            m.append('@error("tanggal_pajak") {{ $message }} @enderror');
            const n = document.getElementById('n');
            n.append('@error("bulan_pajak") {{ $message }} @enderror');
            const o = document.getElementById('o');
            o.append('@error("tahun_pajak") {{ $message }} @enderror');
            const p = document.getElementById('p');
            p.append('@error("tanggal_ganti_plat") {{ $message }} @enderror');
            const q = document.getElementById('q');
            q.append('@error("bulan_ganti_plat") {{ $message }} @enderror');
            const r = document.getElementById('r');
            r.append('@error("tahun_ganti_plat") {{ $message }} @enderror');
            const s = document.getElementById('s');
            s.append('@error("keterangan") {{ $message }} @enderror');
            const t = document.getElementById('t');
            t.append('@error("surat_penanggung_jawab") {{ $message }} @enderror');
            const u = document.getElementById('u');
            u.append('@error("gambar_depan") {{ $message }} @enderror');
            const v = document.getElementById('v');
            v.append('@error("gambar_belakang") {{ $message }} @enderror');
            const w = document.getElementById('w');
            w.append('@error("gambar_samping_kanan") {{ $message }} @enderror');
            const x = document.getElementById('x');
            x.append('@error("gambar_samping_kiri") {{ $message }} @enderror');
        @endif

        // error handling for edit
        @if(session()->has('editId'))
            $( document ).ready(function() {
                $('#edit{{ session("editId") }}').modal('show');
            });
            @error('wilayah')
                const c = document.getElementById('inputWilayah{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('wilayah') }}");
            @enderror
            @error('no_plat')
                const c = document.getElementById('inputNomorPlat{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_plat') }}");
            @enderror
            @error('jenis_kendaraan')
                const c = document.getElementById('inputJenisKendaraan{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('jenis_kendaraan') }}");
            @enderror
            @error('no_rangka')
                const c = document.getElementById('inputNomorRangka{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_rangka') }}");
            @enderror
            @error('no_mesin')
                const c = document.getElementById('inputNomorMesin{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_mesin') }}");
            @enderror
            @error('no_bpkb')
                const c = document.getElementById('inputNomorBPKB{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('no_bpkb') }}");
            @enderror
            @error('atas_nama')
                const c = document.getElementById('inputAtasNama{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('atas_nama') }}");
            @enderror
            @error('tahun')
                const c = document.getElementById('inputTahun{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('tahun') }}");
            @enderror
            @error('warna')
                const c = document.getElementById('inputWarna{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('warna') }}");
            @enderror
            @error('jenis_merk')
                const c = document.getElementById('inputJenisMerk{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('jenis_merk') }}");
            @enderror
            // @error('posisi_kendaraan')
            //     const c = document.getElementById('inputPIC{{ session("editId") }}');
            //     c.classList.add('is-invalid');
            //     c.setAttribute('value', "{{ old('posisi_kendaraan') }}");
            // @enderror
            // @error('pajak')
            //     const c = document.getElementById('inputPosisiKendaraan{{ session("editId") }}');
            //     c.classList.add('is-invalid');
            //     c.setAttribute('value', "{{ old('pajak') }}");
            // @enderror
            // @error('ganti_plat')
            //     const c = document.getElementById('inputTanggalPajak{{ session("editId") }}');
            //     c.classList.add('is-invalid');
            //     c.setAttribute('value', "{{ old('ganti_plat') }}");
            // @enderror
            // @error('keterangan')
            //     const c = document.getElementById('nn{{ session("editId") }}');
            //     c.classList.add('is-invalid');
            //     c.setAttribute('value', "{{ old('keterangan') }}");
            // @enderror
            @error('pic')
                const c = document.getElementById('inputPIC{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('pic') }}");
            @enderror
            @error('posisi_kendaraan')
                const c = document.getElementById('inputPosisiKendaraan{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('posisi_kendaraan') }}");
            @enderror
            @error('tanggal_pajak')
                const c = document.getElementById('inputTanggalPajak{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('tanggal_pajak') }}");
            @enderror
            @error('bulan_pajak')
                const c = document.getElementById('inputBulanPajak{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('bulan_pajak') }}");
            @enderror
            @error('tahun_pajak')
                const c = document.getElementById('inputTahunPajak{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('tahun_pajak') }}");
            @enderror
            @error('tanggal_ganti_plat')
                const c = document.getElementById('inputTanggalGantiPlat{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('tanggal_ganti_plat') }}");
            @enderror
            @error('bulan_ganti_plat')
                const c = document.getElementById('inputBulanGantiPlat{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('bulan_ganti_plat') }}");
            @enderror
            @error('tahun_ganti_plat')
                const c = document.getElementById('inputTahunGantiPlat{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('tahun_ganti_plat') }}");
            @enderror
            @error('keterangan')
                const c = document.getElementById('inputKeterangan{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('keterangan') }}");
            @enderror
            @error('surat_penanggung_jawab')
                const c = document.getElementById('inputSuratPenanggungJawab{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('surat_penanggung_jawab') }}");
            @enderror
            @error('gambar_depan')
                const c = document.getElementById('inputGambarDepan{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('gambar_depan') }}");
            @enderror
            @error('gambar_belakang')
                const c = document.getElementById('inputGambarBelakang{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('gambar_belakang') }}");
            @enderror
            @error('gambar_samping_kanan')
                const c = document.getElementById('inputGambarSampingKanan{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('gambar_samping_kanan') }}");
            @enderror
            @error('gambar_samping_kiri')
                const c = document.getElementById('inputGambarSampingKiri{{ session("editId") }}');
                c.classList.add('is-invalid');
                c.setAttribute('value', "{{ old('gambar_samping_kiri') }}");
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
            k.append('@error("pic") {{ $message }} @enderror');
            const l = document.getElementById('l{{ session("editId") }}');
            l.append('@error("posisi_kendaraan") {{ $message }} @enderror');
            const m = document.getElementById('m{{ session("editId") }}');
            m.append('@error("tanggal_pajak") {{ $message }} @enderror');
            const n = document.getElementById('n{{ session("editId") }}');
            n.append('@error("bulan_pajak") {{ $message }} @enderror');
            const o = document.getElementById('o{{ session("editId") }}');
            o.append('@error("tahun_pajak") {{ $message }} @enderror');
            const p = document.getElementById('p{{ session("editId") }}');
            p.append('@error("tanggal_ganti_plat") {{ $message }} @enderror');
            const q = document.getElementById('q{{ session("editId") }}');
            q.append('@error("bulan_ganti_plat") {{ $message }} @enderror');
            const r = document.getElementById('r{{ session("editId") }}');
            r.append('@error("tahun_ganti_plat") {{ $message }} @enderror');
            const s = document.getElementById('s{{ session("editId") }}');
            s.append('@error("keterangan") {{ $message }} @enderror');
            const t = document.getElementById('t{{ session("editId") }}');
            t.append('@error("surat_penanggung_jawab") {{ $message }} @enderror');
            const u = document.getElementById('u{{ session("editId") }}');
            u.append('@error("gambar_depan") {{ $message }} @enderror');
            const v = document.getElementById('v{{ session("editId") }}');
            v.append('@error("gambar_belakang") {{ $message }} @enderror');
            const w = document.getElementById('w{{ session("editId") }}');
            w.append('@error("gambar_samping_kanan") {{ $message }} @enderror');
            const x = document.getElementById('x{{ session("editId") }}');
            x.append('@error("gambar_samping_kiri") {{ $message }} @enderror');
        @endif
    </script>
@endpush
