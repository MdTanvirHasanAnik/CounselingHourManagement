<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Counseling;
use App\User;

use Auth;
use Exceptions;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CounselingController extends Controller
{


    public function createCounseling(Request $r)
    {


        
        Counseling::create([
            'startTime' => $r['startTime'],
            'endTime' => $r['endTime'],
            'day' => $r['day'],
            'user_id' => $r['user_id'],
        ]);



        return redirect()->back();
    }
    public function deleteCounseling(Request $r)
    {   
        
        $ls = Counseling::findOrFail($r['cid']);
        $ls->delete();
        $status ="success";
        return back()->with('status', $status);
    }
    
    public function getcounseling(Request $request){


        
        $user = DB::table('users')->where('email', $request['email'])->first();
        if($user  === null){
            $user = DB::table('users')->where('uid', $request['uid'])->first();
            if ($user === null ){
                return redirect()->back()->with('notfound', 'Email or ID not found!');
                
            }

            
        }
        $counselings = Counseling::get()->where('user_id', $user->id );
        
       
        
      
        return view('student/getcounseling', compact('counselings'));
    }




    
/* 
    public function slotting($startTime,  $endTime, $no_student)

    {
        $start = strtotime($startTime);
        $end = strtotime($endTime);
        $diff = $end - $start;

        $min = $diff / 60;
        $slot = $min / $no_student;
        $hour = $min / 60;

        echo "Total " . $min . " minutes. or" . $hour . " hour. You can give each student " . number_format($slot,) . " miniutes <br>";
        $interval = "+" . number_format($slot, 0) . " minutes";
        echo $interval;
        $next = strtotime("" . $interval, strtotime($startTime));
        echo date('h:i a', $next);
        for ($i = 1; $i < $no_student; $i++) {
            $next = strtotime("" . $interval, $next);
            echo date('h:i a', $next);
        }
    } */
}
