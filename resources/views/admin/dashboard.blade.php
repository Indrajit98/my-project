@extends('layouts.master')
@extends('admin.box.box')
@section('content')
<section class="content mt-2">

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Cities</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addCity"><i class="fa fa-plus"></i> Add City</button>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                        <table class="table table-hover datatable">
                          <thead>
                            <tr>
                              <th>S/N</th>
                              <th>City</th>
                              <th class="text-right">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($cities as $key => $item)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->name}}</td>
                                <td class="text-right">
                                  <button type="button" class="btn btn-primary btn-sm cityEdiBtn" data-id="{{$item->id}}" data-name="{{$item->name}}" data-toggle="modal" data-target="#ediCity"><i class="fa fa-edit"></i></button>
                                  <a href="{{action('Admin\CityController@del',$item->id)}}" onclick="return confirm('Sure to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                </div>
                <!-- /.card-footer-->
              </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Shop Types</h3>
          
                  <div class="card-tools">
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addType"><i class="fa fa-plus"></i> Add Type</button>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover datatable">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>Shop Type</th>
                          <th class="text-right">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($types as $key => $item)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->name}}</td>
                                <td class="text-right">
                                  <button type="button" class="btn btn-primary btn-sm typeEdiBtn" data-id="{{$item->id}}" data-name="{{$item->name}}" data-toggle="modal" data-target="#ediType"><i class="fa fa-edit"></i></button>
                                  <a href="{{action('Admin\ShopTypeController@del',$item->id)}}" onclick="return confirm('Sure to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
      $(function(){
          $('.cityEdiBtn').click(function(){
            var id = $(this).data('id');
            var name = $(this).data('name');

            $('#ediForm [name = id]').val(id);
            $('#ediForm [name = name]').val(name);
          });
      });

      $(function(){
        $('.typeEdiBtn').click(function(){
            var id = $(this).data('id');
            var name = $(this).data('name');

            $('#ediTypeForm [name = id]').val(id);
            $('#ediTypeForm [name = name]').val(name);
          });
      });

      $('.datatable').DataTable();
    </script>
@endsection