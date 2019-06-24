@extends('layouts.apps')

@section('content')
          <div class="content-wrapper">
            <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Lokasi</th>
                                        <th>Token</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gojek as $token)
                                        <tr>
                                            <td>{{ $token->latitud .",".$token->longitud }}</td>
                                            <td>{{ $token->token }}</td>
                                            <td>
                                                <a href="{{url('/gojek/edit/'.$token->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
                                            </td>
                                            {{-- <td>Herman Beck</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>$ 77.99</td>
                                            <td>May 15, 2015</td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
              </div>
              <script>
                  function hapus(id){
                    var r = confirm("Yakin Akan Menghapus!");
                    if (r == true) {
                        window.location.href = 'hapusproduk/'+id;
                    }
                  }
              </script>
@endsection
