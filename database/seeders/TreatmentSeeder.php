<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('treatments')->insert(
            [
                [
                    'name' => 'Heat Treated',
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Anti-stain Treatment',
                    'created_at' => Carbon::now()
                ]
            ]
        );
    }
}
