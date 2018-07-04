<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AdminControllerPanel extends Controller
{
    public function index(){
        $name = \session('name');
        $pass = \session('password');
        if (isset($name) and isset($pass)){
//            $user = User::where('name',$name);
//            if (empty($user)){
//                \session()->flush();
//                return view('admin.login');
//            }
//            if ($user->password === $pass){
                //TODO::have to make admin panel for this part
                return view('admin.index_panel');
//            }
        }
        return view('admin.login');

    }


    public function login(Request $request){
        $this->validate($request ,[
            'name'=>'required',
            'password'=>'required'
            ]);
        $request->session()->put('name',$request['name']);
        $request->session()->put('password',$request['password']);
//        $values = $request->session()->get('password');

        return "view is not ready yet";
    }
}
