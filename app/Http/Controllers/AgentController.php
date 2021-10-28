<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Agent;

class AgentController extends Controller
{
    //
    
    public function staffaddController(Request $req){
        $validate = $req->validate(
            [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'branch' => 'required'
            ],
            [
                'name.required' => 'Please provide your Name',
                'phone.required' => 'Please provide a Phone number',
                'email.required' => 'Please provide an Email',
                'email.email' => 'Please provide a valid Email',
                'password.required' => 'Please provide a Password',
                'password.min' => 'Password is too short',
                'branch.required' => 'Please provide a Branch name'
            ]
        );

        try{
            $user = new User();
            $user->name = $req->name;
            $user->phone = $req->phone;
            $user->email = $req->email;
            $user->type = $req->type;
            $user->password = Hash::make($req->password);
            $user->save();

            $agent = new Agent();
            $agent->branch_id = $req->branch;
            $agent->user_id = $user->id;
            $agent->save();
            return redirect()->route('admin.get', ['page'=>'stafflist']);
        }
        catch(Exception $e){
            return "Something went wrong";
        }
    }

    public function staffUpdate(Request $req){
        $agent = Agent::find($req->id);
        $user = User::find($agent->user->id);

        $user->name = $req->name;
        $user->phone = $req->phone;
        $user->email = $req->email;
        $user->save();

        $agent->branch_id = $req->branch;
        $agent->save();

        return redirect()->route('admin.get', ['page'=>'stafflist']);
    }

    public function staffDelete(Request $req){
        $agent = Agent::find($req->id);
        $user = User::find($agent->user->id);
        $agent->delete();
        $user->delete();
        return redirect()->route('admin.get', ['page'=>'stafflist']);
    }
}
