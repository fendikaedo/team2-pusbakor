<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modal')->insert([
            ['status_modal' => 'PMDN'],
            ['status_modal' => 'Bukan PMA/PMDN'],
            ['status_modal' => 'PMA'],

        ]);
    }
}
