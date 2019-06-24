<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function login(Request $request){
        if(!$request->session()->has('email')){
            if (\Request::isMethod('get')){
                return view('login');
            }else if(\Request::isMethod('post')){
                if($request->has('masuk')){
                    $email      = $request->input('email');
                    $passwd     = $request->input('password');
                    $cek_login  = DB::table('loginUser')->where([
                        'email'=>$email,
                        'password'=>$passwd,
                    ]);
                    if ( $cek_login->count()> 0){
                        $token = bin2hex(random_bytes(16));
                        $cek_login->update([
                            'token'=>$token
                            ]);
                        $request->session()->put('email', $email);
                        return redirect('/');
                    }else{
                        return redirect('/loginPage');
                    }

                }
            }

        }
        else{
            return redirect('/');
        }
    }
}
