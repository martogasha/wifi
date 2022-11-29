<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Register(Request $request){
        $userPhone = User::where('phone',$request->phone)->first();
        $userEmail = User::where('email',$request->email)->first();
        if ($userPhone){
            $output = "";
            $output = '
            <span style="color: red">PHONE NUMBER ALREADY IN USE</span>

            ';
            return response($output);

        }
        elseif ($userEmail){
            $output = "";
            $output = '
            <span style="color: red">EMAIL ADDRESS ALREADY IN USE</span>

            ';
            return response($output);
        }
        else{
            $register = User::create([
                'first_name'=>$request->input('first_name'),
                'last_name'=>$request->input('last_name'),
                'phone'=>$request->input('phone'),
                'email'=>$request->input('email'),
                'subscription'=>$request->input('subscription'),
                'amount'=>$request->input('amount'),
                'time'=>$request->input('time'),
                'role'=>'0',
                'status'=>$request->input('status'),
                'password'=>Hash::make($request->input('password')),
            ]);
            if (Auth::attempt([
                'phone' => $request->phone,
                'password' => $request->password,
            ])){
                $output='';
                $output='ppp';
                return response($output);
            }
        }

    }
    public function Login(Request $request){
        $user = User::where('phone',$request->phone)->first();
        if (Auth::attempt([
            'phone' => $request->phone,
            'password' => $request->password,
        ])){

            return redirect(url('profile'));
        }
        else{
            return redirect()->back()->with('error', 'CREDENTIALS DOES NOT MATCH');
        }

    }
    public function editUser(Request $request){
        $edit = User::find($request->userId);
        $edit->first_name = $request->first_name;
        $edit->last_name = $request->last_name;
        $edit->phone = $request->phone;
        $edit->email = $request->email;
        $edit->subscription = $request->subscription;
        $edit->amount = $request->amount;
        $edit->status = '0';
        $edit->time = $request->time;
        $edit->password = Hash::make($request->password);
        $edit->save();
        return redirect()->back()->with('succcess','PROFILE EDITED SUCCESS');
    }
}
