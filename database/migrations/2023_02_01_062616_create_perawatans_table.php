<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerawatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perawatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kendaraan_id'); //relasi tabel kendaraan
            // $table->date('tgl_perawatan');
            $table->string('tanggal');
            $table->string('bulan');
            $table->string('tahun');
            $table->string('jenis_perawatan');
            $table->string('barang_jasa');
            $table->integer('volume');
            $table->string('satuan');
            $table->string('tempat_perawatan');
            $table->double('kilometer');
            $table->integer('harga_satuan');
            $table->integer('total_biaya');
            $table->string('nota');
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
        Schema::dropIfExists('perawatans');
    }
}
