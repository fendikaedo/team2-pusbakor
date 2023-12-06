<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'Jenis_Perusahaan';
    protected $guarded = 'id';
}
