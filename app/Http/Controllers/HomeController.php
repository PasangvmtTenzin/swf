<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{

    public function index(){

        return view('User.dashboard');
    }

    public function redirect(){

        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.home');
        }
        elseif ($usertype=='0') {
            return view('User.home');
        }
        else{
            return view('User.dashboard');
        }
    }
    
}
