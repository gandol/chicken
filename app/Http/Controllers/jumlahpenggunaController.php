<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class jumlahpenggunaController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            $user = DB::table('user')->get();
            return view('jumlahpengguna',[
                "email"=>$request->session()->get('email'),
                "user" => $user,
                "tokenLogin"=>$dataToken[0]->token
            ]);
        }else{
            return redirect('/loginPage');
        }
    }

    public function tambah(Request $request){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            return view('tambahjumlahpengguna',[
                "email"=>$request->session()->get('email'),
                "tokenLogin"=>$dataToken[0]->token
            ]);
        }else{
            return redirect('/loginPage');
        }
    }

    public function aksitambah(Request $request){
        // dd($request->all());
        $id = DB::table('user')->insertGetId(
            [
                'nama' => $request->nama, 
                'email' => $request->email,
                'phone' => $request->phone,
                'passwordUser' => $request->password,
                'isverifed' => $request->isverifed,
                'saldo' => $request->saldo
            ]
        );
        return redirect('/jumlahpengguna');
    }

    public function hapus($id){
        DB::table('user')->where('id', '=', $id)->delete();
        return redirect('/jumlahpengguna');
    }

    public function edit(Request $request,$id){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            $user = DB::table('user')->where(['id' => $id])->first();
            return view('editjumlahpengguna',[
                "email" => $request->session()->get('email'),
                "user" => $user,
                "tokenLogin" => $dataToken[0]->token
            ]);
        }else{
            return redirect('/loginPage');
        }
    }

    public function aksiedit(Request $request,$id){
        DB::table('user')
            ->where('id', $id)
            ->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'phone' => $request->phone,
                'saldo' => $request->saldo,
                'isverifed' => $request->isverifed
            ]);
        return redirect('/jumlahpengguna');
    }
}
