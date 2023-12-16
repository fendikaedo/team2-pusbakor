<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kbli extends Model
{
    use HasFactory;
    protected $table = 'Kbli';
    protected $guarded = 'id';

    public function proyek(){
        return $this->hasMany(Proyek::class, 'kbli_id');
    }
}
