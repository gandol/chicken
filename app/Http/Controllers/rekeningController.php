<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class rekeningController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            $infoBank = DB::table('bank')->get();
            return view('rekening',[
                "email"=>$request->session()->get('email'),
                "bank" => $infoBank,
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
            $infoBank = DB::table('bank')->where(['id'=>$id])->get();
            return view('rekeningedit',[
                "email"=>$request->session()->get('email'),
                "bank" => $infoBank[0],
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
            DB::table('bank')->where('id',$request->id)->update([
                "rekening"=>$request->nomorRekening,
                "bank"=>$request->namaBank,
                "nama"=>$request->atasNama
            ]);
            return redirect('/rekening');
        }else{
            return redirect('/loginPage');
        }
    }
}
