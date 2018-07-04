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

Route::get('/', function () {
//    return view('welcome');
});


Route::get('/from','formController@index');
Route::post('/from','formController@storeData')->name('store_from');


Route::get('/admin','AdminControllerPanel@index');
Route::post('/admin','AdminControllerPanel@login')->name('login');






























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



route::get('/2',function (Zarinpal\Zarinpal $zarinpal){
    $payment = [
        'Authority' => Input::get('Authority'), // $_GET['Authority']
        'Status'    => Input::get('Status'),    // $_GET['Status']
        'Amount'    => 5000
    ];
    $response = $zarinpal->verify($payment);
    if($response['Status'] === 100) {
        return 'Payment was successful,
        RefID: '.$response['RefID'].',
        Message: '.$response['Message'];
    }
    return 'Error,
    Status: '.$response['Status'].',
    Message: '.$response['Message'];
})->name('name');