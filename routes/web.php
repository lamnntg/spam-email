<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WebController;
use App\Models\Customer;
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

Route::get('/', [WebController::class, 'index'])->name('web.home');


Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('home', [CustomerController::class, 'index'])->name('home');
    Route::get('clear-users', 'App\Http\Controllers\CustomerController@clearUsers')->name('clear.customers');
    Route::get('delete-user/{customer_id}', [CustomerController::class, 'deleteCustomer'])->name('delete.customer');

    Route::post('import-file', 'App\Http\Controllers\CustomerController@import')->name('import.file');
    Route::post('send-email', 'App\Http\Controllers\CustomerController@sendEmail')->name('send.email');
    Route::get('content-email', 'App\Http\Controllers\CustomerController@contentEmail')->name('content.email');

    Route::get('content-email-amazon', [CustomerController::class, 'emailAmazonSes'])->name('content.emailAmazon');
    Route::post('send-email-amazon', [CustomerController::class, 'sendEmailAmazon'])->name('send.emailAmazon');

    Route::get('/oauth/gmail/callback', function (){
        LaravelGmail::makeToken();
        return redirect()->route('content.email');
    })->name('token.email');

    Route::get('/oauth/gmail/logout', function (){
        LaravelGmail::logout(); //It returns exception if fails
        return redirect()->to('/admin');
    });
});

Route::get('/oauth/gmail', function (){
    return LaravelGmail::redirect();
})->name('gmail.login');

require __DIR__.'/auth.php';
