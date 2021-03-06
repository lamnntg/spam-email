<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WebController;
use Dacastro4\LaravelGmail\Facade\LaravelGmail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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



Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('content-email', 'App\Http\Controllers\CustomerController@contentEmail')->name('content.email');

    Route::get('content-email-amazon', [CustomerController::class, 'emailAmazonSes'])->name('content.emailAmazon');
    Route::post('send-email-amazon', [CustomerController::class, 'sendEmailAmazon'])->name('send.emailAmazon');

    Route::get('/oauth/gmail', function (){
        return LaravelGmail::redirect();
    })->name('gmail.login');

    Route::get('/oauth/gmail/callback', function (){
        LaravelGmail::makeToken();
        return redirect()->route('content.email');
    })->name('token.email');

    Route::get('/oauth/gmail/logout', function (){
        LaravelGmail::logout(); //It returns exception if fails
        return redirect()->to('/admin');
    });
});


require __DIR__.'/auth.php';
