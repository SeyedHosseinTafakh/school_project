<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $fillable =['name','last_name','code_melli','name_mostaar','tarikh_tavalod','serial_shenasname','roosta_tavalod','ostane_tavalod','shahrestan_tavalod','din','mazhab','address_daghigh','address_ostan','chandomin_bachehye_khanevade','email','code_posti','mahale_sodoor_ostan','mahale_sodoor_shahrestan','mahale_sodoor_shahrestan','mahale_sodoor_bakhsh','phone_manzel',
        'esme_phone_zaroori','phone_zaroori_sabet',
        'phone_zaroori_sabet','phone_zaroori_hamrah',
        'phone_zaroori_nesbat_ba_daneshamooz',
        'shenasname_harf','shenasname_adad','shenasname_raghami'];


    public function payments(){
        return $this->hasMany('App\Resid','student_id');
    }
}
