<?php

namespace Database\Seeders;

use App\Models\BahanBakar;
use App\Models\JenisKendaraan;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kendaraan;
use App\Models\Perawatan;
use App\Models\JenisPerawatan;
use App\Models\Merk;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::Create([
            'username' => 'admin',
            'password' => Hash::make('admin')
        ]);
        
        User::Create([
            'username' => 'aziz',
            'password' => Hash::make('aziz')
        ]);
        
        User::Create([
            'username' => 'faris',
            'password' => Hash::make('faris')
        ]);
        
        User::Create([
            'username' => 'hassan',
            'password' => Hash::make('hassan')
        ]);

        Merk::Create([
            'merk' => 'Toyota'
        ]);
        
        Merk::Create([
            'merk' => 'Suzuki'
        ]);
        
        Merk::Create([
            'merk' => 'Honda'
        ]);
        
        Merk::Create([
            'merk' => 'Yamaha'
        ]);
        
        Merk::Create([
            'merk' => 'Mitsubishi'
        ]);

        BahanBakar::Create([
            'bahan_bakar' => 'Bensin'
        ]);
        
        BahanBakar::Create([
            'bahan_bakar' => 'Solar'
        ]);
        
        BahanBakar::Create([
            'bahan_bakar' => 'Listrik'
        ]);
        
        BahanBakar::Create([
            'bahan_bakar' => 'Pertalite'
        ]);
        
        BahanBakar::Create([
            'bahan_bakar' => 'Pertamax'
        ]);
        
        BahanBakar::Create([
            'bahan_bakar' => 'Pertamax Dex'
        ]);
        
        BahanBakar::Create([
            'bahan_bakar' => 'Pertamax Turbo'
        ]);

        JenisKendaraan::Create([
            'jenis_kendaraan' => 'Motor'
        ]);
        
        JenisKendaraan::Create([
            'jenis_kendaraan' => 'Mobil'
        ]);
        
        JenisKendaraan::Create([
            'jenis_kendaraan' => 'Minibus'
        ]);
        
        JenisKendaraan::Create([
            'jenis_kendaraan' => 'Box'
        ]);
        
        JenisPerawatan::Create([
            'jenis_perawatan' => 'Pengisian BBM'
        ]);
        
        JenisPerawatan::Create([
            'jenis_perawatan' => 'Servis Rutin'
        ]);
        
        JenisPerawatan::Create([
            'jenis_perawatan' => 'Perbaikan'
        ]);
        
        JenisPerawatan::Create([
            'jenis_perawatan' => 'Pergantian'
        ]);
        
        JenisPerawatan::Create([
            'jenis_perawatan' => 'Bayar Pajak Tahunan'
        ]);
        
        JenisPerawatan::Create([
            'jenis_perawatan' => 'Bayar Pajak 5 Tahunan'
        ]);

        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 8561 ZZ',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MR0AS12G2E0015106',
        //     'no_mesin'=>'2KDS400745',
        //     'no_bpkp'=>'P02819557',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2014',
        //     'warna'=>'HITAM METALIK',
        //     'jenis_merk'=>'BOX/TOYOTA HILUX',
        //     'posisi_kendaraan'=>'DAPUR PRODUKSI',
        //     'pic'=>'DAPUR PRODUKSI',
        //     'tanggal_pajak' => '13',
        //     'bulan_pajak' => 'Desember',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '13',
        //     'bulan_ganti_plat' => 'Desember',
        //     'tahun_ganti_plat' => '2024',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>'SEKEN '
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 8977 CU',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MHMFE71PCFK006192',
        //     'no_mesin'=>'4D34TL82513',
        //     'no_bpkp'=>'N - 10691728',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2015',
        //     'warna'=>'HITAM KOMBINASI',
        //     'jenis_merk'=>'MITSHUBISHI TRUCK',
        //     'posisi_kendaraan'=>'FOODTRUCK tyok',
        //     'pic'=>'FOODTRUCK tyok',
        //     'tanggal_pajak' => '06',
        //     'bulan_pajak' => 'November',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '06',
        //     'bulan_ganti_plat' => 'November',
        //     'tahun_ganti_plat' => '2025',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>'BARU'
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 8225 FU',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MHKP3CA1JHK145770',
        //     'no_mesin'=>'3SZDGH7042',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2017',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'BOX/DHAIHATSU',
        //     'posisi_kendaraan'=>'WH',
        //     'pic'=>'WH',
        //     'tanggal_pajak' => '22',
        //     'bulan_pajak' => 'September',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '22',
        //     'bulan_ganti_plat' => 'September',
        //     'tahun_ganti_plat' => '2027',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>'BARU'
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1875 HY',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MHBG3CG1CHJ048973',
        //     'no_mesin'=>'HR15738763T',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2017',
        //     'warna'=>'PUTIH',
        //     'jenis_merk'=>'NISSAN LIVINA',
        //     'posisi_kendaraan'=>'Kantor Deresan/Operasional',
        //     'pic'=>'Kantor Deresan/Operasional',
        //     'tanggal_pajak' => '27',
        //     'bulan_pajak' => 'Februari',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '27',
        //     'bulan_ganti_plat' => 'Februari',
        //     'tahun_ganti_plat' => '2027',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>'BARU'
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 8662 FU',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MHKB3BA1JJK048123',
        //     'no_mesin'=>'K3MH15470',
        //     'no_bpkp'=>'NO 007816848',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2018',
        //     'warna'=>'PUTIH',
        //     'jenis_merk'=>'BOX/DHAIHATSU',
        //     'posisi_kendaraan'=>'PURCASING',
        //     'pic'=>'PURCASING',
        //     'tanggal_pajak' => '05',
        //     'bulan_pajak' => 'Februari',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '05',
        //     'bulan_ganti_plat' => 'Februari',
        //     'tahun_ganti_plat' => '2023',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>'BARU'
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 5936 TX',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MH1KF4119KK440399',
        //     'no_mesin'=>'KF41E1441223',
        //     'no_bpkp'=>'P-01819852',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2019',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'HONDA VARIO 150',
        //     'posisi_kendaraan'=>'ENDANG CATUR',
        //     'pic'=>'ENDANG CATUR',
        //     'tanggal_pajak' => '15',
        //     'bulan_pajak' => 'Maret',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '15',
        //     'bulan_ganti_plat' => 'Maret',
        //     'tahun_ganti_plat' => '2024',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>'BARU'
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 5929 TX',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MH1KF4116KK452476',
        //     'no_mesin'=>'KF41E1453282',
        //     'no_bpkp'=>'P-01819846',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2019',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'HONDA VARIO 150         ',
        //     'posisi_kendaraan'=>'MARIA',
        //     'pic'=>'MARIA',
        //     'tanggal_pajak' => '15',
        //     'bulan_pajak' => 'Maret',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '15',
        //     'bulan_ganti_plat' => 'Maret',
        //     'tahun_ganti_plat' => '2024',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>'BARU'
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 6810 LX',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'',
        //     'no_mesin'=>'JFZ2E1722347',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2019',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'BEAT SCREAT HITAM',
        //     'posisi_kendaraan'=>'Kantor Deresan/Owner',
        //     'pic'=>'Kantor Deresan/Owner',
        //     'tanggal_pajak' => '17',
        //     'bulan_pajak' => 'Januari',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '17',
        //     'bulan_ganti_plat' => 'Januari',
        //     'tahun_ganti_plat' => '2025',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 4409 UR',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MH3SE88H0MJ265007',
        //     'no_mesin'=>'E3R2E2898815',
        //     'no_bpkp'=>'R01853172',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2021',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'YAMAHA MIO',
        //     'posisi_kendaraan'=>'KANTOR JOGJA/MARKETING',
        //     'pic'=>'KANTOR JOGJA/MARKETING',
        //     'tanggal_pajak' => '12',
        //     'bulan_pajak' => 'Agustus',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '12',
        //     'bulan_ganti_plat' => 'Agustus',
        //     'tahun_ganti_plat' => '2026',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 3293 MO',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MHIKF2113KK225086',
        //     'no_mesin'=>'KF21E1224318',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2019',
        //     'warna'=>'PUTIH',
        //     'jenis_merk'=>'HONDA PCX',
        //     'posisi_kendaraan'=>'PRODUKSI/IYAN',
        //     'pic'=>'PRODUKSI/IYAN',
        //     'tanggal_pajak' => '23',
        //     'bulan_pajak' => 'September',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '23',
        //     'bulan_ganti_plat' => 'September',
        //     'tahun_ganti_plat' => '2024',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>'BARU'
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 7812 HN',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'JTFSS22P0K0186609',
        //     'no_mesin'=>'2KDB007701',
        //     'no_bpkp'=>'P06818696',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2019',
        //     'warna'=>'PUTIH',
        //     'jenis_merk'=>'MOBIL HIACE ',
        //     'posisi_kendaraan'=>'Kantor Deresan/Pesantren Subar ARIP',
        //     'pic'=>'Kantor Deresan/Pesantren Subar ARIP',
        //     'tanggal_pajak' => '29',
        //     'bulan_pajak' => 'Oktober',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '29',
        //     'bulan_ganti_plat' => 'Oktober',
        //     'tahun_ganti_plat' => '2023',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1038 EO',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MK2NDWTARKJ0006437',
        //     'no_mesin'=>'4A91HK1046',
        //     'no_bpkp'=>'R-01087845',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2020',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'MOBIL LIVINA VL',
        //     'posisi_kendaraan'=>'Kantor Deresan/Operasional',
        //     'pic'=>'Kantor Deresan/Operasional',
        //     'tanggal_pajak' => '01',
        //     'bulan_pajak' => 'November',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '01',
        //     'bulan_ganti_plat' => 'November',
        //     'tahun_ganti_plat' => '2025',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1595 NP',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'',
        //     'no_mesin'=>'',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2020',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'MOBIL TOYOTA VOXY HITAM',
        //     'posisi_kendaraan'=>'Kantor Deresan/Owner',
        //     'pic'=>'Kantor Deresan/Owner',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1923 EO',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MK2NDWTARKJ002528',
        //     'no_mesin'=>'4A91HD9200',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2021',
        //     'warna'=>'PUTIH',
        //     'jenis_merk'=>'MOBIL NISSAN LIVINA SVE AT',
        //     'posisi_kendaraan'=>'Kantor Deresan/ OWNER',
        //     'pic'=>'Kantor Deresan/ OWNER',
        //     'tanggal_pajak' => '21',
        //     'bulan_pajak' => 'Januari',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '21',
        //     'bulan_ganti_plat' => 'Januari',
        //     'tahun_ganti_plat' => '2027',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1049 NO',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'',
        //     'no_mesin'=>'',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2021',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'MOBIL BRIO E CVT',
        //     'posisi_kendaraan'=>'Kantor Deresan/Agung Priono',
        //     'pic'=>'Kantor Deresan/Agung Priono',
        //     'tanggal_pajak' => '21',
        //     'bulan_pajak' => 'Januari',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '21',
        //     'bulan_ganti_plat' => 'Januari',
        //     'tahun_ganti_plat' => '2026',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1560 EP',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'',
        //     'no_mesin'=>'',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2021',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'MOBIL MOBILIO (A)',
        //     'posisi_kendaraan'=>'Kantor Deresan/Agus Wawan',
        //     'pic'=>'Kantor Deresan/Agus Wawan',
        //     'tanggal_pajak' => '15',
        //     'bulan_pajak' => 'April',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '15',
        //     'bulan_ganti_plat' => 'April',
        //     'tahun_ganti_plat' => '2026',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>'Baru'
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1924 EP',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'',
        //     'no_mesin'=>'',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2021',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'MOBIL BRV (A)',
        //     'posisi_kendaraan'=>'Kantor Deresan/ Riyanto',
        //     'pic'=>'Kantor Deresan/ Riyanto',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1847 EO',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MHRDD1850MJ100223',
        //     'no_mesin'=>'L12B34300303',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2021',
        //     'warna'=>'PUTIH',
        //     'jenis_merk'=>'MOBIL OPERASIONAL BRIO E CVT',
        //     'posisi_kendaraan'=>'Kantor Deresan/Heri Setiawan',
        //     'pic'=>'Kantor Deresan/Heri Setiawan',
        //     'tanggal_pajak' => '06',
        //     'bulan_pajak' => 'Februari',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '06',
        //     'bulan_ganti_plat' => 'Februari',
        //     'tahun_ganti_plat' => '2026',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>'Baru'
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1015 EV',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MHRDD1850MJ109267',
        //     'no_mesin'=>'L12B34325390',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2021',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'MOBIL BRIO E CVT HITAM ',
        //     'posisi_kendaraan'=>'Kantor Deresan/Darwoto',
        //     'pic'=>'Kantor Deresan/Darwoto',
        //     'tanggal_pajak' => '24',
        //     'bulan_pajak' => 'Agustus',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '24',
        //     'bulan_ganti_plat' => 'Agustus',
        //     'tahun_ganti_plat' => '2026',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1266 NO',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'',
        //     'no_mesin'=>'',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2021',
        //     'warna'=>'SILVER',
        //     'jenis_merk'=>'MOBIL TOYOTA VELOZ 1.5 Q CVT TSS',
        //     'posisi_kendaraan'=>'Kantor Deresan/Utsd Danin',
        //     'pic'=>'Kantor Deresan/Utsd Danin',
        //     'tanggal_pajak' => '03',
        //     'bulan_pajak' => 'Desember',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '03',
        //     'bulan_ganti_plat' => 'Desember',
        //     'tahun_ganti_plat' => '2026',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1820 NO',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MHKA6GK6JM612096',
        //     'no_mesin'=>'3NRH627298',
        //     'no_bpkp'=>'RO1895822',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2021',
        //     'warna'=>'GREY METALIK',
        //     'jenis_merk'=>'MOBIL TOYOTA CALYA ',
        //     'posisi_kendaraan'=>'Kantor Deresan/Muh Suyitno',
        //     'pic'=>'Kantor Deresan/Muh Suyitno',
        //     'tanggal_pajak' => '11',
        //     'bulan_pajak' => 'Januari',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '11',
        //     'bulan_ganti_plat' => 'Januari',
        //     'tahun_ganti_plat' => '2027',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1819 NO',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MHKA6GK6JM062323',
        //     'no_mesin'=>'3NRH640787',
        //     'no_bpkp'=>'RO1895821',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2021',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'MOBIL TOYOTA CALYA ',
        //     'posisi_kendaraan'=>'Kantor Deresan/Ibnu Asakir',
        //     'pic'=>'Kantor Deresan/Ibnu Asakir',
        //     'tanggal_pajak' => '12',
        //     'bulan_pajak' => 'Januari',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '12',
        //     'bulan_ganti_plat' => 'Januari',
        //     'tahun_ganti_plat' => '2027',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1817 NO',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'MHKA6GK6JMJ06384',
        //     'no_mesin'=>'3NRH641529',
        //     'no_bpkp'=>'RO1895820',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2021',
        //     'warna'=>'PUTIH',
        //     'jenis_merk'=>'MOBIL TOYOTA CALYA 1.2 G',
        //     'posisi_kendaraan'=>'Kantor Deresan/Afifundin',
        //     'pic'=>'Kantor Deresan/Afifundin',
        //     'tanggal_pajak' => '13',
        //     'bulan_pajak' => 'Januari',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '13',
        //     'bulan_ganti_plat' => 'Januari',
        //     'tahun_ganti_plat' => '2027',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 7020 NN',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'JTFSS22P5M0196832',
        //     'no_mesin'=>'2KD-B102508',
        //     'no_bpkp'=>'RO1895981',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2022',
        //     'warna'=>'PUTIH',
        //     'jenis_merk'=>'MOBIL HIACE ',
        //     'posisi_kendaraan'=>'Kantor Deresan/Pesantren',
        //     'pic'=>'Kantor Deresan/Pesantren',
        //     'tanggal_pajak' => '17',
        //     'bulan_pajak' => 'Januari',
        //     'tahun_pajak' => '2023',
        //     'tanggal_ganti_plat' => '17',
        //     'bulan_ganti_plat' => 'Januari',
        //     'tahun_ganti_plat' => '2027',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1594 NP',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'',
        //     'no_mesin'=>'',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2022',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'MOBIL BRIO 1.2 E AT',
        //     'posisi_kendaraan'=>'Kantor Deresan/Aldi',
        //     'pic'=>'Kantor Deresan/Aldi',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1201 NV',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'',
        //     'no_mesin'=>'',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'PT.WAROENG STEAK AND SHAKE',
        //     'tahun'=>'2022',
        //     'warna'=>'HITAM',
        //     'jenis_merk'=>'MOBIL CRV',
        //     'posisi_kendaraan'=>'Kantor Deresan/Owner',
        //     'pic'=>'Kantor Deresan/Owner',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 1307 XX',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'',
        //     'no_mesin'=>'',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'',
        //     'tahun'=>'',
        //     'warna'=>'putih',
        //     'jenis_merk'=>'SUZUKI ISUZU TRAGA',
        //     'posisi_kendaraan'=>'Kantor Deresan',
        //     'pic'=>'Kantor Deresan',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);
        
        // Kendaraan::Create([
        //     'wilayah'=>'KANTOR JOGJA',
        //     'no_plat'=>'AB 8411 EI',
        //     'jenis_kendaraan'=>'MOTOR',
        //     'no_rangka'=>'',
        //     'no_mesin'=>'',
        //     'no_bpkp'=>'',
        //     'atas_nama'=>'',
        //     'tahun'=>'',
        //     'warna'=>'HITAM ',
        //     'jenis_merk'=>'PICKUP',
        //     'posisi_kendaraan'=>'KANTOR DERESAN',
        //     'pic'=>'KANTOR DERESAN',
        //     'tanggal_ganti_plat' => '01',
        //     'bulan_ganti_plat' => 'Mei',
        //     'tahun_ganti_plat' => '2027',
        //     'surat_penanggung_jawab' => 'surat/contoh.pdf',
        //     'gambar_depan' => 'kendaraan/depan.png',
        //     'gambar_belakang' => 'kendaraan/belakang.png',
        //     'gambar_samping_kanan' => 'kendaraan/kanan.png',
        //     'gambar_samping_kiri' => 'kendaraan/kiri.png',
        //     'keterangan'=>''
        // ]);

        // Perawatan::Create([
        //     'kendaraan_id' => '15',
        //     'tanggal' => '3',
        //     'bulan' => 'Januari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Servis Rutin',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Service Center',
        //     'kilometer' => '186955366.3',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '635000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '11',
        //     'tanggal' => '8',
        //     'bulan' => 'Januari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Perbaikan',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'AUO Vehicle',
        //     'kilometer' => '263602354.6',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '6350000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '9',
        //     'tanggal' => '5',
        //     'bulan' => 'Januari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 35021',
        //     'kilometer' => '175134938.7',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '95000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '22',
        //     'tanggal' => '22',
        //     'bulan' => 'Januari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 35021',
        //     'kilometer' => '95022220.13',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '212500',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '21',
        //     'tanggal' => '3',
        //     'bulan' => 'Januari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Servis Rutin',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Service Center',
        //     'kilometer' => '88316669.03',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '635000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '4',
        //     'tanggal' => '8',
        //     'bulan' => 'Januari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Perbaikan',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'AUO Vehicle',
        //     'kilometer' => '141657902.1',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '6350000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '8',
        //     'tanggal' => '5',
        //     'bulan' => 'Januari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 43021',
        //     'kilometer' => '10072108.47',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '95000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '5',
        //     'tanggal' => '22',
        //     'bulan' => 'Januari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 43021',
        //     'kilometer' => '221682237.2',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '212500',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '25',
        //     'tanggal' => '13',
        //     'bulan' => 'Februari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Servis Rutin',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Service Center',
        //     'kilometer' => '220218001.8',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '635000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '27',
        //     'tanggal' => '13',
        //     'bulan' => 'Februari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Perbaikan',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'AUO Vehicle',
        //     'kilometer' => '275575119',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '7550000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '15',
        //     'tanggal' => '21',
        //     'bulan' => 'Februari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Servis Rutin',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Service Center',
        //     'kilometer' => '124700603.5',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '380000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '28',
        //     'tanggal' => '22',
        //     'bulan' => 'Februari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Perbaikan',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Multi Pro',
        //     'kilometer' => '20254449.9',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '255000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '1',
        //     'tanggal' => '3',
        //     'bulan' => 'Februari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Servis Rutin',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Service Center',
        //     'kilometer' => '22163337.56',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '635000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '20',
        //     'tanggal' => '8',
        //     'bulan' => 'Februari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Perbaikan',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Multi Pro',
        //     'kilometer' => '259090329.3',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '6350000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '3',
        //     'tanggal' => '5',
        //     'bulan' => 'Februari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 66432',
        //     'kilometer' => '93927337.43',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '187000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '4',
        //     'tanggal' => '22',
        //     'bulan' => 'Februari',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 66432',
        //     'kilometer' => '5996193.349',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '212500',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '24',
        //     'tanggal' => '1',
        //     'bulan' => 'Maret',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 66432',
        //     'kilometer' => '196875902.4',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '187000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '22',
        //     'tanggal' => '3',
        //     'bulan' => 'Maret',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 35021',
        //     'kilometer' => '192703438.5',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '6100000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '6',
        //     'tanggal' => '2',
        //     'bulan' => 'Maret',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Servis Rutin',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Service Center',
        //     'kilometer' => '137761871.9',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '380000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '16',
        //     'tanggal' => '3',
        //     'bulan' => 'Maret',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Perbaikan',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Multi Pro',
        //     'kilometer' => '16873426.77',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '187000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '17',
        //     'tanggal' => '1',
        //     'bulan' => 'Maret',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 43021',
        //     'kilometer' => '152577590.5',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '345000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '10',
        //     'tanggal' => '3',
        //     'bulan' => 'Maret',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 43021',
        //     'kilometer' => '270926145.5',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '6350000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '3',
        //     'tanggal' => '2',
        //     'bulan' => 'Maret',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Servis Rutin',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Service Center',
        //     'kilometer' => '118607078',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '380000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '27',
        //     'tanggal' => '3',
        //     'bulan' => 'Maret',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Perbaikan',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Multi Pro',
        //     'kilometer' => '223461963.9',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '187000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '14',
        //     'tanggal' => '3',
        //     'bulan' => 'April',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Servis Rutin',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Service Center',
        //     'kilometer' => '38248262.61',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '635000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '3',
        //     'tanggal' => '8',
        //     'bulan' => 'April',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Perbaikan',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Multi Pro',
        //     'kilometer' => '43072557.37',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '6350000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '12',
        //     'tanggal' => '5',
        //     'bulan' => 'April',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 43021',
        //     'kilometer' => '62470867.9',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '95000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '1',
        //     'tanggal' => '22',
        //     'bulan' => 'April',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 43021',
        //     'kilometer' => '76172136',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '212500',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '1',
        //     'tanggal' => '13',
        //     'bulan' => 'Mei',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Servis Rutin',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Service Center',
        //     'kilometer' => '240067023.8',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '3245000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '21',
        //     'tanggal' => '13',
        //     'bulan' => 'Mei',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Perbaikan',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'AUO Vehicle',
        //     'kilometer' => '131442045.9',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '6350000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '5',
        //     'tanggal' => '21',
        //     'bulan' => 'Mei',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Servis Rutin',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Service Center',
        //     'kilometer' => '5204444.86',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '95000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '13',
        //     'tanggal' => '22',
        //     'bulan' => 'Mei',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Perbaikan',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'AUO Vehicle',
        //     'kilometer' => '154848173.1',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '255000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '26',
        //     'tanggal' => '1',
        //     'bulan' => 'April',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 43021',
        //     'kilometer' => '109666422.2',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '635000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '20',
        //     'tanggal' => '3',
        //     'bulan' => 'April',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Pengisian BBM',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'SPBU 43021',
        //     'kilometer' => '140570277.9',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '6350000',
        //     'nota' => 'nota/00.png'
        // ]);
        
        // Perawatan::Create([
        //     'kendaraan_id' => '8',
        //     'tanggal' => '2',
        //     'bulan' => 'April',
        //     'tahun' => '2021',
        //     'jenis_perawatan' => 'Perbaikan',
        //     'barang_jasa' => 'ban',
        //     'volume' => '1',
        //     'satuan' => 'buah',
        //     'tempat_perawatan' => 'Multi Pro',
        //     'kilometer' => '17683778.29',
        //     'harga_satuan' => '1000',
        //     'total_biaya' => '2090000',
        //     'nota' => 'nota/00.png'
        // ]);
    }
}
