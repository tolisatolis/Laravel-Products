<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DryingMethodSeeder::class,
            SpeciesSeeder::class,
            TreatmentSeeder::class,
            GradingSystemSeeder::class,
            GradeSeeder::class
        ]);
    }
}
