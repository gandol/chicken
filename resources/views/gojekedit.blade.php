@extends('layouts.apps')

@section('content')
<div class="content-wrapper">
        <div class="row">
<div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Edit Token Gojek</h4>
            {{-- <p class="card-description">
              Basic form elements
            </p> --}}
            <form class="forms-sample" method="POST" action="{{ url('/gojek/doEdit') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputName1">Latitude</label>
                <input type="text" class="form-control" placeholder="latitude" name="latitud" value="{{ $gojek->latitud }}">
                <input type="hidden" class="form-control" name="id" value="{{ $gojek->id }}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Lognitude</label>
                <input type="text" class="form-control" placeholder="longitude" name="longitud" value="{{ $gojek->longitud }}">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Token</label>
                <input type="text" class="form-control" placeholder="longitude" name="token" value="{{ $gojek->token }}">
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a class="btn btn-light" href="/gojek">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
