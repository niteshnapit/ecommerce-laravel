<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


// Import Model
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        // return User::where(['email' =>$req->email])->first();

        $user = User::where(['email' =>$req->email])->first();

        if(! $user || Hash::check($req->password, $user->password))
        {
            return "Username or Password is not matched";
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
