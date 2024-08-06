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
                "name"=> "Admin",
                'email'=> 'admin@admin.com',
                'type' => '1',
                'password' => bcrypt('1234'),
            ],
            [
                'name'=> 'chakit pragod',
                'email'=> 'chakit.p@kkumail.com',
                'type' => '0',
                'password' => bcrypt('1234'),
            ],
            [
                'name'=> 'Pusadee',
                'email'=> 'pusadee@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}
