<?php

namespace App\Http\Controllers;

use App\Helpers\DBHelpers;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Setting;


class PageController extends Controller
{
    //


    /**
     * PageController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (Auth::check()) {
            return response()->redirectTo("dashboard");
        } else {
            return response()->view("welcome");
        }
    }

    public function forget()
    {
        return response()->view('forget');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            DBHelpers::setActivity('dashboard visited','User has visited dashboard..');
            return response()->view("dashboard");
        } else {
            return response()->redirectTo("");
        }
    }


    public function profile(){
        if (Auth::check()) {
            return response()->view("profile");
        } else {
            return response()->redirectTo("");
        }
    }

    public function logout()
    {
        Auth::logout();
        return response()->redirectTo("");
    }
    public function demo() {
        Mail::send('mail.welcome', [], function ($message) {
            $message->from('us@example.com', 'Laravel');
            $message->to('poovarasan@acsins.com')->cc('bar@example.com');
        });

        return response()->view('mail.welcome');
    }
}
