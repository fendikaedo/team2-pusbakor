<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resiko extends Model
{
    use HasFactory;
    protected $table = 'Resiko';
    protected $guarded = 'id';

    public function proyek(){
        return $this->hasMany(Proyek::class, 'resiko_id');
    }
}
