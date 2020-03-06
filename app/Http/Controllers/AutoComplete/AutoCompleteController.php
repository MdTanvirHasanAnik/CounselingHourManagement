<?php

namespace App\Http\Controllers\AutoComplete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;

class AutoCompleteController extends Controller
{   
    public function facultycomplete(Request $request)

  {        
      $user = DB::select('select * from users where userType= ?', ["faculty"]);
           $data = json_encode($user);
           return $user;

            
    } 
    //
}
