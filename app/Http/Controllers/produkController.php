<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class produkController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            $produk = DB::table('produk')->get();
            return view('produk',[
                "email"=>$request->session()->get('email'),
                "produk" => $produk,
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
            return view('tambahproduk',[
                "email"=>$request->session()->get('email'),
                "tokenLogin"=>$dataToken[0]->token
            ]);
        }else{
            return redirect('/loginPage');
        }
    }

    public function aksitambah(Request $request){
        // dd($request->all());
        date_default_timezone_set('Asia/Jakarta');
        $fileName   = date('FYhisA').'.jpg';
        $request->file('gambar')->move("images/produk/", $fileName);
        $fileName   = 'images/produk/'.$fileName;

        $id = DB::table('produk')->insertGetId(
            [
                'nama' => $request->nama, 
                'harga' => $request->harga,
                'linkPhoto' => $fileName        
            ]
        );
        return redirect('/produk');
    }

    public function hapus($id){
        $produk = DB::table('produk')->where(['id' => $id])->first();
        DB::table('produk')->where('id', '=', $id)->delete();
        unlink($produk->linkPhoto);
        return redirect('/produk');
    }

    public function edit(Request $request,$id){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            $produk = DB::table('produk')->where(['id' => $id])->first();
            return view('editproduk',[
                "email" => $request->session()->get('email'),
                "produk" => $produk,
                "tokenLogin" => $dataToken[0]->token
            ]);
        }else{
            return redirect('/loginPage');
        }
    }

    public function aksiedit(Request $request,$id){
        $produk = DB::table('produk')->where(['id' => $id])->first();
        if($request->file('gambar')){
            date_default_timezone_set('Asia/Jakarta');
            $fileName   = date('FYhisA').'.jpg';
            $request->file('gambar')->move("images/produk/", $fileName);
            $fileName   = 'images/produk/'.$fileName;
            unlink($produk->linkPhoto);
        } else {
            $fileName = $produk->linkPhoto;
        }

        DB::table('produk')
            ->where('id', $id)
            ->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'linkPhoto' => $fileName
            ]);
        return redirect('/produk');
    }
}
