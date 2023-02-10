<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('wilayah'); //ubah ke type foreignId() kalo sudah ada tabelnya
            $table->string('no_plat');
            $table->string('jenis_kendaraan')->nullable();
            $table->string('no_rangka')->nullable();
            $table->string('no_mesin')->nullable();
            $table->string('no_bpkb')->nullable();
            $table->string('atas_nama')->nullable();
            $table->string('tahun')->nullable();
            $table->string('warna')->nullable();
            $table->string('bahan_bakar')->nullable();
            $table->string('jenis_merk')->nullable();
            $table->string('pic')->nullable();
            $table->string('posisi_kendaraan')->nullable();
            // $table->date('pajak')->nullable();
            $table->string('tanggal_pajak')->nullable();
            $table->string('bulan_pajak')->nullable();
            $table->string('tahun_pajak')->nullable();
            // $table->date('ganti_plat')->nullable();
            $table->string('tanggal_ganti_plat')->nullable();
            $table->string('bulan_ganti_plat')->nullable();
            $table->string('tahun_ganti_plat')->nullable();
            $table->string('surat_penanggung_jawab')->nullable(); //file pdf
            $table->string('gambar_depan')->nullable(); //gambar
            $table->string('gambar_belakang')->nullable(); //gambar
            $table->string('gambar_samping_kanan')->nullable(); //gambar
            $table->string('gambar_samping_kiri')->nullable(); //gambar
            $table->string('keterangan')->nullable(); //ubah ke type foreignId() kalo sudah ada tabelnya
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}
