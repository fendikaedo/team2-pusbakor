<?php

namespace Database\Seeders;

use App\Models\Skala_Usaha;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Skala_UsahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skala_usaha')->insert([
            ['skala_usaha' => 'Usaha Mikro'],
            ['skala_usaha' => 'Usaha Kecil'],
            ['skala_usaha' => 'Usaha Menengah'],
            ['skala_usaha' => 'Usaha Besar'],

        ]);
    }
}
