<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('email')){
            $jumlahPengguna     = DB::table('user')->count();
            $transaksi          = DB::table('transaksi')->count();
            $produk             = DB::table('produk')->count();
            $news               = DB::table('chickenNews')->count();
            $dataToken          = DB::table('loginUser')->where([
                'email'=>$request->session()->get('email')
                ])->get();
            return view('home',[
                "email"=>$request->session()->get('email'),
                "jumlahPengguna"=>$jumlahPengguna,
                "jumlahProduk"=>$produk,
                "jumlahTransaksi"=>$transaksi,
                "jumlahBerita"=>$news,
                "tokenLogin"=>$dataToken[0]->token
            ]);
        }else{
            return redirect('/loginPage');
        }
    }

    public function logout(Request $request){
        if($request->session()->has('email')){
            $request->session()->flush();
            return redirect('/loginPage');
        }else{
            return redirect('/loginPage');
        }
    }

    public function cartBatang(Request $request){
        $token  = $request->header('Token');
        if($token!=''){
            $cekToken   = DB::table('loginUser')->where("token",$token)->count();
            if($cekToken>0){
                $dataTransaksi =[
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),1)->whereNotIn('statusTransaksi',["completed"])->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),2)->whereNotIn('statusTransaksi',["completed"])->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),3)->whereNotIn('statusTransaksi',["completed"])->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),4)->whereNotIn('statusTransaksi',["completed"])->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),5)->whereNotIn('statusTransaksi',["completed"])->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),6)->whereNotIn('statusTransaksi',["completed"])->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),7)->whereNotIn('statusTransaksi',["completed"])->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),8)->whereNotIn('statusTransaksi',["completed"])->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),19)->whereNotIn('statusTransaksi',["completed"])->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),10)->whereNotIn('statusTransaksi',["completed"])->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),11)->whereNotIn('statusTransaksi',["completed"])->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),12)->whereNotIn('statusTransaksi',["completed"])->count(),
                ];
                $datakomplit =[
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),1)->where('statusTransaksi',"completed")->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),2)->where('statusTransaksi',"completed")->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),3)->where('statusTransaksi',"completed")->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),4)->where('statusTransaksi',"completed")->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),5)->where('statusTransaksi',"completed")->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),6)->where('statusTransaksi',"completed")->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),7)->where('statusTransaksi',"completed")->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),8)->where('statusTransaksi',"completed")->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),19)->where('statusTransaksi',"completed")->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),10)->where('statusTransaksi',"completed")->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),11)->where('statusTransaksi',"completed")->count(),
                    DB::table('transaksi')->where(DB::raw("MONTH(datamasuk)"),12)->where('statusTransaksi',"completed")->count(),
                ];
                return json_encode([
                    "transaksi"=>$dataTransaksi,
                    "sukses"=>$datakomplit
                ]);
            }

        }
    }

    public function verif(Request $request,$param){
        date_default_timezone_set('Asia/Jakarta');
        if(!empty($param)){
            $cekTokenRegis  = DB::table('registrasiUser')->where([
                'tokenRegis'=>$param,
                'clicked'=>0
            ]);
            if($cekTokenRegis->count()>0){
                $dataToken = $cekTokenRegis->get();
                $userId    = $dataToken[0]->userId;
                $tgl = date_create($dataToken[0]->expired);
                $skrg = date_create();
                $selisih = date_diff($skrg,$tgl);

                if($selisih->i <= 30 && $selisih->h ==0  && $selisih->d ==0 && $selisih->m == 0 && $selisih->y == 0){
                    DB::table('registrasiUser')->where('tokenRegis',$param)->update([
                        'clicked'=>1
                    ]);
                    DB::table('user')->where('id',$userId)->update([
                        'isverifed'=>1
                    ]);
                    return view('verif',[
                        "status"=>"ok",
                        "pesan"=>"Registrasi Berhasil"
                    ]);
                }else{
                    return view('verif',[
                        "status"=>"fail",
                        "pesan"=>"Token Expired"
                    ]);
                }
            }else{
                return view('verif',[
                    "status"=>"fail",
                    "pesan"=>"Registrasi Gagal"
                ]);
            }
        }
    }
}
