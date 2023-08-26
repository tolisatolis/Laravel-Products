<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Nordic Blue: A1, A2, A3, A4, B
        // Tegernseer: O, I, II, III, IV, V??
        $nordicBlueId = DB::table('grading_systems')->where('name', '=', 'Nordic Blue')->value('id');
        $tegernseerId = DB::table('grading_systems')->where('name', '=', 'Tegernseer')->value('id');;
        DB::table('grades')->insert(
            [
                [
                    'name' => 'A1',
                    'grading_system_id' =>  $nordicBlueId,
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'A2',
                    'grading_system_id' =>  $nordicBlueId,
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'A3',
                    'grading_system_id' =>  $nordicBlueId,
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'A4',
                    'grading_system_id' =>  $nordicBlueId,
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'O',
                    'grading_system_id' =>  $tegernseerId,
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'I',
                    'grading_system_id' =>  $tegernseerId,
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'II',
                    'grading_system_id' =>  $tegernseerId,
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'III',
                    'grading_system_id' =>  $tegernseerId,
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'IV',
                    'grading_system_id' =>  $tegernseerId,
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'V',
                    'grading_system_id' =>  $tegernseerId,
                    'created_at' => Carbon::now()
                ]
            ]
        );
    }
}
