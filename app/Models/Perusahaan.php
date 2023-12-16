<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Perusahaan extends Model
{
     /**
     * Get the user that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    use HasFactory;
    protected $table = 'perusahaan';
    protected $guarded = 'id';

    public function jenis_perusahaan(){
        return $this->belongsTo(Jenis_Perusahaan::class, 'jenis_perusahaan_id');
    }

    public function proyek(){
        return $this->hasMany(Proyek::class, 'perusahaan_id');
    }
}

