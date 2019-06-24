<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class transaksiController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            if(isset($_GET['from']) && isset($_GET['to']) && $_GET['from'] != '' && $_GET['to'] != ''){
                $transaksi = DB::table('transaksi')
                    ->join('user', 'user.id', '=', 'transaksi.userId')
                    ->select('*')
                    ->whereBetween('datamasuk',[date($_GET['from']),date($_GET['to'])])
                    ->get();
            } else {
                $transaksi = DB::table('transaksi')
                    ->join('user', 'user.id', '=', 'transaksi.userId')
                    ->select('*')
                    ->get();
            }
            return view('transaksi',[
                "email"=>$request->session()->get('email'),
                "transaksi" => $transaksi,
                "tokenLogin"=>$dataToken[0]->token
            ]);
        }else{
            return redirect('/loginPage');
        }
    }

    public function aksiedit(Request $request,$id){
        DB::table('transaksi')
            ->where('idTransaksi', $id)
            ->update([
                'statusTransaksi' => $request->statusTransaksi
            ]);
        return redirect('/transaksi');
    }

    public function edit(Request $request,$id){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            $transaksi = DB::table('transaksi')
                ->join('user', 'user.id', '=', 'transaksi.userId')
                ->select('*')
                ->where(['idTransaksi' => $id])->first();
            return view('edittransaksi',[
                "email" => $request->session()->get('email'),
                "transaksi" => $transaksi,
                "tokenLogin" => $dataToken[0]->token
            ]);
        }else{
            return redirect('/loginPage');
        }
    }
}
