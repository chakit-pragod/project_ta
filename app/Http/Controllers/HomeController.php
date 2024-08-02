<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announce;
use Illuminate\Support\Facades\Log;



class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $announces = Announce::orderBy('created_at', 'desc')->get();
        return view('adminHome', compact('announces'));
    }

    public function showAnnouncements()
    {
        $announces = Announce::all(); // Fetch all announcements
        return view('home', compact('announces'));
    }

    public function addAnnounce(Request $request) {
        Log::info('Request received', $request->all());
    
        try {
            $announce = Announce::create([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]);
            Log::info('Announcement created', ['id' => $announce->id]);
            return response()->json(['message' => 'ประกาศถูกเพิ่มเรียบร้อยแล้ว']);
        } catch (\Illuminate\Database\QueryException $e) {
            Log::error('Database error', ['error' => $e->getMessage(), 'sql' => $e->getSql(), 'bindings' => $e->getBindings()]);
            return response()->json(['message' => 'เกิดข้อผิดพลาดในการบันทึกข้อมูล'], 500);
        } catch (\Exception $e) {
            Log::error('Error creating announcement', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return response()->json(['message' => 'เกิดข้อผิดพลาด: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function teacherHome()
    {
        return view('teacherHome');
    }


}