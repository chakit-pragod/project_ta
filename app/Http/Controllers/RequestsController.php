<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;


class RequestsController extends Controller
{
    public function showCourseTas()
    {
        $requests = Requests::with(['courseTas.course.subjects', 'courseTas.student'])->get();

        // Return the view with the requests data
        return view('layouts.ta.statusRequest', compact('requests'));

    //  /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function statusRequest()
    // {
    //     return view('layouts.ta.statusRequest');
    // }
    }
}
