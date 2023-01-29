<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->string('pic');
            $table->string('kota');
            $table->string('tgl_perolehan');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->integer('harga');
            $table->integer('total');
            $table->integer('dp');
            $table->date('tgl_dp');
            $table->integer('angsuran');
            $table->integer('jml_angsuran');
            $table->date('periode_angsuran');
            $table->string('rekening');
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
        Schema::dropIfExists('pembelians');
    }
}
