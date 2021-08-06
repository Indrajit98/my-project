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
                              <th>Image</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>User Role</th>
                              <th class="text-right">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($table as $key => $item)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    @if($item->image=='default.jpg')
                                        <img width="50" height="40" src="{{asset('img/default.png')}}" alt="ad-image">
                                    @else
                                        <img width="50" height="40" src="{{asset('uploads/profile/'.$item->image)}}" alt="blog-image">
                                    @endif
                                </td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->userRole}}</td>
                                
                                <td class="text-right">
                                    @if ($item->userRole == 'Admin')
                                        <a href="{{action('Admin\UserController@make_user',$item->id)}}" onclick="return confirm('Sure to make user?')" class="btn btn-warning btn-sm">make user</a>
                                    @else
                                        <a href="{{action('Admin\UserController@make_admin',$item->id)}}" onclick="return confirm('Sure to make admin?')" class="btn btn-success btn-sm">make admin</a>
                                    @endif
                                  
                                  
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