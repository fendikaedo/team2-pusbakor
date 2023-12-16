<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'Kecamatan';
    protected $guarded = 'id';

    public function proyek(){
        return $this->hasMany(Proyek::class, 'kecamatan_id');
    }
}
