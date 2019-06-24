@extends('layouts.apps')

@section('content')
          <div class="content-wrapper">
            <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{url('/tambahberita')}}"><button type="button" class="btn btn-primary">Tambah</button></a></h4>
                            {{-- <p class="card-description">
                            Add class <code>.table-striped</code>
                            </p> --}}
                            <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Display</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($berita as $item)
                                        <tr>
                                            <td class="py-1"><img src="{{$item->urlImage}}" alt="image"/></td>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->display }}</td>
                                            <td>
                                                <a href="{{url('/editberita/'.$item->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
                                                <button type="button" class="btn btn-danger" onclick="hapus('{{$item->id}}')">Hapus</button>
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
                        window.location.href = 'hapusberita/'+id;
                    } 
                  }
              </script>
@endsection
