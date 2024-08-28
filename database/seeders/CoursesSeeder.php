<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Courses;


class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'status' => 'A', 
                'subject_id' => 1, 
                'owner_teacher_id' => 1, 
                'semesters_id' => 1,
                'major_id' => 1,
                'cur_id' => 1, 
            ],
            [
                'status' => 'A',
                'subject_id' =>  1, 
                'owner_teacher_id' => 1, 
                'semesters_id' => 1,
                'major_id' => 1, 
                'cur_id' => 1, 
            ],
        ];

        foreach ($courses as $key => $value) {
            Courses::create($value);
        }
    }
}
