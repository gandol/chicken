@extends('layouts.apps')

@section('content')
          <div class="content-wrapper">
            <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{url('/tambahproduk')}}"><button type="button" class="btn btn-primary">Tambah</button></a></h4>
                            {{-- <p class="card-description">
                            Add class <code>.table-striped</code>
                            </p> --}}
                            <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        {{--  <th>Phone</th>
                                        <th>Saldo</th>
                                        <th>Verified</th>  --}}
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produk as $item)
                                        <tr>
                                            <td class="py-1"><img src="{{$item->linkPhoto}}" alt="image"/></td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->harga }}</td>
                                            {{--  <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->saldo }}</td>
                                            <td>{{ $item->isverifed }}</td>  --}}
                                            <td>
                                                <a href="{{url('/editproduk/'.$item->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
                                                <button type="button" class="btn btn-danger" onclick="hapus('{{$item->id}}')">Hapus</button>
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
