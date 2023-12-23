<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SeedAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed admin accounts into the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('db:seed', ['--class' => 'AdminSeeder']);
        $this->info('Admin accounts seeded successfully!');
    }
}
