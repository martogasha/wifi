<?php

namespace App\Http\Controllers;

use App\Mpesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function profile(){
        $mpesas = Mpesa::where('user_id',Auth::id())->get();
        return view('profile',[
            'mpesas'=>$mpesas
        ]);
    }
}
