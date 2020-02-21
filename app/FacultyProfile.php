<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyProfile extends Model
{
    protected $fillable = [
        'name', 'designation', 'department', 'area_of_interest' , 'user_id'
    ];

    public function User(){
        return $this->belongsTo('App\User');

    }

}
