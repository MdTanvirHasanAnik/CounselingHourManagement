<?php

namespace App\Http\Controllers;
use App\User;
use App\FacultyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacultyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {      

        $user = Auth::user();
        
        user::FacultyProfile()->create(
            [
                'designation' => $r['designation'],
                 'department' => $r['department'], 
                 'area_of_interest' => $r['area_of_interest'], 
                 'mobile_no' => $r['mobile_no'], 
                 
            ]
            

        );
        return "done";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FacultyProfile  $facultyProfile
     * @return \Illuminate\Http\Response
     */
    public function show(FacultyProfile $facultyProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FacultyProfile  $facultyProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(FacultyProfile $facultyProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FacultyProfile  $facultyProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FacultyProfile $facultyProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FacultyProfile  $facultyProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacultyProfile $facultyProfile)
    {
        //
    }
}
