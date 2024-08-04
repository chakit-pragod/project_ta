<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Students;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'fName' => 'ชาคริต',
                'lName' => 'ปรากฎ',
                'card_id' => '1234567890123',
                'phone' => '0823456789',
                'email' => 'chakit.p@kkumail.com',
                'user_id' => 2,
                'subject_id' => 1,
                'type_ta' => false,
                'uploadfile' => null,
            ],
            [
                'fName' => 'สุพัตรา',
                'lName' => 'แพงจันทร์',
                'card_id' => '9876543210987',
                'phone' => '0887654321',
                'email' => 'supattra.pa@kkumail.com',
                'user_id' => 2,
                'subject_id' => 1,
                'type_ta' => false,
                'uploadfile' => null,
            ],
        ];

        foreach ($students as $key => $value) {
            Students::create($value);
        }
    }
}