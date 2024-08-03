<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); 
        if ($user) {
            Teachers::create([
                'prefix' => 'นาย',
                'position' => 'ผศ.',
                'degree' => 'ดร.',
                'name' => 'คำรณ สุนัติ',
                'email' => 'skhamron@kku.ac.th',
                'user_id' => 3,
            ]);
        } else {
            $this->command->info('No user found. Please run UserSeeder first.');
        }
        // foreach ($employee as $key => $value) {
        //     Employee::create($employee);
        // }
    }
}
