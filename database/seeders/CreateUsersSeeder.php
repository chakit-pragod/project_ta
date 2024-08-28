<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $user = [
            [
                "fname"=> "Admin",
                "lname"=> "Admin",
                'student_id'=>null,
                'email'=> 'admin@admin.com',
                'type' => '1',
                'password' => bcrypt('1234'),
            ],  
            [
                'fname'=> 'Pusadee',
                'lname'=>'Seresangtakul',
                'student_id'=>null,
                'email'=> 'pusadee@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'chakit',
                'lname'=> 'pragod',
                'student_id'=>'643021316-6',
                'email'=> 'chakit.p@kkumail.com',
                'type' => '0',
                'password' => bcrypt('1234'),
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}
