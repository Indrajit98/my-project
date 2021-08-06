@extends('layouts.master')
@extends('admin.box.box')
@section('content')
<section class="content mt-2">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Ads</h3>
                  <div class="card-tools">
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                        <table class="table table-hover datatable">
                          <thead>
                            <tr>
                              <th>S/N</th>
                              <th>Shop</th>
                              <th>Address</th>
                              <th>Image</th>
                              <th class="text-right">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($ads as $key => $item)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->address}}</td>
                                <td>
                                    @if($item->image=='default.jpg')
                                        <img width="50" height="40" src="{{asset('img/default.png')}}" alt="ad-image">
                                    @else
                                        <img width="50" height="40" src="{{asset('uploads/add/'.$item->image)}}" alt="blog-image">
                                    @endif
                                </td>
                                <td class="text-right">
                                  <a href="{{action('User\AdController@del_ad',$item->id)}}" onclick="return confirm('Sure to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                </div>
                <!-- /.card-footer-->
              </div>
        </div>
    </div>

  </section>
@endsection
@section('script')
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    
    <script>
      $('.datatable').DataTable();
    </script>
@endsection