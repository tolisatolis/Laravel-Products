<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DryingMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Fresh, Kiln Dried, Air Dried
     */
    public function run(): void
    {
        DB::table('drying_methods')->insert(
            [
                [
                    'name' => 'Fresh',
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Kiln Dried',
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Air Dried',
                    'created_at' => Carbon::now()
                ]
            ]
        );
    }
}
