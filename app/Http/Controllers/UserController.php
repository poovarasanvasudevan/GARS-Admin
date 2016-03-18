<?php

namespace App\Http\Controllers;

use App\Helpers\DBHelpers;
use App\Http\Requests;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use Setting;

class UserController extends Controller
{
    //
    public function validateuser()
    {
        $username = Input::get('username');
        $password = Input::get('password');

        $user = User::where(['abhyasiid' => strtolower($username), "password" => md5($password)])->get();

        if ($user->count() == 1) {
            $user = $user->first();
            Auth::loginUsingId($user->id);


            DBHelpers::setActivity('logged In','User has logged in..');
            return response()->json(DBHelpers::success());
        } else {
            return response()->json(DBHelpers::failure());
        }
    }

    public function getProfile($abhyasiid)
    {
        $abhyasiid = strtolower($abhyasiid);
        $user = User::where(['abhyasiid' => $abhyasiid])->get();
        if ($user->count() == 1) {
            $user = $user->first();
            $user['result'] = true;

            return response()->json($user);
        } else {
            return response()->json(DBHelpers::failure());
        }
    }
}
