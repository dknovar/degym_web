<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Clases extends Model
{
    //
    protected $table ='class';
    protected $fillable =['user_id',
                        'class_name',
                        'class_description',
                        'class_duration',
                        'class_image'];
    
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
