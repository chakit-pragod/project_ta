<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    // public function showRequestForm()
    // {
    //     // Fetch the logged-in user and their associated student record
    //     $users = Auth::user()->load('student.subject');

    //     return view('layout.ta.request', [
    //         'students' => $users->students,
    //     ]);
    // }

    public function create()
    {
        return view('layouts.ta.request');
    }

    public function store(Request $request){
        $request->validate([
            'prefix' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'student_id' => 'required',
            'email' => 'required|email',
            'card_id' => 'required|digits:13',
            'phone' => 'required|digits:10',
        ]);
        Students::create($request->all());
        // $ta = new Students();
        // $ta->prefix = $request->prefix;
        // $ta->fName = $request->fname;
        // $ta->lName = $request->lname;
        // $ta->student_id = $request->student_id;
        // $ta->email = $request->email;
        // $ta->card_id = $request->card_id;
        // $ta->phone = $request->phone;
        // $ta->user_id = Auth::user()->id;  // บันทึก ID ของผู้ใช้ที่เข้าสู่ระบบ
        // // ตั้งค่า subject_id เป็นค่าเริ่มต้นหรือให้มีการเลือก
        // $ta->subject_id = 1; // ควรแก้ไขให้ตรงกับ subject ที่เลือก
        // $ta->type_ta = false; // ตั้งค่า type_ta เป็นค่าเริ่มต้น
        // // $ta->save();
    
        return redirect()->route('request.create')->with('success', 'บันทึกข้อมูลสำเร็จ');
    }
    
}
