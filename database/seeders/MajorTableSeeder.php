<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Curriculums;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class MajorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curriculums = Curriculums::first();

        if ($curriculums) {
            Major::create([
                'name_th' => 'ปริญญาตรี ภาคพิเศษ',
                'name_en' => 'Bachelor`s degree, Special program',
                'major_type' => 'S',
                'cur_id' => $curriculums->id,
            ]);
        } else {
            $this->command->info('No curriculum found. Please run CurriculumSeeder first.');
        }
    }
}