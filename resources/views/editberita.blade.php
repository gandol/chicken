@extends('layouts.apps')

@section('content')
<div class="content-wrapper">
        <div class="row">
<div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Edit Berita</h4>
            {{-- <p class="card-description">
              Basic form elements
            </p> --}}
            <form class="forms-sample" method="POST" action="{{ url('/aksieditberita/'.$berita->id) }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputName1">Judul</label>
                <input type="text" class="form-control" placeholder="Judul" name="judul" value="{{ $berita->judul }}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Isi Berita</label>
                <textarea name="isiBerita" cols="30" rows="10" class="form-control">{{ $berita->isiBerita }}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Display</label>
                <select name="display" class="form-control">
                  <option value="1" @if ($berita->display == 1) selected @endif>Ya</option>
                  <option value="0" @if ($berita->display == 0) selected @endif>Tidak</option>
                </select>
              </div>
              <div class="form-group">
                <img src="{{ url($berita->urlImage) }}" alt="">
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <div class="input-group col-xs-12">
                  <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="gambar">
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
