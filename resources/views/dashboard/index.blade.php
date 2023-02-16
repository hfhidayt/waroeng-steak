@extends('layouts.main')
@section('wrapper')
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>
    @include('partials.navbar')
    @include('partials.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $kendaraan }}</h3>
                                <p>Total Kendaraan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/dashboard/kendaraan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $user }}</h3>
                                <p>Total Akun User</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="/dashboard/akun" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3 class="totalbiaya" id="totalbiaya">Rp {{ $perawatan }}</h3>
                                <p>Total Biaya Perawatan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="/dashboard/laporan/perawatan/kendaraan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <div class="col">
                        <div class="judul">
                            <h2>INFORMASI BIAYA PERAWATAN SELURUH KENDARAAN PT WAROENG STEAK</h2>
                        </div>
                        <div class="row">
                            <!-- Left col -->
                            <section class="col-lg-4 connectedSortable">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">FILTER</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="col my-3" id="filters">
                                            <div class="mb-3">
                                                <label class="form-label" for="jk1">Jumlah Kendaraan</label>
                                                <input type="text" class="form-control" name="jk1" id="jk1" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="jp1">Jenis Perawatan</label>
                                                {{-- <span id="jp1"></span> --}}
                                                <select class="form-select" name="jp1" id="jp1">
                                                    <option value="">Jenis Perawatan</option>
                                                    @foreach ($jenis_perawatan as $jp)
                                                        <option value="{{ $jp->jenis_perawatan }}">{{ $jp->jenis_perawatan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="pb1">Pilih Bulan</label>
                                                <select class="form-select" name="pb1" id="pb1">
                                                    <option value="">Bulan</option>
                                                    <option value="Januari">Januari</option>
                                                    <option value="Februari">Februari</option>
                                                    <option value="Maret">Maret</option>
                                                    <option value="April">April</option>
                                                    <option value="Mei">Mei</option>
                                                    <option value="Juni">Juni</option>
                                                    <option value="Juli">Juli</option>
                                                    <option value="Agustus">Agustus</option>
                                                    <option value="September">September</option>
                                                    <option value="Oktober">Oktober</option>
                                                    <option value="November">November</option>
                                                    <option value="Desember">Desember</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="pt1">Pilih Tahun</label>
                                                <select class="form-select" name="pt1" id="pt1">
                                                    <option value="">Tahun</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="t1">Total</label>
                                                <input type="text" class="form-control" name="t1" id="t1" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </section>
                            <!-- /.Left col -->
                            <!-- right col (We are only adding the ID to make the widgets sortable)-->
                            <section class="col-lg-8 connectedSortable">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-chart-bar mr-1"></i>
                                            <span id="chart-jenis"></span> Tahun <span id="chart-tahun"></span>
                                        </h3>
                                    </div><!-- /.card-header -->
                                    <div class="card-body" id="table_chart1">
                                        <div class="tab-content p-0" id="canvas-container">
                                            <!-- Morris chart - Sales -->
                                            {{-- <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                                            </div> --}}
                                            {{-- <canvas id="perawatan-chart-canvas"></canvas> --}}
                                            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: auto;">
                                                <canvas id="perawatan-chart-canvas"></canvas>
                                            </div>
                                            {{-- <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                                <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </section>
                            <!-- right col -->
                        </div>
                    </div>
                </div>

                <!-- /.row (second main row) -->
                <div class="row">
                    <div class="col">
                        <div class="judul">
                            <h2>INFORMASI BIAYA PERAWATAN PER KENDARAAN PT WAROENG STEAK</h2>
                        </div>
                        <div class="row">
                            <!-- Left col -->
                            <section class="col-lg-4 connectedSortable">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">FILTER</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="col my-3" id="filters2">
                                            <div class="mb-3">
                                                <label class="form-label" for="jp2">Jenis Perawatan</label>
                                                <select class="form-select" name="jp2" id="jp2">
                                                    <option value="">Jenis Perawatan</option>
                                                    @foreach ($jenis_perawatan as $jp)
                                                        <option value="{{ $jp->jenis_perawatan }}">{{ $jp->jenis_perawatan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="np2">Pilih No. Plat Kendaraan</label>
                                                <select class="form-select" name="np2" id="np2">
                                                    <option value="">No. Plat</option>
                                                    @foreach ($kendaraans as $k)
                                                        <option value="{{ $k->id }}">{{ $k->no_plat }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="pb2">Pilih Bulan</label>
                                                <select class="form-select" name="pb2" id="pb2">
                                                    <option value="">Bulan</option>
                                                    <option value="Januari">Januari</option>
                                                    <option value="Februari">Februari</option>
                                                    <option value="Maret">Maret</option>
                                                    <option value="April">April</option>
                                                    <option value="Mei">Mei</option>
                                                    <option value="Juni">Juni</option>
                                                    <option value="Juli">Juli</option>
                                                    <option value="Agustus">Agustus</option>
                                                    <option value="September">September</option>
                                                    <option value="Oktober">Oktober</option>
                                                    <option value="November">November</option>
                                                    <option value="Desember">Desember</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="pt2">Pilih Tahun</label>
                                                <select class="form-select" name="pt2" id="pt2">
                                                    <option value="">Tahun</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="t2">Total</label>
                                                <input type="text" class="form-control" name="t2" id="t2" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </section>
                            <!-- /.Left col -->

                            <!-- right col (We are only adding the ID to make the widgets sortable)-->
                            <section class="col-lg-8 connectedSortable">
                                <!-- chart 2-->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title text-center">
                                            <i class="fas fa-chart-bar mr-1"></i>
                                            <span id="chart-header-jenis"></span> Kendaraan <span id="chart-header-no-plat"></span>
                                        </h3>
                                    </div><!-- /.card-header -->
                                    <div class="card-body" id="table_chart2">
                                        <div class="tab-content p-0" id="canvas-kendaraan">
                                            <!-- Morris chart - Sales -->
                                            {{-- <canvas id="kendaraan-chart-canvas"></canvas> --}}
                                            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: auto;">
                                                <canvas id="kendaraan-chart-canvas"></canvas>
                                            </div>
                                            {{-- <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                                <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </section>
                            <!-- right col -->

                            <section class="col-lg-7 connectedSortable">
                                <!-- identitas kendaraan-->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">IDENTITAS KENDARAAN</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <!-- data kendaraan -->
                                        <div class="row">
                                            {{-- kolom 1 --}}
                                            <div class="col-6">
                                                {{-- <div class="mb-3">
                                                    <label for="no_plat" class="form-label">Nomor Plat</label>
                                                    <select class="form-select" name="no_plat" id="no_plat">
                                                        <option value="">No. Plat</option>
                                                        @foreach ($kendaraans as $k)
                                                            <option value="{{ $k->id }}">{{ $k->no_plat }}</option>
                                                        @endforeach
                                                    </select>
                                                </div> --}}
                                                <div class="mb-3">
                                                    <label for="wilayah" class="form-label">Wilayah</label>
                                                    <input type="text" class="form-control" id="wilayah" name="wilayah" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
                                                    <input type="text" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="no_rangka" class="form-label">Nomor Rangka</label>
                                                    <input type="text" class="form-control" id="no_rangka" name="no_rangka" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="no_mesin" class="form-label">Nomor Mesin</label>
                                                    <input type="text" class="form-control" id="no_mesin" name="no_mesin" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="no_bpkb" class="form-label">Nomor BPKB</label>
                                                    <input type="text" class="form-control" id="no_bpkb" name="no_bpkb" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="atas_nama" class="form-label">Atas Nama</label>
                                                    <input type="text" class="form-control" id="atas_nama" name="atas_nama" disabled>
                                                </div>
                                            </div>
                                            {{-- kolom 2 --}}
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="tahun" class="form-label">Tahun</label>
                                                    <input type="text" class="form-control" id="tahun" name="tahun" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="warna" class="form-label">Warna</label>
                                                    <input type="text" class="form-control" id="warna" name="warna" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bahan_bakar" class="form-label">Bahan Bakar</label>
                                                    <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="jenis_merk" class="form-label">Merk</label>
                                                    <input type="text" class="form-control" id="jenis_merk" name="jenis_merk" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pic" class="form-label">PIC</label>
                                                    <input type="text" class="form-control" id="pic" name="pic" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="posisi_kendaraan" class="form-label">Posisi Kendaraan</label>
                                                    <input type="text" class="form-control" id="posisi_kendaraan" name="posisi_kendaraan" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="tanggal_pajak" class="form-label">Tanggal Pajak</label>
                                                        </div>
                                                        <div class="col">
                                                            <label for="bulan_pajak" class="form-label">Bulan Pajak</label>
                                                        </div>
                                                        <div class="col">
                                                            <label for="tahun_pajak" class="form-label">Tahun Pajak</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="tanggal_pajak" id="tanggal_pajak" disabled>
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="bulan_pajak" id="bulan_pajak" disabled>
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="tahun_pajak" id="tahun_pajak" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="tanggal_ganti_plat" class="form-label">Tanggal Ganti Plat</label>
                                                        </div>
                                                        <div class="col">
                                                            <label for="bulan_ganti_plat" class="form-label">Bulan Ganti Plat</label>
                                                        </div>
                                                        <div class="col">
                                                            <label for="tahun_ganti_plat" class="form-label">Tahun Ganti Plat</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="tanggal_ganti_plat" id="tanggal_ganti_plat" disabled>
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="bulan_ganti_plat" id="bulan_ganti_plat" disabled>
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="tahun_ganti_plat" id="tahun_ganti_plat" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="keterangan" class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" name="keterangan" id="keterangan" disabled>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="surat_penanggung_jawab" class="form-label">Surat Penanggung Jawab</label>
                                                    <div class="col">
                                                        <a href="#" id="surat_penanggung_jawab">Lihat Surat Penanggung Jawab</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </section>

                            <section class="col-lg-5 connectedSortable">
                                <!-- gambar kendaraan -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">GAMBAR KENDARAAN</h3>
                                    </div><!-- /.card-header -->
                                    <div class="card-body" id="table_chart_2">
                                        <div class="row">
                                            <div class="col-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="gambar_depan" class="form-label">Gambar Depan</label>
                                                    <div><span id="gambar_depan"></span></div>
                                                    {{-- <br>
                                                    <img src="{{ asset('storage/' . $k->gambar_depan) }}"
                                                        class="img-preview img-fluid border border-dark mb-3" disabled> --}}
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="gambar_belakang" class="form-label">Gambar Belakang</label>
                                                    <div><span id="gambar_belakang"></span></div>
                                                    {{-- <br>
                                                    <img src="{{ asset('storage/' . $k->gambar_belakang) }}"
                                                        class="img-preview img-fluid border border-dark mb-3" disabled> --}}
                                                </div>
                                            </div>
                                            <div class="w-100 d-none d-md-block"></div>
                                            <div class="col-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="gambar_samping_kanan" class="form-label">Gambar Samping Kanan</label>
                                                    <div><span id="gambar_samping_kanan"></span></div>
                                                    {{-- <br>
                                                    <img src="{{ asset('storage/' . $k->gambar_samping_kanan) }}"
                                                        class="img-preview img-fluid border border-dark mb-3" disabled> --}}
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="gambar_samping_kiri" class="form-label">Gambar Samping Kiri</label>
                                                    <div><span id="gambar_samping_kiri"></span></div>
                                                    {{-- <br>
                                                    <img src="{{ asset('storage/' . $k->gambar_samping_kiri) }}"
                                                        class="img-preview img-fluid border border-dark mb-3" disabled> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </section>
                        </div>
                    </div>
                </div>
                <!-- /.row (second main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="d-none d-sm-inline-block float-right">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
@endsection
@push('script')
    <script src="{{ asset('dist/js/pages/dashboard.js') }}" id="json" data-kendaraan="{{ $kendaraans }}" data-perawatan="{{ $perawatans }}" data-jenis-perawatan="{{ $jenis_perawatan }}"></script>
    <script src="{{ asset('dist/js/pages/dashboard2.js') }}" id="json2" data-kendaraan="{{ $kendaraans }}" data-perawatan="{{ $perawatans }}" data-jenis-perawatan="{{ $jenis_perawatan }}"></script>
    {{-- <script src="{{ asset('dist/js/pages/dashboard3.js') }}" id="json3" data-kendaraan="{{ $kendaraans }}"></script> --}}
@endpush
