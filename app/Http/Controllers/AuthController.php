<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function loginGetController(){
        return view('auth.login');
    }

    public function loginPostController(Request $req){
        $validate = $req->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'Please provide an E-mail',
                'email.email' => 'Please provide a valid Email',
                'password.required' => 'Please provide a Password'
            ]
        );

        $user = User::where('email', $req->email)->first();
        if($user){
            if(Hash::check($req->password, $user->password)){
                $req->session()->put('user', $user);
                // switch ($user->type){
                //     case 'customer':
                //         return "Customer";
                        

                //     case 'admin':
                //         return "Admin";


                //     case 'agent':
                //         return "Agent";


                //     default:
                //         return $user;
                // }
                // session()->flush();
                return back();
            }
            else return "Invalid Credential";
        }
        else return "User not found";
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

        $var = new User();
        $var->name = $req->name;
        $var->phone = $req->phone;
        $var->email = $req->email;
        $var->password = Hash::make($req->password);
        $var->save();
        return $req;
    }

    public function signout(){
        session()->flush();
        return redirect()->route('home');
    }
}
