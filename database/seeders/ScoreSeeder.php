<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('scores')->insert([
            [
                'commit' => 85,
                'mentor' => 90,
                'evaluation' => 87,
                'addition' => 20,
                'motm' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'commit' => 70,
                'mentor' => 85,
                'evaluation' => 80,
                'addition' => 15,
                'motm' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'commit' => 95,
                'mentor' => 90,
                'evaluation' => 90,
                'addition' => 30,
                'motm' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'commit' => 80,
                'mentor' => 75,
                'evaluation' => 85,
                'addition' => 25,
                'motm' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'commit' => 65,
                'mentor' => 70,
                'evaluation' => 78,
                'addition' => 10,
                'motm' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'commit' => 100,
                'mentor' => 95,
                'evaluation' => 98,
                'addition' => 40,
                'motm' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
