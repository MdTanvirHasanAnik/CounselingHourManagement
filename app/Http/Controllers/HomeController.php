<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE Illuminate\Support\Facades\DB;
use App\Counseling;
Use Illuminate\Support\Facades\Auth;


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
        return view('student.student-profile');
    }

    public function facultyHome()
    {   
        $user = Auth::user();
        $data = $user->Counseling;
        //$data = Counseling::where('user_id', '1')->get(); 

        return view('faculty.facultyhomepage' , compact('data') );
    }



}
