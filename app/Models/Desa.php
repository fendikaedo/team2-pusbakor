<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $table = 'Desa';
    protected $guarded = 'id';

    public function proyek(){
        return $this->hasMany(Proyek::class, 'desa_id');
    }
}
