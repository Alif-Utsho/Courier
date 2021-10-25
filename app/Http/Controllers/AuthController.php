<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginGetController(){
        return view('auth.login');
    }

    public function loginPostController(Request $req){
        $validate = $req->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ],
            [
                'email.required' => 'Please provide an Email',
                'email.email' => 'Please provide a valid Email',
                'password.required' => 'Please provide a Password',
                'password.min' => 'Password is too short'
            ]
        );
        return $req;
    }

    public function registrationGetController(){
        return view('auth.registration');
    }

    public function registrationPostController(Request $req){
        $validate = $req->validate(
            [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6'
            ],
            [
                'name.required' => 'Please provide your Name',
                'phone.required' => 'Please provide a Phone number',
                'email.required' => 'Please provide an Email',
                'email.email' => 'Please provide a valid Email',
                'password.required' => 'Please provide a Password',
                'password.min' => 'Password is too short'
            ]
        );
        return $req;
    }
}
