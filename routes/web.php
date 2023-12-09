<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('send/email', function(){

    $send_mail = 'test@gmail.com';

    dispatch(new App\Jobs\SendEmailQueueJob($send_mail));

    dd('send mail successfully !!');
});
