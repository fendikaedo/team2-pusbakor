<?php

namespace App\Models;

use App\Models\Desa;
use App\Models\Perusahaan;
use App\Models\Kbli;
use App\Models\Skala_Usaha;
use App\Models\Kecamatan;
use App\Models\Resiko;
use App\Models\Modal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    protected $table = 'Proyek';
    protected $fillable = [
        'longitude',
        'latitude',
        'alamat',
        'investasi',
        'perusahaan_id',
        'modal_id',
        'resiko_id',
        'skala_usaha_id',
        'kecamatan_id',
        'desa_id',
        'kbli_id',
    ];
    protected $guarded = 'id';
    protected $primaryKey = 'id';

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id');
    }

    public function modal()
    {
        return $this->belongsTo(Modal::class, 'modal_id');
    }

    // Contoh relasi dengan model Resiko
    public function resiko()
    {
        return $this->belongsTo(Resiko::class, 'resiko_id');
    }

    // Contoh relasi dengan model SkalaUsaha
    public function skala_usaha()
    {
        return $this->belongsTo(Skala_Usaha::class, 'skala_usaha_id');
    }

    // Contoh relasi dengan model Kecamatan
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }
    // Contoh relasi dengan model Desa
    public function desa()
    {
        return $this->belongsTo(Desa::class, 'desa_id');
    }

    // Contoh relasi dengan model KBLI
    public function kbli()
    {
        return $this->belongsTo(Kbli::class, 'kbli_id');
    }

}
