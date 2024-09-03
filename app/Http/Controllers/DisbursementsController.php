<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Disbursements;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;


class DisbursementsController extends Controller
{
    public function index()
    {

        return view('welcome');

    }

    public function disbursements()
    {
        return view('layouts.ta.disbursements');
    }

    public function uploads(Request $request)
    {
        $request->validate([
            'uploadfile' => 'required|file|max:2048',
            'bookbank_id' => 'required|string',
            'bank_name' => 'required|string',
        ]);

        $user = Auth::user();
        $student = Students::where('user_id', $user->id)->first();

        if (!$student) {
            return redirect()->back()->with('error', 'Student record not found.');
        }

        $data = new Disbursements();

        if ($request->hasFile('uploadfile')) {
            $path = $request->file('uploadfile')->store('assets/fileUploads', 'public');
            $data->uploadfile = $path;
        }

        $data->bookbank_id = $request->bookbank_id;
        $data->bank_name = $request->bank_name;
        $data->student_id = $student->id;

        $data->save();

        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
    // public function show()
    // {
    //     $data = Disbursements::all();
    //     return view('showDis', compact('data'));
    // }


    // public function download(Request $request, $file)
    // {
    //     return response()->download(public_path('assets/' . $file));
    // }

    // public function view($id)
    // {
    //     $data = Disbursements::find($id);
    //     return view('viewDis', compact('data'));
    // }
}
