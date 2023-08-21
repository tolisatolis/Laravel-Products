<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('species')->insert(
            [
                [
                    'name' => 'Pine',
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Spruce',
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Fir',
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Birch',
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Apple Tree',
                    'created_at' => Carbon::now()
                ]
            ]
        );
    }
}
