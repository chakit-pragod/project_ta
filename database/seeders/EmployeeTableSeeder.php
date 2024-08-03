<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); 
        if ($user) {
            Employee::create([
                'name' => 'Satida Wetchatsart',
                'email' => 'satida@admin.com',
                'phone' => '0812345678',
                'user_id' => 1,
            ]);
        } else {
            $this->command->info('No user found. Please run UserSeeder first.');
        }
        // foreach ($employee as $key => $value) {
        //     Employee::create($employee);
        // }
    }
}