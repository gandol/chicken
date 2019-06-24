@extends('layouts.apps')

@section('content')
<div class="content-wrapper">
        <div class="row">
<div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Tambah Jumlah Pengguna</h4>
            {{-- <p class="card-description">
              Basic form elements
            </p> --}}
            <form class="forms-sample" method="POST" action="{{ url('/aksitambahjumlahpengguna') }}">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputName1">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Phone</label>
                <input type="text" class="form-control" placeholder="Phone" name="phone">
            </div>
              <div class="form-group">
                <label for="exampleSelectGender">Is Verified</label>
                  <select class="form-control" name="isverifed">
                    <option value="1">1</option>
                    <option value="0">0</option>
                  </select>
                </div>
              {{-- <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div>
              </div> --}}
              <div class="form-group">
                <label for="exampleInputCity1">Saldo</label>
                <input type="number" class="form-control" placeholder="Saldo" name="saldo">
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
