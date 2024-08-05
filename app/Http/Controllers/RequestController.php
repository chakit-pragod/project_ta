<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function showRequestForm()
    {
        // Fetch the logged-in user and their associated student record
        $users = Auth::user()->load('student.subject');

        return view('layout.ta.request', [
            'students' => $users->students,
        ]);
    }
}
