<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GradingSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grading_system')->insert(
            [
                [
                    'name' => 'Tegernseer',
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Nordic Blue',
                    'created_at' => Carbon::now()
                ]
            ]
        );
    }
}
