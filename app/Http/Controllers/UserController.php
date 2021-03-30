<?php

namespace App\Http\Controllers;

use App\Imports\ImportUser;
use App\Jobs\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Mail;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
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
        return view('mails.input-content');
    }

    public function sendEmail(Request $request)
    {
        $users = User::all();
        $data = [
            'subject' => $request->subject,
            'type' => 'Create task',
            'content' => 'has been created!',
        ];
        SendEmail::dispatch($data, $users)->delay(now()->addSeconds(0));
        return redirect()->Route('home')->with('sucssess', 'Send Email Success');
    }

    public function clearUsers()
    {   $users = User::all();
        try {
            foreach ($users as $key => $user) {
                $user->delete();
            }
        } catch (\Throwable $th) {
            return back()->with('failed', 'Clear Users Failed');
        }
        return back()->with('sucssess', 'Clear Users Success');
    }
}
