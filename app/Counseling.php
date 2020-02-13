<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counseling extends Model
{
    protected $fillable = [
        'id', 'startTime', 'endTime' , 'day', 'user_id' ,'updated_at', 'created_at'
    ];
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
