<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;
use App\Models\Announce;
use App\Models\Students;
use App\Models\CourseTas;
use App\Models\Courses;
use Illuminate\Support\Facades\Auth;



class TaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /// TA ROLE
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function request()
    {
        $subjects = Subjects::all();
        return view('layouts.ta.request', compact('subjects'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function statusRequest()
    {
        return view('layouts.ta.statusRequest');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function taSubject()
    {
        return view('layouts.ta.taSubject');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function attendances()
    {
        return view('layouts.ta.attendances');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function showAnnounces()
    {
        $announces = Announce::orderBy('created_at', 'desc')->get();
        return view('home', compact('announces'));
    }
    public function showRequestForm()
    {
        $user = Auth::user();
        return view('ta.request', compact('user'));
    }

    public function apply(Request $request)
    {
        $user = Auth::user();

        // Create or update the student record
        $student = Students::updateOrCreate(
            ['user_id' => $user->id],
            [
                'prefix' => $user->prefix,
                'fname' => $user->fname,
                'lname' => $user->lname,
                'student_id' => $user->student_id,
                'email' => $user->email,
                'card_id' => $user->card_id,
                'phone' => $user->phone,
                'type_ta' => 0,
            ]
        );

        // รับ subject_id ที่เลือกจากฟอร์ม
        $subjectId = $request->input('subject_id');

        // ค้นหา course ที่มี subject_id ตรงกันในตาราง courses
        $course = Courses::where('subject_id', $subjectId)->first();

        if ($course) {
            // ตรวจสอบว่าผู้ใช้ได้สมัครเป็น TA สำหรับวิชานี้หรือยัง
            $existingTA = CourseTas::where('student_id', $student->id)
                                ->where('course_id', $course->id)
                                ->first();

            if ($existingTA) {
                return redirect()->back()->with('error', 'คุณได้สมัครเป็นผู้ช่วยสอนในวิชานี้แล้ว');
            }

            // บันทึกข้อมูลลงใน course_ta
            CourseTas::create([
                'student_id' => $student->id,
                'course_id' => $course->id,
            ]);

            return redirect()->route('layout.ta.request')->with('success', 'สมัครเป็นผู้ช่วยสอนสำเร็จ');
        } else {
            return redirect()->route('layout.ta.request')->with('error', 'ไม่พบรายวิชานี้ในระบบ');
        }
    }

}
