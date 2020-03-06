<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Rules\Emailtype;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo(){
        
        // User role
        $role = Auth::user()->userType; 
        
        // Check user role
        switch ($role) {
            case 'faculty':
                    return '/facultyhome';
                break;
            case 'student':
                    return '/home';
                break; 
            default:
                    return '/login'; 
                break;
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'uid' => ['required', 'string', 'max:255', 'unique:users'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', new Emailtype],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        $find   = '@diu.edu.bd';
        $find2 = '@daffodilvarsity.edu.bd';

        if (strpos($data['email'], $find) !== false) {
            $type = 'student';

        }


        if (strpos($data['email'], $find) !== false) {
            $arr = array('cse', 'bba', 'ged', 'eee' , 'swe' , 'law' );
            foreach ($arr as $value) {
                if ( strpos($data['email'], $value) !== false){
                    $type = 'faculty';
                } 
               
            }
            

        } else if (strpos($data['email'], $find2) !== false) {
            $type = 'faculty';
        }


        return User::create([

            'name' => $data['name'],
            'uid' => $data['uid'],

            'email' => $data['email'],

            'userType' => $type,
            'password' => Hash::make($data['password']),
        ]);
    }
}
