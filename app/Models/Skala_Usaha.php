<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skala_Usaha extends Model
{
    use HasFactory;
    protected $table = 'Skala_Usaha';
    protected $guarded = 'id';

    public function proyek(){
        return $this->hasMany(Proyek::class, 'skala_usaha_id');
    }
}
