@extends('layouts.apps')

@section('content')
          <div class="content-wrapper">
            <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">From</label>
                                    <input type="date" class="form-control" placeholder="Nama" id="from">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">To</label>
                                    <input type="date" class="form-control" placeholder="Nama" id="to">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="card-title"><button type="button" class="btn btn-primary" onclick="find()">Find</button></h4>
                            </div>
                            <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama User</th>
                                        <th>Total Bayar</th>
                                        <th>Keterangan</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaksi as $item)
                                        <tr>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->totalBayar }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>{{ $item->paymentType }}</td>
                                            <td>{{ $item->statusTransaksi }}</td>
                                            <td>
                                                <a href="{{url('/edittransaksi/'.$item->idTransaksi)}}"><button type="button" class="btn btn-success">Edit</button></a>
                                                <button type="button" class="btn btn-primary" onclick="view('{{$item->item}}')">View Detail</button>
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
              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        {{--  <h4 class="modal-title">Modal Header</h4>  --}}
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Qty</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                
                </div>
                </div>
              <script>
                  function view(item){
                    $("#myModal").modal();
                    console.log(JSON.parse(item));
                    ongkir = JSON.parse(item).ongkir;
                    total = JSON.parse(item).total;
                    item = JSON.parse(item).item;
                    html = '';
                    for (i = 0; i < item.length; i++){
                        html += '<tr>';
                        html += '<td>'+item[i].nama+'</td>';
                        html += '<td>'+item[i].qty+'</td>';
                        html += '<td>'+item[i].subtotal+'</td>';
                        html += '</tr>';
                    }    
                    if(item.length > 0){
                        html += '<tr>';
                        html += '<td colspan="2">Ongkir</td>';
                        html += '<td>'+ongkir+'</td>';
                        html += '</tr>';
                        html += '<tr>';
                        html += '<td colspan="2">Total</td>';
                        html += '<td>'+total+'</td>';
                        html += '</tr>';
                    }
                    $('#tbody').html(html);
                  }

                  function find(){
                      var from = $('#from').val();
                      var to = $('#to').val();
                      window.location.href = '?from='+from+'&to='+to;
                      {{--  console.log(from);
                      console.log(to);  --}}
                  }
              </script>
@endsection
