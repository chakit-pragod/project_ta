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
            // [
            //     "fname"=> "Admin",
            //     "lname"=> "Admin",
            //     'student_id'=>null,
            //     'email'=> 'admin@admin.com',
            //     'type' => '1',
            //     'password' => bcrypt('1234'),
            // ],  
            [
                'fname'=> 'Sirapat',
                'lname'=>'Chiewchanwattana',
                'student_id'=>null,
                'email'=> 'sunkra@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Sarun',
                'lname'=>'Apichontrakul',
                'student_id'=>null,
                'email'=> 'sarunap@kku.ac.th',
                'type' => '2',
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
                'fname'=> 'Chitsutha',
                'lname'=>'Soomlek',
                'student_id'=>null,
                'email'=> 'chitsutha@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Satit',
                'lname'=>'Kravenkit',
                'student_id'=>null,
                'email'=> 'satikr@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Nagon',
                'lname'=>'Watanakij',
                'student_id'=>null,
                'email'=> 'nagon@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Chanon',
                'lname'=>'Dechsupa',
                'student_id'=>null,
                'email'=> 'chanode@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Sartra',
                'lname'=>'Wongthanavasu',
                'student_id'=>null,
                'email'=> 'wongsar@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Chakchai',
                'lname'=>'So-In',
                'student_id'=>null,
                'email'=> 'chakso@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Punyaphol',
                'lname'=>'Horata',
                'student_id'=>null,
                'email'=> 'punhor1@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Ngamnij',
                'lname'=>'Arch-int',
                'student_id'=>null,
                'email'=> 'ngamnij@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Urachart',
                'lname'=>'Kokaew',
                'student_id'=>null,
                'email'=> 'urachart@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Chaiyapon',
                'lname'=>'Keeratikasikorn',
                'student_id'=>null,
                'email'=> 'chaiyapon@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Wararat',
                'lname'=>'Songpan',
                'student_id'=>null,
                'email'=> 'wararat@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Sunti',
                'lname'=>'Tintanai',
                'student_id'=>null,
                'email'=> 'sunti@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Khamron',
                'lname'=>'Sunat',
                'student_id'=>null,
                'email'=> 'skhamron@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Pipat',
                'lname'=>'Reungsang',
                'student_id'=>null,
                'email'=> 'reungsang@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Boonsup',
                'lname'=>'Waikham',
                'student_id'=>null,
                'email'=> 'boonsup@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Wachirawut',
                'lname'=>'Tamviset',
                'student_id'=>null,
                'email'=> 'twachi@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Urawan',
                'lname'=>'Chanket',
                'student_id'=>null,
                'email'=> 'curawa@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Sumonta',
                'lname'=>'Kasemvilas',
                'student_id'=>null,
                'email'=> 'sumkas@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Saiyan',
                'lname'=>'Saiyod',
                'student_id'=>null,
                'email'=> 'saiyan@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Paweena',
                'lname'=>'Wanchai',
                'student_id'=>null,
                'email'=> 'wpaweena@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Silada',
                'lname'=>'Intarasothonchun',
                'student_id'=>null,
                'email'=> 'silain@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Monlica',
                'lname'=>'Wattana',
                'student_id'=>null,
                'email'=> 'monlwa@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Praisan',
                'lname'=>'Padungweang',
                'student_id'=>null,
                'email'=> 'praipa@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Sakpod',
                'lname'=>'Tongleamnak',
                'student_id'=>null,
                'email'=> 'sakpod@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Pobporn',
                'lname'=>'Danvirutai',
                'student_id'=>null,
                'email'=> 'pobda@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Pongsathon',
                'lname'=>'Janyoi',
                'student_id'=>null,
                'email'=> 'pongsathon@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Warunya',
                'lname'=>'Wunnasri',
                'student_id'=>null,
                'email'=> 'waruwu@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Jakkrit',
                'lname'=>'Kaewyotha',
                'student_id'=>null,
                'email'=> 'jakkritk@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Phet',
                'lname'=>'Aimtongkham',
                'student_id'=>null,
                'email'=> 'phetim@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Arfat Ahmad',
                'lname'=>'Khan',
                'student_id'=>null,
                'email'=> 'arfatkhan@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Wasana',
                'lname'=>'Putklang',
                'student_id'=>null,
                'email'=> 'putklang_w@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Isoon',
                'lname'=>'Kanjanasurat',
                'student_id'=>null,
                'email'=> 'isoonkan@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Pakarat',
                'lname'=>'Musikawan',
                'student_id'=>null,
                'email'=> 'pakamu@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Yanika',
                'lname'=>'Kongsorot',
                'student_id'=>null,
                'email'=> 'yaniko@kku.ac.th',
                'type' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'fname'=> 'Thanaphon',
                'lname'=>'Tangchoopong',
                'student_id'=>null,
                'email'=> 'thanaphon@kku.ac.th',
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
