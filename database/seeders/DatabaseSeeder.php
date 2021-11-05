<?php

namespace Database\Seeders;

use App\Models\Bahan;
use App\Models\Resep;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(20)->create();
        $this->call(ResepSeeder::class);
    }
}
