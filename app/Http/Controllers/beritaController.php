<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class beritaController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            $berita = DB::table('chickenNews')->get();
            return view('berita',[
                "email"=>$request->session()->get('email'),
                "berita" => $berita,
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
            return view('tambahberita',[
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
        $request->file('gambar')->move("images/berita/", $fileName);
        $fileName   = 'images/berita/'.$fileName;

        $id = DB::table('chickenNews')->insertGetId(
            [
                'judul' => $request->judul,
                'isiBerita' => $request->isiBerita,
                'display' => $request->display,
                'urlImage' => $fileName
            ]
        );
        return redirect('/berita');
    }

    public function hapus($id){
        $berita = DB::table('chickenNews')->where(['id' => $id])->first();
        DB::table('chickenNews')->where('id', '=', $id)->delete();
        unlink($berita->urlImage);
        return redirect('/berita');
    }

    public function edit(Request $request,$id){
        if($request->session()->has('email')){
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            $berita = DB::table('chickenNews')->where(['id' => $id])->first();
            return view('editberita',[
                "email" => $request->session()->get('email'),
                "berita" => $berita,
                "tokenLogin" => $dataToken[0]->token
            ]);
        }else{
            return redirect('/loginPage');
        }
    }

    public function aksiedit(Request $request,$id){
        $berita = DB::table('chickenNews')->where(['id' => $id])->first();
        if($request->file('gambar')){
            date_default_timezone_set('Asia/Jakarta');
            $fileName   = date('FYhisA').'.jpg';
            $request->file('gambar')->move("images/berita/", $fileName);
            $fileName   = 'images/berita/'.$fileName;
            unlink($berita->urlImage);
        } else {
            $fileName = $berita->urlImage;
        }

        DB::table('chickenNews')
            ->where('id', $id)
            ->update([
                'judul' => $request->judul,
                'isiBerita' => $request->isiBerita,
                'display' => $request->display,
                'urlImage' => $fileName
            ]);
        return redirect('/berita');
    }
}
