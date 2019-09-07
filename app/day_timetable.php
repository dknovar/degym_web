<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class day_timetable extends Model
{
    //
    public function det_timetable(){
        return $this->hasMany('App\Det_timetable', 'day_timetable_id');
    }
}
