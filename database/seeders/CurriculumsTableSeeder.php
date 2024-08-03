<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teachers;
use App\Models\Curriculums;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class CurriculumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = Teachers::first(); 
        if ($teachers) {
            Curriculums::create([
                'name_th' => 'วิทยาการคอมพิวเตอร์ ปริญญาตรี',
                'name_en' => 'B.Sc. (Computer Science)',
                'head_teacher_id' => $teachers->id, //อาจารย์คำรณ id = 4
            ]);
        } else {
            $this->command->info('No user found. Please run UserSeeder first.');
        }
    }
}
