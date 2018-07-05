<?php

namespace App\Http\Controllers;

use App\Resid;
use App\student;
use App\User;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
                $users = student::latest()->get();
//                $users = DB::table('stude')
//                return $users[0]->payments;
                return view('admin.index_panel',compact('users'));
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


    public function show_resids(){
        $resids = DB::table('resids')->limit(20)->get();
        return view('admin.show_resid',compact('resids'));
    }

    public function sakht_resids(){
        return view('admin.sakhte_resid');
    }


    public function sakhte_resids(Request $request){
        $studet = student::where('code_melli','1')->first();
        if (empty($studet)){
            return view('admin.show_resid');
        }
        $status = 0;
        if ($request->raveshPay == "true"){
            $status = 1;
        }
        $resid = [
            'amount'=>$request->amount,
            'tozihat'=>$request->tozihat,
            'student_id'=>$studet->id,
            'ravesh_pardakht'=>$status,
        ];
        Resid::create($resid);
        return redirect('/admin/resids');
    }
}
