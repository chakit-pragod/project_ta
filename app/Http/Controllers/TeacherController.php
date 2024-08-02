<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
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
    public function subject()
    {
        return view('layouts.teacher.subject');
    }

    public function subjectDetail()
    {
        return view('layouts.teacher.subjectDetail');
    }
    public function taDetail()
    {
        return view('layouts.teacher.taDetail');
    }


}
