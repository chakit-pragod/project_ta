<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Semesters;

class SemestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Semesters::create([
            'year' => 2567,
            'semesters' => 1,
            'start_date' => '2023-06-17',
            'end_date' => '2023-10-30',
        ]);
    }
}
