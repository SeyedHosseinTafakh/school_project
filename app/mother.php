<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mother extends Model
{
    //
    protected $fillable =[
        'name',
        'family',
        'code_melli',
        'job',
        'phone_number',
        'education',
        'work_phone',
        'work_address',
    ];
}
