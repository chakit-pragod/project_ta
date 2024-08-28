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
            $subjects = [
                [
                    'subject_id' => 'CP352001',
                    'name_th' => 'โครงสร้างข้อมูล',
                    'name_en' => 'Data Structure',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'พื้นฐานของขั้นตอนวิธี โครงสร้างข้อมูลแบบเชิงเส้น แถวลำดับ สแต๊ค คิว ลิงก์ลิสต์ทางเดียว ลิงก์ลิสต์วงกลม ลิงก์ลิสต์สองทาง โครงสร้างข้อมูลไม่เชิงเส้น โครงสร้างรูปต้นไม้และกราฟ เทคนิคการเรียงลำดับและการค้นหาข้อมูล',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP352002',
                    'name_th' => 'การออกแบบประสบการณ์ผู้ใช้',
                    'name_en' => 'User Experience Design',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'หลักการและแนวคิดการโต้ตอบระหว่างคอมพิวเตอร์กับผู้ใช้งานขั้นพื้นฐาน ความสาคัญของการออกแบบประสบการณ์ผู้ใช้ ทฤษฎีพื้นฐานของการออกแบบระบบการติดต่อโต้ตอบ วงจรการออกแบบประสบการณ์ผู้ใช้ ปัจจัยที่ส่งผลต่อประสบการณ์ผู้ใช้ ประเด็นที่เกี่ยวกับการออกแบบประสบการณ์ผู้ใช้ในปัจจุบัน การวิเคราะห์พฤติกรรมผู้ใช้ การยศาสตร์ การฝึกทักษะในการใช้เทคโนโลยีเพื่อการออกแบบประสบการณ์ผู้ใช้',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP351203',
                    'name_th' => 'การเขียนโปรแกรมเว็บและการประยุกต์ใช้',
                    'name_en' => 'Web Programming and Application',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'การสร้างเว็บเพจด้วยภาษาแอชทีเอ็มแอลและภาษาจาวาสคริปต์ การจัดรูปแบบด้วยซีเอสเอส (CSS) การ เขียนโปรแกรมบนเว็บเซิร์ฟเวอร์ด้วยภาษาพี เอ็ช พี',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP353001',
                    'name_th' => 'ระบบปฏิบัติการและการเขียนโปรแกรมซีสเต็มคอล',
                    'name_en' => 'Operating Systems and System Calls Programming',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'ระบบปฏิบัติการขั้นแนะนา กระบวนการ การจัดกาหนดการซีพียู การประสานเวลากระบวนการ การติดตาม การจัดการหน่วยเก็บข้อมูล การจัดการหน่วยความจา หน่วยความจาเสมือน การจัดการหน่วยเก็บรอง ระบบแฟ้มและการอารักขา บทนาเครื่องจักรเสมือน แนวความคิดของเครื่องจักรเสมือน กรณีศึกษาของเครื่องจักรเสมือน การปฏิบัติเกี่ยวกับระบบปฏิบัติการ การเขียนโปรแกรมเชลล์ การเขียนโปรแกรมซีสเต็มคอล',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP351001',
                    'name_th' => 'วิทยาการคอมพิวเตอร์หลักมูล',
                    'name_en' => 'Fundamental Computer Science',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'องค์ประกอบระบบคอมพิวเตอร์พื้นฐานเบื้องต้น รหัสและการแทนข้อมูลในคอมพิวเตอร์ ระบบปฏิบัติการ ส่วนประกอบของระบบคอมพิวเตอร์ การประมวลผลข้อมูลระบบแฟ้มข้อมูลและระบบ ฐานข้อมูล หลักการเครือข่ายคอมพิวเตอร์และอินเทอร์เน็ต ความมั่นคงทางคอมพิวเตอร์ วิทยาการข้อมูลและ ปัญญาประดิษฐ์ เทคโนโลยีสารสนเทศและ กฎหมายคอมพิวเตอร์ เส้นทางอาชีพคอมพิวเตอร์และ คุณลักษณะบัณฑิต',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP353201',
                    'name_th' => 'การประกันคุณภาพซอฟต์แวร์',
                    'name_en' => 'Software Quality Assurance',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'คุณภาพของซอฟต์แวร์ ตัวแบบคุณภาพของซอฟต์แวร์ การวัดคุณภาพซอฟต์แวร์และตัวชี้วัด การจัดการคุณภาพซอฟต์แวร์ กระบวนการประกันคุณภาพซอฟต์แวร์ การควบคุมคุณภาพซอฟต์แวร์ การทดสอบซอฟต์แวร์ การออกแบบการทดสอบ กลยุทธ์ในการทดสอบซอฟต์แวร์ การทดสอบซอฟต์แวร์แบบอัตโนมัติ การทดสอบซอฟต์แวร์แบบอไจล์ การพัฒนาซอฟต์แวร์ที่มีการทดสอบเป็นตัวนา การพัฒนาซอฟต์แวร์แบบบูรณาการและการส่งมอบซอฟต์แวร์อย่างต่อเนื่อง (CI/CD) การปรับปรุงกระบวนการพัฒนาซอฟต์แวร์ มาตรฐานและนโยบายที่เกี่ยวข้อง',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP353108',
                    'name_th' => 'โครงข่ายประสาทและการเรียนรู้เชิงลึก',
                    'name_en' => 'Neural Network and Deep Learning',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'ทฤษฎีและการประยุกต์ของการคำนวณแบบประสาทขั้นแนะนำ แบบการคำนวณแบบประสาท การจำแนกรูปแบบ การประมาณค่าของฟังก์ชัน ขั้นตอนวิธีการเรียนรู้ การเรียนรู้เชิงลึก',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP353003',
                    'name_th' => 'ปัญญาประดิษฐ์',
                    'name_en' => 'Artificial Intelligence',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'ภาษาการเขียนโปรแกรมลิสพ์ การแก้ปัญหาโดยการค้นหาคาตอบในปริภูมิสถานะโดยใช้ภาษาลิสพ์ เทคนิคปัญญาประดิษฐ์ในเกมส์ องค์ความรู้แบบฟัซซี เทคนิคการเรียนรู้ เทคนิควิธีการจาแนกและการจัดกลุ่ม การเรียนรู้เชิงลึก',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP353102',
                    'name_th' => 'เครื่องจักรเรียนรู้ขั้นนำ',
                    'name_en' => 'Introduction to Machine Learning',
                    'credits' => 3,
                    'weight' => '3-0-6',
                    'detail' => 'แนวคิดและกลไกพื้นฐานของวิธีการเรียนรู้สาหรับเครื่องจักรเรียนรู้ที่รู้มีชื่อเสียงและประยุกต์ใช้แพร่หลาย วิธี เค-มีนส์ วิธีฟัซซี่-มีนส์ การจัดระเบียบตนเอง เครื่องจักรเรียนรู้เอ็กซ์ทรีม โครงข่ายประสาทเทียมแบบคอนโวลูชัน ตัวเข้ารหัสอัตโนมัติเชิงลึก เครื่องจักรบ็อลทซ์มันเชิงลึก เครื่องจักรเรียนรู้แบบต้นไม้ การส่งเสริม ป่าแบบสุ่ม เทคนิคการหาคาตอบที่หมาะสม การประยุกต์',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP353102',
                    'name_th' => 'เครื่องจักรเรียนรู้ขั้นนำ',
                    'name_en' => 'Introduction to Machine Learning',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'แนวคิดและกลไกพื้นฐานของวิธีการเรียนรู้สาหรับเครื่องจักรเรียนรู้ที่รู้มีชื่อเสียงและประยุกต์ใช้แพร่หลาย วิธี เค-มีนส์ วิธีฟัซซี่-มีนส์ การจัดระเบียบตนเอง เครื่องจักรเรียนรู้เอ็กซ์ทรีม โครงข่ายประสาทเทียมแบบคอนโวลูชัน ตัวเข้ารหัสอัตโนมัติเชิงลึก เครื่องจักรบ็อลทซ์มันเชิงลึก เครื่องจักรเรียนรู้แบบต้นไม้ การส่งเสริม ป่าแบบสุ่ม เทคนิคการหาคาตอบที่หมาะสม การประยุกต์',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP353103',
                    'name_th' => 'การวิเคราะห์และการประยุกต์ข้อมูล',
                    'name_en' => 'Data Analytics and Application',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'ข้อมูล การเตรียมข้อมูล กระบวนการค้นพบความรู้ในการวิเคราะห์ข้อมูล การทาเหมืองข้อมูล การวิเคราะห์ข้อมูล เครื่องมือและภาษาที่ใช้ในการวิเคราะห์ข้อมูล การทาเหมืองกฎความสัมพันธ์ การจาแนกประเภทและการพยากรณ์ข้อมูล การจัดกลุ่มข้อมูล การสร้างภาพนามธรรม ความท้าทายสาหรับการวิเคราะห์ข้อมูลขนาดใหญ่ และการประยุกต์ใช้',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP352201',
                    'name_th' => 'เทคโนโลยีการออกแบบเว็บ',
                    'name_en' => 'Web Design Technologies',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'หลักการการออกแบบเว็บไซต์ การวางแผนการทาเว็บไซต์ การออกแบบเว็บไซต์ สภาวะแวดล้อมที่ควรคานึงถึงในการออกแบบเว็บ การเลือกใช้ตัวอักษร การออกแบบการจัดวางหน้าเว็บ การใช้กราฟิกและการใช้สี การออกแบบเนื้อหา การวางแผนระบบนาทางมัลติมีเดีย การพัฒนาเว็บไซต์ให้ทุกคนเข้าถึงได้ การออกแบบเว็บที่รองรับทุกอุปกรณ์ ภาษาเอชทีเอ็มแอลและแคสเคดดิ้งสไตล์ชีท',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP351002',
                    'name_th' => 'การเขียนโปรแกรมเชิงโครงสร้างสำหรับวิทยาการคอมพิวเตอร์',
                    'name_en' => 'Structure Programming Languages for Computer Science',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'แนะนำการเขียนโปรแกรมภาษาซี แนวคิดการเขียนโปรแกรมเชิงกระบวนคำสั่ง การสร้างผังงาน โครงสร้างโปรแกรม การคิดเชิงตรรกะ ชนิดข้อมูล การกำหนดตัวแปร ประโยคเงื่อนไข คำสั่งควบคุม การใช้ แถวลำดับและสายอักขระ ฟังก์ชัน ตัวชี้ โครงสร้าง การอ่านและเขียนไฟล์ คุณลักษณะบัณฑิต',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP353761',
                    'name_th' => 'สัมมนาทางวิทยาการคอมพิวเตอร์',
                    'name_en' => 'Seminar in Computer Science',
                    'credits' => 1,
                    'weight' => '1-0-2',
                    'detail' => 'การทบทวนวรรณกรรม การอภิปราย การเขียนรายงานและการนาเสนอรายงานเกี่ยวกับเทคโนโลยีและความก้าวหน้าในสาขาวิชาวิทยาการคอมพิวเตอร์',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'CP353002',
                    'name_th' => 'หลักการออกแบบพัฒนาซอฟต์แวร์',
                    'name_en' => 'Principles of Software Design and Development',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'การมองถึงการพัฒนาระบบเชิงวัตถุ แนวคิดเชิงวัตถุ ลักษณะประจา พฤติกรรมและระเบียบวิธี การห่อหุ้มและการซ่อนสารสนเทศ คลาส ภาวะรูปร่างหลายแบบ ความสัมพันธ์และความเกี่ยวข้องเชิงวัตถุ วงจรชีวิตการพัฒนาระบบเชิงวัตถุ ระเบียบวิธีการเชิงวัตถุ ภาษาการทาแบบจาลองให้เป็นหนึ่งเดียว การวิเคราะห์เชิงวัตถุ การออกแบบเชิงวัตถุ การออกแบบลวดลาย',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],
                [
                    'subject_id' => 'SC313002',
                    'name_th' => 'หลักการออกแบบพัฒนาซอฟต์แวร์',
                    'name_en' => 'Principles of Software Design and Development',
                    'credits' => 3,
                    'weight' => '2-2-5',
                    'detail' => 'การมองถึงการพัฒนาระบบเชิงวัตถุ แนวคิดเชิงวัตถุ ลักษณะประจา พฤติกรรมและระเบียบวิธี การห่อหุ้มและการซ่อนสารสนเทศ คลาส ภาวะรูปร่างหลายแบบ ความสัมพันธ์และความเกี่ยวข้องเชิงวัตถุ วงจรชีวิตการพัฒนาระบบเชิงวัตถุ ระเบียบวิธีการเชิงวัตถุ ภาษาการทาแบบจาลองให้เป็นหนึ่งเดียว การวิเคราะห์เชิงวัตถุ การออกแบบเชิงวัตถุ การออกแบบลวดลาย',
                    'cur_id' => $curriculums->id,
                    'status' => 'A'
                ],



                // เพิ่มข้อมูลอื่น ๆ ที่คุณต้องการ
            ];

            foreach ($subjects as $subject) {
                Subjects::create($subject);
            }
        } else {
            $this->command->info('No curriculum found. Please run CurriculumSeeder first.');
        }
    }
}
