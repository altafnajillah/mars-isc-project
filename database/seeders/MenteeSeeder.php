<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mentees')->insert([
            [
                'name' => 'Daud',
                'nim' => 'D0223047',
                'angkatan' => '2023',
                'mentor_id' => 1,
                'score' => 97.1,
                'scores_id' => 1
            ],
            [
                'name' => 'Karunia Juli Sariri',
                'nim' => 'D0223513',
                'angkatan' => '2023',
                'mentor_id' => 1,
                'score' => 99.21,
                'scores_id' => 2
            ],
            [
                'name' => 'Nurningsih',
                'nim' => 'D0222323',
                'angkatan' => '2022',
                'mentor_id' => 2,
                'score' => 87.6,
                'scores_id' => 3
            ],
            [
                'name' => 'Muhammad Ali Sadikin',
                'nim' => 'D0223332',
                'angkatan' => '2023',
                'mentor_id' => 2,
                'score' => 84.2,
                'scores_id' => 4
            ],
            [
                'name' => 'Adham Zaquan Kamaruddin',
                'nim' => 'D0224314',
                'angkatan' => '2024',
                'mentor_id' => 3,
                'score' => 81.8,
                'scores_id' => 5
            ],
            [
                'name' => 'Rusna',
                'nim' => 'D0224005',
                'angkatan' => '2024',
                'mentor_id' => 3,
                'score' => 80.8,
                'scores_id' => 6
            ],
        ]);
    }
}
