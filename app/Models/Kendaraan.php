<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'wilayah',
    //     'no_plat',
    //     'jenis_kendaraan',
    //     'no_rangka',
    //     'no_mesin',
    //     'no_bpkb',
    //     'atas_nama',
    //     'tahun',
    //     'warna',
    //     'jenis_merk',
    //     'posisi_kendaraan',
    //     'pajak',
    //     'ganti_plat',
    //     'keterangan',
    // ];

    protected $guarded = ['id'];

    public function perawatan() {
        return $this->hasMany(Perawatan::class);
    }
}
