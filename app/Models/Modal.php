<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modal extends Model
{
    use HasFactory;
    protected $table = 'Modal';
    protected $guarded = 'id';

    public function proyek(){
        return $this->hasMany(Proyek::class, 'modal_id');
    }
}
