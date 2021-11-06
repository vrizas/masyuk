<?php

namespace Database\Seeders;

use App\Models\Bahan;
use App\Models\Resep;
use App\Models\ResepStep;
use Illuminate\Database\Seeder;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = Resep::factory(20)->create();
        $bahans = Bahan::factory(20)->create();
        $steps = ResepStep::factory(20)->create();

        $recipes->each(function(Resep $resep) use ($bahans, $steps) {
            $resep->bahans()->attach(
                $bahans->random(rand(1, 20))->pluck('id')->toArray(),
            );
        });
    }
}
