<?php

namespace App\Http\Controllers;

use App\father;
use App\mother;
use App\student;
use App\transaction;
use Illuminate\Http\Request;
use Zarinpal\Zarinpal;

class formController extends Controller
{
    //

    public function index(){
        return view('from');
    }

    public function storeData(Request $data){
//        return $data['count-children'];
        $student_data = [
            'name'=>$data['name'],
            'last_name'=>$data['family'],
//            'code_melli'=>$data['codemeli'],
            'code_melli'=>'codemeli',
            'name_mostaar'=>$data['name-mostaar'],
            'tarikh_tavalod'=>$data['year'] . $data['month'] . $data['dat'],
            'mahe_tavalod'=>$data['month'],
            'ostane_tavalod'=>$data['ostan'],
            'shahrestan_tavalod'=>$data['shahrestan'],
            'roosta_tavalod'=>$data['rosta'],
            'mahale_sodoor_ostan'=>$data['sodoreshansame-ostan'],
            'mahale_sodoor_shahrestan'=>$data['sodoreshansame-shahrestan'],
            'mahale_sodoor_bakhsh'=>$data['sodoreshansame-rosta'],
            'din'=>$data['din'],
            'mazhab'=>$data['mazhab'],
            'address_daghigh'=>$data['adress-address'],
            'address_ostan'=>$data['adress-ostan'],
            'code_posti'=>$data['adress-codposti'],
            'phone_manzel'=>$data['adress-phone-home'],
            'phone_zaroori_sabet'=>$data['phone-necessary-tel'],
            'esme_phone_zaroori'=>$data['phone-necessary-name'],
            'phone_zaroori_hamrah'=>$data['phone-necessary-phone'],
            'phone_zaroori_nesbat_ba_daneshamooz'=>$data['phone-necessary-nesbat'],
            'chandomin_bachehye_khanevade'=>$data['count-childern'],
            'shenasname_raghami'=>$data['shenasname-raghami'],
            'shenasname_adad'=>$data['shenasname-adad'],
            'shenasname_harf'=>$data['shenasname-harf'],
            'email'=>'email',

        ];

        $father_data = [
            'name'=>$data['father-name'],
            'family'=>$data['father-fammily'],
            'phone_number'=>$data['father-phone'],
            'job'=>$data['father-job'],
            'education'=>$data['father-education'],
//            'code_melli'=>$data['father-code-melli'],
            'work_address'=>$data['father-adress-job'],
            'work_phone'=>$data['father-adress-phone'],
            'code_melli'=>$data['father-codemelli']
        ];

        $mother_data = [
            'name'=>$data['mother-name'],
            'family'=>$data['mother-fammily'],
            'phone_number'=>$data['mother-phone'],
            'job'=>$data['mother-job'],
            'education'=>$data['mother-education'],
//            'code_melli'=>$data['father-code-melli'],
            'work_address'=>$data['mother-adress-job'],
            'work_phone'=>$data['mother-adress-phone'],
            'code_melli'=>$data['mother-codemelli'],
        ];


//        student::create($student_data);
//        father::create($father_data);
        mother::create($mother_data);
        return 1;

    }



    public function payement(){
        return view('payment');
    }
    public function payment_r( Request $request, Zarinpal $zarinpal ){
//        $zarinpal = \Zarinpal\Zarinpal::class;
//        return 'hi';
        $payment = [
            'CallbackURL' => route('verif'), // Required
            'Amount'      => $request->student_amount,                    // Required
            'Description' => 'a short description',   // Required
            'Email'       => $request->email ? $request->email : null,    // Optional
            'Mobile'      => $request->phone ? $request->phone : null,           // Optional
        ];
//        return $payment;
        $response = $zarinpal->request($payment);
//        return $response;
        if($response['Status'] === 100) {
            $authority = $response['Authority'];
            return $zarinpal->redirect($authority);
        }

        return 'Error,
    Status: '.$response['Status'].',
    Message: '.$response['Message'];
    }

//    public function verify()

    public function verify(Zarinpal $zarinpal) {
        $input = \request()->all();
        $tr = transaction::where('Authority',$input['Authority'])->first();
        $payment = [
            'Authority' => \request('Authority'), // $_GET['Authority']
            'Status'    => \request('Status'),    // $_GET['Status']
            'Amount'    => $tr->amount,
        ];
        $response = $zarinpal->verify($payment);
        if($response['Status'] === 100) {
            $answer = $response['Message'];
            return view('payement_answer',compact('answer'));
//            return 'Payment was successful,
//            RefID: '.$response['RefID'].',
//            Message: '.$response['Message'];
        }
        $answer = $response['Message'];
        return view('payement_answer' , compact('answer'));
//        return 'Error,
//        Status: '.$response['Status'].',
//        Message: '.$response['Message'];
    }
//
//    public function request(Zarinpal $zarinpal , Request $request) {
//        $payment = [
//            'CallbackURL' => route('name'), // Required
//            'Amount'      => 5000,                    // Required
//            'Description' => 'a short description',   // Required
//            'Email'       => 'saeedp47@gmail.com',    // Optional
//            'Mobile'      => '0933xxx7694'            // Optional
//        ];
//        $response = $zarinpal->request($payment);
//        if($response['Status'] === 100) {
//            $authority = $response['Authority'];
//            return $zarinpal->redirect($authority);
//        }
//        return 'Error,
//    Status: '.$response['Status'].',
//    Message: '.$response['Message'];
//    }
}
