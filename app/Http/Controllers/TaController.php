<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\Subjects;
use App\Models\Announce;
use App\Models\Students;
use App\Models\Requests;
use App\Models\CourseTas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



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

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function statusRequest()
    // {
    //     return view('layouts.ta.statusRequest');
    // }
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

        // Validate the incoming request data
        $request->validate([
            'subject_id' => 'required|array|min:1|max:3', // ตรวจสอบว่าเลือกอย่างน้อย 1 วิชา และเลือกไม่เกิน 3 วิชา
            'subject_id*' => 'exists|exists:subjects,subject_id', // ตรวจสอบว่าแต่ละวิชาที่เลือกมีอยู่ในฐานข้อมูล
        ]);

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
        $subjectIds = $request->input('subject_id');

        // ตรวจสอบว่านักศึกษานี้ได้สมัครเป็นผู้ช่วยสอนครบ 3 วิชาหรือยัง
        $currentCourseCount = CourseTas::where('student_id', $student->id)->count();
        if ($currentCourseCount + count($subjectIds) > 3) {
            return redirect()->back()->with('error', 'คุณไม่สามารถสมัครเป็นผู้ช่วยสอนได้เกิน 3 วิชา');
        }

        // // ค้นหา course ที่มี subject_id ตรงกันในตาราง courses

        // $course = Courses::where('subject_id', $subjectId)->first();

        // if ($course) {
        //     // ตรวจสอบว่าผู้ใช้ได้สมัครเป็น TA สำหรับวิชานี้หรือยัง
        //     $existingTA = CourseTas::where('student_id', $student->id)
        //         ->where('course_id', $course->id)
        //         ->first();

        //     if ($existingTA) {
        //         return redirect()->back()->with('error', 'คุณได้สมัครเป็นผู้ช่วยสอนในวิชานี้แล้ว');
        //     }

        //     // บันทึกข้อมูลลงใน course_ta
        //     CourseTas::create([
        //         'student_id' => $student->id,
        //         'course_id' => $course->id,
        //     ]);

        //     return redirect()->route('layout.ta.request')->with('success', 'สมัครเป็นผู้ช่วยสอนสำเร็จ');
        // } else {
        //     return redirect()->route('layout.ta.request')->with('error', 'ไม่พบรายวิชานี้ในระบบ');
        // }

        foreach ($subjectIds as $subjectId) {
            // Find the course with the matching subject_id
            $course = Courses::where('subject_id', $subjectId)->first();
    
            if ($course) {
                // Check if the user has already applied for this course
                $existingTA = CourseTas::where('student_id', $student->id)
                    ->where('course_id', $course->id)
                    ->first();
    
                if ($existingTA) {
                    return redirect()->back()->with('error', 'คุณได้สมัครเป็นผู้ช่วยสอนในวิชา ' . $subjectId . ' แล้ว');
                }

                // บันทึกข้อมูลลงใน course_ta
                CourseTas::create([
                    'student_id' => $student->id,
                    'course_id' => $course->id,
                ]);
    
                // Save to requests table
                Requests::create([
                    'student_id' => $student->id,
                    'course_id' => $course->id,
                    'status' => 'W', // Assuming 'P' means pending
                ]);
    
            } else {
                return redirect()->back()->with('error', 'ไม่พบรายวิชา ' . $subjectId . ' ในระบบ');
            }
        }
    
        return redirect()->route('layout.ta.request')->with('success', 'สมัครเป็นผู้ช่วยสอนสำเร็จ');

    }
}