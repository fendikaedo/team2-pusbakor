<?php

namespace Database\Seeders;

use App\Models\Resiko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResikoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('resiko')->insert([
            ['resiko_proyek' => 'Menengah Tinggi'],
            ['resiko_proyek' => 'Menengah Rendah'],
            ['resiko_proyek' => 'Rendah'],
            ['resiko_proyek' => 'Tinggi'],
        ]);
    }
}
