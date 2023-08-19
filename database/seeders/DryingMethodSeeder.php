<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DryingMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Fresh, Kiln Dried, Air Dried
     */
    public function run(): void
    {
        DB::table('drying_method')->insert(
            [
                [
                    'name' => 'Fresh'
                ],
                [
                    'name' => 'Kiln Dried'
                ],
                [
                    'name' => 'Air Dried'
                ]
            ]
        );
    }
}
