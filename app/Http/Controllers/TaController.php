<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\Subjects;
use App\Models\Announce;
use App\Models\Students;
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

        // Validate the incoming request data
        $request->validate([
            'subject_id' => 'required|exists:subjects,subject_id',
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
        // Students::updateOrCreate(
        //     ['user_id' => $user->id],
        //     [
        //         'prefix' => $user->prefix,
        //         'fname' => $user->fname,
        //         'lname' => $user->lname,
        //         'student_id' => $user->student_id,
        //         'email' => $user->email,
        //         'card_id' => $user->card_id,
        //         'phone' => $user->phone,
        //         'type_ta' => 0,
        //         // 'subject_id' => 1,
        //     ]
        // );

        // Find the corresponding course_id based on selected subject_id
        $course = Courses::where('subject_id', $request->subject_id)->first();

        if ($course) {
            // Save the course_id and student_id to the course_ta table
            DB::table('course_tas')->insert([
                'student_id' => $student->id,
                'course_id' => $course->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('layout.ta.request')->with('success', 'ข้อมูลถูกบันทึกเรียบร้อยแล้ว');
        } else {
            return redirect()->route('layout.ta.request')->with('error', 'ไม่พบวิชาที่เลือกในตารางหลักสูตร');
        }

        //return redirect()->route('layout.ta.request')->with('success', 'ข้อมูลถูกบันทึกเรียบร้อยแล้ว');
    }
}
