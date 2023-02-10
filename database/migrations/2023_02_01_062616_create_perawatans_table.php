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
            $table->string('tanggal')->nullable();
            $table->string('bulan')->nullable();
            $table->string('tahun')->nullable();
            $table->string('jenis_perawatan')->nullable();
            $table->string('barang_jasa')->nullable();
            $table->integer('volume')->nullable();
            $table->string('satuan')->nullable();
            $table->string('tempat_perawatan')->nullable();
            $table->double('kilometer')->nullable();
            $table->integer('harga_satuan')->nullable();
            $table->integer('total_biaya')->nullable();
            $table->string('nota')->nullable();
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
