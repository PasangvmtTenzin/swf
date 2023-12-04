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
        else{
            return view('User.home');
        }
    }

    public function auth()
    {
        if (auth()->check()) {
            // User is logged in
            return view('User.home');
        } else {
            // User is not logged in
            return view('User.dashboard', [
                'loginRoute' => route('login'),
                'registerRoute' => route('register'),
            ]);
        }
    }
    
}
