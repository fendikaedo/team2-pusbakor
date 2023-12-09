<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kecamatan')->insert([
            ['nama_kecamatan' => 'Donorojo'],
            ['nama_kecamatan' => 'Sudimoro'],
            ['nama_kecamatan' => 'Tegalombo'],
            ['nama_kecamatan' => 'Pacitan'],
            ['nama_kecamatan' => 'Punung'],
            ['nama_kecamatan' => 'Pringkuku'],
            ['nama_kecamatan' => 'Ngadirojo'],
            ['nama_kecamatan' => 'Tulakan'],
            ['nama_kecamatan' => 'Kebonagung'],
            ['nama_kecamatan' => 'Nawangan'],
            ['nama_kecamatan' => 'Arjosari'],
            ['nama_kecamatan' => 'Bandar'],

        ]);
    }
}
