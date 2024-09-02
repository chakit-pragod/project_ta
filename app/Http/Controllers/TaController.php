<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;
use App\Models\Announce;
use App\Models\Students;
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
    public function disbursements()
    {
        return view('layouts.ta.disbursements');
    }

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
        Students::updateOrCreate(
            ['user_id' => $user->id],
            [
                'prefix' => $user->prefix,
                'fName' => $user->fname,
                'lName' => $user->lname,
                'student_id' => $user->student_id,
                'email' => $user->email,
                'card_id' => $user->card_id,
                'phone' => $user->phone,
                'type_ta' => 0,
                'subject_id' => 1,
            ]
        );

        return redirect()->route('layout.ta.request')->with('success', 'ข้อมูลถูกบันทึกเรียบร้อยแล้ว');
    }
}
