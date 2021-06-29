<?php

namespace App\Http\Controllers;

use App\Imports\ImportUser;
use App\Jobs\SendEmail;
use App\Jobs\SendEmailAmazon;
use App\Models\Customer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Mail;
use Dacastro4\LaravelGmail\Facade\LaravelGmail;
class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('index', compact('customers'));
    }

    public function import()
    {
        try {
            Excel::import(new ImportUser, request()->file('file'));
        } catch (\Throwable $th) {
            return back()->with('failed', 'Upload File Failed');
        }
        return back()->with('sucssess', 'Upload File Success');
    }

    public function contentEmail()
    {
        if (!LaravelGmail::check()) {
            return redirect()->Route('dashboard')->with('failed', 'Đăng nhập Gmail trước');
        }
        return view('mails.input-content');
    }

    public function emailAmazonSes()
    {
        return view('mails.input-content-amazon-ses');
    }

    public function sendEmailAmazon(Request $request)
    {
        set_time_limit(300);
        $customers = Customer::all();
        $data = [
            'subject' => $request->subject,
            'type' => $request->type_email,
            'content' => 'has been created!',
        ];

        SendEmailAmazon::dispatch($data, $customers)->delay(now()->addSeconds(0));
        return redirect()->Route('home')->with('sucssess', 'Send Email Success');
    }

    public function sendEmail(Request $request)
    {
        set_time_limit(300);
        $customers = Customer::all();
        $data = [
            'subject' => $request->subject,
            'type' => 'Create task',
            'content' => 'has been created!',
        ];

        SendEmail::dispatch($data, $customers)->delay(now()->addSeconds(0));
        return redirect()->Route('home')->with('sucssess', 'Send Email Success');
    }

    public function clearUsers()
    {   $customers = Customer::all();
        try {
            foreach ($customers as $key => $customer) {
                $customer->delete();
            }
        } catch (\Throwable $th) {
            return back()->with('failed', 'Clear Users Failed');
        }
        return back()->with('sucssess', 'Clear Users Success');
    }
}
