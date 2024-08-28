<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tas;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class TasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tas = [
            [
                'student_id' => 1,
                'user_id' => 40, 

            ],
            // [
            //     'student_id' => '6430213425',
            //     'user_id' => 2,
            // ],
        ];

        foreach ($tas as $key => $value) {
            Tas::create($value);
        }
    }
}
