<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subjects;
use App\Models\Curriculums;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curriculums = Curriculums::first();

        if ($curriculums) {
            Subjects::create([
                'id' => 'SC312003',
                'name_th' => 'ระบบจัดการฐานข้อมูลและการออกแบบฐานข้อมูล',
                'name_en' => 'Database Management System and Database Design',
                'credits' => 3,
                'weight' => '3-0-6',
                'detail' => 'แนวคิดระบบจัดการฐานข้อมูลขั้นแนะนำ รูปแบบข้อมูลและภาษา ทฤษฎีฐานข้อมูลเชิงสัมพันธ์...',
                'cur_id' => $curriculums->id,
                'status' => 'A'
            ]);
        } else {
            $this->command->info('No curriculum found. Please run CurriculumSeeder first.');
        }
    }
}