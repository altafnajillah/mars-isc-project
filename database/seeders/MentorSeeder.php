<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mentors')->insert([
            [
                'name' => 'Muh. Altaf Najillah Aco',
                'score' => 0,
            ],
            [
                'name' => 'Muhammad Yasir & Nurrahiman',
                'score' => 0,
            ],
            [
                'name' => 'Rahmadi',
                'score' => 0,
            ],
        ]);
    }
}
