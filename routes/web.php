<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Symfony\Component\Console\Input\Input;
//use Zarinpal\Zarinpal;
Route::get('/', function () {
//    return view('welcome');
});


Route::get('/from','formController@index');
Route::post('/from','formController@storeData')->name('store_from');


Route::get('/admin','AdminControllerPanel@index');
Route::post('/admin','AdminControllerPanel@login')->name('login');


Route::get('/admin/resids','AdminControllerPanel@show_resids');
Route::get('/admin/sakhtresids','AdminControllerPanel@sakht_resids');
Route::post('/admin/sakhteresid','AdminControllerPanel@sakhte_resids')->name('login');

route::get('/pardakht','formController@payement');
route::post('/pardakht','formController@payment_r');
route::get('/verif','formController@verify')->name('verif');





























route::get('/1',function (\Zarinpal\Zarinpal $zarinpal){
    $payment = [
        'CallbackURL' => route('name'), // Required
        'Amount'      => 5000,                    // Required
        'Description' => 'a short description',   // Required
        'Email'       => 'saeedp47@gmail.com',    // Optional
        'Mobile'      => '0933xxx7694'            // Optional
    ];
    $response = $zarinpal->request($payment);
    if($response['Status'] === 100) {
        $authority = $response['Authority'];
        return $zarinpal->redirect($authority);
    }
    return 'Error,
    Status: '.$response['Status'].',
    Message: '.$response['Message'];
});


//
//route::get('/2',function (Zarinpal\Zarinpal $zarinpal){
//    $payment = [
//        'Authority' => request('Authority'), // $_GET['Authority']
//        'Status'    => request('Status'),    // $_GET['Status']
//        'Amount'    => 5000
//    ];
//    $response = $zarinpal->verify($payment);
//    if($response['Status'] === 100) {
//        $answer = $response['message'].' شناسه پرداحت ' .$response['RefID'];
//        return view('payement_answer' , compact($answer));
//    }
//    $error = 'عملیات موفقیت امیز نبود'.'\n'.$response['Status'].'\n'.$response['Message'];
//    return 'Error,
//    Status: '.$response['Status'].',
//    Message: '.$response['Message'];
//})->name('name');