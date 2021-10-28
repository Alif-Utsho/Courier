<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Branch;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Agent;

class BranchController extends Controller
{
    //
    
    public function branchAddController(Request $req){
        $validate = $req->validate(
            [
                'name' => 'required',
                'city' => 'required',
                'contact' => 'required',
                'street' => 'required',
                'zip' => 'required'
            ],
            [
                'name.required' => 'Please provide a Branch Name',
                'contact.required' => 'Please provide a Contact number',
                'city.required' => 'Please provide a City name',
                'street.required' => 'Please provide a Street',
                'zip.required' => 'Please provide a Zip/Postal Code'
            ]
        );
        $var = new Branch();
        $var->name = $req->name;
        $var->contact = $req->contact;
        $var->city = $req->city;
        $var->street = $req->street;
        $var->zip = $req->zip;
        $var->save();
        return redirect()->route('admin.get', ['page'=>'branch']);
    }

    public function branchUpdate(Request $req){
        $var = Branch::find($req->id);
        $var->name = $req->name;
        $var->contact = $req->contact;
        $var->city = $req->city;
        $var->street = $req->street;
        $var->zip = $req->zip;
        $var->save();
        return redirect()->route('admin.get', ['page'=>'branch']);
    }

    public function branchDelete(Request $req){
        $branch = Branch::where('id', $req->id)->delete();
        return redirect()->route('admin.get', ['page'=>'branch']);
    }

}
