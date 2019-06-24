@extends('layouts.apps')

@section('content')
<div class="content-wrapper">
        <div class="row">
<div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Edit Transaksi</h4>
            {{-- <p class="card-description">
              Basic form elements
            </p> --}}
            <form class="forms-sample" method="POST" action="{{ url('/aksiedittransaksi/'.$transaksi->idTransaksi) }}"  enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputName1">Id Transaksi</label>
                <input type="text" class="form-control" value="{{ $transaksi->idTransaksi }}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">User</label>
                <input type="text" class="form-control" value="{{ $transaksi->nama }}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Total Bayar</label>
                <input type="text" class="form-control" value="{{ $transaksi->totalBayar }}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Keterangan</label>
                <input type="text" class="form-control" value="{{ $transaksi->keterangan }}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Payment</label>
                <input type="text" class="form-control" value="{{ $transaksi->paymentType }}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Alamat</label>
                <textarea class="form-control" cols="30" rows="10">{{ $transaksi->alamat }}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Phone</label>
                <input type="text" class="form-control" value="{{ $transaksi->phone }}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Status</label>
                <select name="statusTransaksi" class="form-control">
                  <option value="Menunggu Pembayaran" @if($transaksi->statusTransaksi == 'Menunggu Pembayaran') selected @endif>Menunggu Pembayaran</option>
                  <option value="processing order" @if($transaksi->statusTransaksi == 'processing order') selected @endif>Processing</option>
                  <option value="Completed" @if($transaksi->statusTransaksi == 'Completed') selected @endif>Completed</option>
                </select>
              </div>
            
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
