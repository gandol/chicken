@extends('layouts.apps')

@section('content')
<div class="content-wrapper">
        <div class="row">
<div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Tambah Produk</h4>
            {{-- <p class="card-description">
              Basic form elements
            </p> --}}
            <form class="forms-sample" method="POST" action="{{ url('/aksitambahproduk') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputName1">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Harga</label>
                <input type="number" class="form-control" placeholder="Harga" name="harga">
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <div class="input-group col-xs-12">
                  <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="gambar" required>
                </div>
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
