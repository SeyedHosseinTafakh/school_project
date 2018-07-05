<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resid extends Model
{
    //
    protected $fillable=['amount','status','zarin_pal_RefId','zarin_pal_Message','student_id','tozihat','tarikh_pardakht','ravesh_pardakht',''];

    public function student(){
        return $this->belongsTo('App\student','student_id');
    }
}
