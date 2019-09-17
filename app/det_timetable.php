<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class det_timetable extends Model
{
    //
    protected $table ='det_timetable';
    protected $fillable =['day_timetable_id',
                        'image_det_timetable',
                    ];

    public function timetable(){
        return $this->hasMany('App\Timetable', 'det_timetable_id');
    }
    public function day_timetable(){
        return $this->belongsTo('App\Day_timetable','day_timetable_id');
    }
}
