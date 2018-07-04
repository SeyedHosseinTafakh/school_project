<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class formController extends Controller
{
    //

    public function index(){
        return view('from');
    }

    public function storeData(Request $data){
        return $data;
    }
}
