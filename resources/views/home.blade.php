@extends('layouts.apps')

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-lg-2 grid-margin stretch-card">
        <div class="card">
          <div class="card-body pb-0">
            <div class="d-flex align-items-center justify-content-between">
              <h2 class="text-success font-weight-bold">{{$jumlahPengguna}}</h2>
              <i class="mdi mdi-account-outline mdi-18px text-dark"></i>
            </div>
          </div>
          <canvas id="newClient"></canvas>
          <div class="line-chart-row-title"><a href="{{url('/jumlahpengguna')}}">Jumlah Pengguna</a></div>
        </div>
      </div>
      <div class="col-lg-2 grid-margin stretch-card">
        <div class="card">
          <div class="card-body pb-0">
            <div class="d-flex align-items-center justify-content-between">
              <h2 class="text-danger font-weight-bold">{{$jumlahProduk}}</h2>
              <i class="mdi mdi-package-variant mdi-18px text-dark"></i>
            </div>
          </div>
          <canvas id="allProducts"></canvas>
          <div class="line-chart-row-title"><a href="{{url('/produk')}}">Produk</a></div>
        </div>
      </div>
      <div class="col-lg-2 grid-margin stretch-card">
        <div class="card">
          <div class="card-body pb-0">
            <div class="d-flex align-items-center justify-content-between">
              <h2 class="text-info font-weight-bold">{{$jumlahTransaksi}}</h2>
              <i class="mdi mdi-file-document-outline mdi-18px text-dark"></i>
            </div>
          </div>
          <canvas id="invoices"></canvas>
          <div class="line-chart-row-title"><a href="{{url('/transaksi')}}">Transaksi</a></div>
        </div>
      </div>
      <div class="col-lg-2 grid-margin stretch-card">
        <div class="card">
          <div class="card-body pb-0">
            <div class="d-flex align-items-center justify-content-between">
              <h2 class="text-warning font-weight-bold">{{$jumlahBerita}}</h2>
              <i class="mdi mdi-newspaper mdi-18px text-dark"></i>
            </div>
          </div>
          <canvas id="projects"></canvas>
          <div class="line-chart-row-title"><a href="{{url('/berita')}}">Berita</a></div>
        </div>
      </div>
      {{-- <div class="col-lg-2 grid-margin stretch-card">
        <div class="card">
          <div class="card-body pb-0">
            <div class="d-flex align-items-center justify-content-between">
              <h2 class="text-secondary font-weight-bold">586</h2>
              <i class="mdi mdi-cart-outline mdi-18px text-dark"></i>
            </div>
          </div>
          <canvas id="orderRecieved"></canvas>
          <div class="line-chart-row-title">Orders Received</div>
        </div>
      </div>
      <div class="col-lg-2 grid-margin stretch-card">
        <div class="card">
          <div class="card-body pb-0">
            <div class="d-flex align-items-center justify-content-between">
              <h2 class="text-dark font-weight-bold">7826</h2>
              <i class="mdi mdi-cash text-dark mdi-18px"></i>
            </div>
          </div>
          <canvas id="transactions"></canvas>
          <div class="line-chart-row-title">TRANSACTIONS</div>
        </div>
      </div> --}}
    </div>
    <div class="row">
      <div class="col-sm-8 grid-margin grid-margin-md-0 stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <h4 class="card-title">Grafik Penjualan</h4>
              <h4 class="text-success font-weight-bold">Transaksi<span class="text-dark ml-3">{{$jumlahTransaksi}}</span></h4>
            </div>
            <div id="support-tracker-legend" class="support-tracker-legend"></div>
            <canvas id="supportTracker"></canvas>
          </div>
        </div>
      </div>
      {{-- <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-lg-flex align-items-center justify-content-between mb-4">
              <h4 class="card-title">Product Orders</h4>
              <p class="text-dark">+5.2% vs last 7 days</p>
            </div>
            <div class="product-order-wrap padding-reduced">
              <div id="productorder-gage" class="gauge productorder-gage"></div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
@endsection
