<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class timetable extends Model
{
    //
    protected $table ='timetable';
    
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function det_timetable(){
        return $this->belongsTo('App\Det_timetable','det_timetable_id');
    }
}
