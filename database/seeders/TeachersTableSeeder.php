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
            $teachers = [
                [
                    'prefix' => 'นางสาว',
                    'position' => 'รศ.',
                    'degree' => 'ดร.',
                    'fname' => 'สิรภัทร',
                    'lname' => 'เชี่ยวชาญวัฒนา',
                    'email' => 'sunkra@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'อ.',
                    'degree' => 'ดร.',
                    'fname' => 'ศรัณย์',
                    'lname' => 'อภิชนตระกูล',
                    'email' => 'sarunap@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'พุธษดี',
                    'lname' => 'ศิริแสงตระกูล',
                    'email' => 'pusadee@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'ชิตสุธา',
                    'lname' => 'สุ่มเล็ก',
                    'email' => 'chitsutha@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'สาธิต',
                    'lname' => 'กระเวนกิจ',
                    'email' => 'satikr@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'ณกร',
                    'lname' => 'วัฒนกิจ',
                    'email' => 'nagon@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'ชานนท์',
                    'lname' => 'เดชสุภา',
                    'email' => 'chanode@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'ศ.',
                    'degree' => 'ดร.',
                    'fname' => 'ศาสตรา',
                    'lname' => 'วงศ์ธนวสุ',
                    'email' => 'wongsar@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'ศ. ',
                    'degree' => 'ดร.',
                    'fname' => 'จักรชัย',
                    'lname' => 'โสอินทร์',
                    'email' => 'chakso@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'รศ.',
                    'degree' => 'ดร.',
                    'fname' => 'ปัญญาพล',
                    'lname' => 'หอระตะ',
                    'email' => 'punhor1@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'รศ.',
                    'degree' => 'ดร.',
                    'fname' => 'งามนิจ ',
                    'lname' => 'อาจอินทร์',
                    'email' => 'ngamnij@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'รศ.',
                    'degree' => 'ดร.',
                    'fname' => 'อุรฉัตร',
                    'lname' => 'โคแก้ว',
                    'email' => 'urachart@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'รศ.',
                    'degree' => 'ดร.',
                    'fname' => 'ชัยพล',
                    'lname' => 'กีรติกสิกร',
                    'email' => 'chaiyapon@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'รศ.',
                    'degree' => 'ดร.',
                    'fname' => 'วรารัตน์',
                    'lname' => 'สงฆ์แป้น',
                    'email' => 'wararat@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'ผศ.',
                    'degree' => null,
                    'fname' => 'สันติ',
                    'lname' => 'ทินตะนัย',
                    'email' => 'sunti@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'คำรณ',
                    'lname' => 'สุนัติ',
                    'email' => 'skhamron@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'พิพัธน์',
                    'lname' => 'เรืองแสง',
                    'email' => 'reungsang@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'ผศ.',
                    'degree' => null,
                    'fname' => 'บุญทรัพย์',
                    'lname' => 'ไวคำ',
                    'email' => 'boonsup@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'วชิราวุธ',
                    'lname' => 'ธรรมวิเศษ',
                    'email' => 'twachi@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'อุราวรรณ',
                    'lname' => 'จันทร์เกษ',
                    'email' => 'curawa@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'สุมณฑา',
                    'lname' => 'เกษมวิลาศ',
                    'email' => 'sumkas@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'สายยัญ',
                    'lname' => 'สายยศ',
                    'email' => 'saiyan@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'ปวีณา',
                    'lname' => 'วันชัย',
                    'email' => 'wpaweena@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'สิลดา',
                    'lname' => 'อินทรโสธรฉันท์',
                    'email' => 'silain@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'ผศ.',
                    'degree' => 'ดร.',
                    'fname' => 'มัลลิกา',
                    'lname' => 'วัฒนะ',
                    'email' => 'monlwa@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'อ. .',
                    'degree' => 'ดร.',
                    'fname' => 'ไพรสันต์',
                    'lname' => 'ผดุงเวียง',
                    'email' => 'praipa@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'อ. .',
                    'degree' => 'ดร.',
                    'fname' => 'ศักดิ์พจน์',
                    'lname' => 'ทองเลี่ยมนาค',
                    'email' => 'sakpod@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'อ.',
                    'degree' => 'ดร.',
                    'fname' => 'พบพร',
                    'lname' => 'ด่านวิรุทัย',
                    'email' => 'pobda@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'อ.',
                    'degree' => 'ดร.',
                    'fname' => 'พงษ์ศธร',
                    'lname' => 'จันทร์ยอย',
                    'email' => 'pongsathon@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'อ.',
                    'degree' => 'ดร.',
                    'fname' => 'วรัญญา',
                    'lname' => 'วรรณศรี',
                    'email' => 'waruwu@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'อ. .',
                    'degree' => 'ดร.',
                    'fname' => 'จักรกฤษณ์',
                    'lname' => 'แก้วโยธา',
                    'email' => 'jakkritk@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'อ.',
                    'degree' => 'ดร.',
                    'fname' => 'เพชร',
                    'lname' => 'อิ่มทองคำ',
                    'email' => 'phetim@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'Mr.',
                    'position' => 'อ.',
                    'degree' => 'ดร.',
                    'fname' => 'Arfat Ahmad',
                    'lname' => 'Khan',
                    'email' => 'arfatkhan@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'อ.',
                    'degree' => 'ดร.',
                    'fname' => 'วาสนา',
                    'lname' => 'พุฒกลาง',
                    'email' => 'putklang_w@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'อ.',
                    'degree' => 'ดร.',
                    'fname' => 'ไอศูรย์',
                    'lname' => 'กาญจนสุรัตน์',
                    'email' => 'isoonkan@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'อ.',
                    'degree' => 'ดร.',
                    'fname' => 'ภัคราช',
                    'lname' => 'มุสิกะวัน',
                    'email' => 'pakamu@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นางสาว',
                    'position' => 'อ.',
                    'degree' => 'ดร.',
                    'fname' => 'ญานิกา ',
                    'lname' => 'คงโสรส',
                    'email' => 'yaniko@kku.ac.th',
                    // 'user_id' => $user->id,
                ],
                [
                    'prefix' => 'นาย',
                    'position' => 'อ.',
                    'degree' => null,
                    'fname' => 'ธนพล',
                    'lname' => 'ตั้งชูพงศ์',
                    'email' => 'thanaphon@kku.ac.th',
                    // 'user_id' => $user->id,
                ],

            ];

        // foreach ($teacher as $key => $value) {
        //     Teachers::create($value);
        // }
        
        foreach ($teachers as $teacher) {
            $user = DB::table('users')->where('email', $teacher['email'])->first();

            if ($user) {
                Teachers::create([
                    'prefix' => $teacher['prefix'],
                    'position' => $teacher['position'],
                    'degree' => $teacher['degree'],
                    'fname' => $teacher['fname'],
                    'lname' => $teacher['lname'],
                    'email' => $teacher['email'],
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
