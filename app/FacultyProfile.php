<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyProfile extends Model
{
    protected $fillable = [
         'designation', 'department', 'area_of_interest' , 'mobile_no', 'user_id'
    ];

    public function User(){
        return $this->belongsTo('App\User');

    }

}
