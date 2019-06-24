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
                                        <th>Bank</th>
                                        <th>Nama Pemilik</th>
                                        <th>No.Rekenig</th>
                                        <th>Option</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bank as $dataBank)
                                        <tr>
                                            <td>{{ $dataBank->bank }}</td>
                                            <td>{{ $dataBank->nama }}</td>
                                            <td>{{ $dataBank->rekening }}</td>
                                            <td>
                                                <a href="{{url('/rekening/edit/'.$dataBank->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
                                            </td>
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
