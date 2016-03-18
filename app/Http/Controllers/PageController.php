<?php

namespace App\Http\Controllers;

use App\Helpers\DBHelpers;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Setting;


class PageController extends Controller
{
    //

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

    public function logout()
    {
        Auth::logout();
        return response()->redirectTo("");
    }
}
