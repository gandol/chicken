<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class gojekController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            $tokenGojek = DB::table('integrasiGojek')->get();
            return view('gojek',[
                "email"=>$request->session()->get('email'),
                "gojek" => $tokenGojek,
                "tokenLogin"=>$dataToken[0]->token
            ]);
        }else{
            return redirect('/loginPage');
        }
    }

    public function edit(Request $request,$id){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            $tokenGojek = DB::table('integrasiGojek')->where(['id'=>$id])->get();
            // dd($tokenGojek[0]);
            return view('gojekedit',[
                "email"=>$request->session()->get('email'),
                "gojek" => $tokenGojek[0],
                "tokenLogin"=>$dataToken[0]->token
            ]);
        }else{
            return redirect('/loginPage');
        }
    }
    public function aksiEdit(Request $request){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            DB::table('integrasiGojek')->where('id',$request->id)->update([
                "token"=>$request->token,
                "latitud"=>$request->latitud,
                "longitud"=>$request->longitud
            ]);
            return redirect('/gojek');
        }else{
            return redirect('/loginPage');
        }
    }
}
