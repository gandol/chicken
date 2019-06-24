@extends('layouts.apps')

@section('content')
<div class="content-wrapper">
        <div class="row">
<div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Edit Data Rekening</h4>
            {{-- <p class="card-description">
              Basic form elements
            </p> --}}
            <form class="forms-sample" method="POST" action="{{ url('/rekening/doEdit') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputName1">Nama Bank</label>
                <input type="text" class="form-control" placeholder="(BCA/BRI/BNI)" name="namaBank" value="{{ $bank->bank }}">
                <input type="hidden" class="form-control" name="id" value="{{ $bank->id }}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Nomor Rekening</label>
                <input type="text" class="form-control" placeholder="nomor rekening" name="nomorRekening" value="{{ $bank->rekening }}">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Atas nama</label>
                <input type="text" class="form-control" placeholder="nama pemilik rekening" name="atasNama" value="{{ $bank->nama }}">
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a class="btn btn-light" href="/rekening">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
