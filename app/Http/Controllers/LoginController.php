<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function actionlogin(Request $req){
        $credential = $req->only('username','password');
        if (Auth::attempt($credential)) {
            return redirect('dashboard');
        }else{
            return redirect()->back();
        }
    }
}
