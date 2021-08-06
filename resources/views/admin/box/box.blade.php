@section('box')
    {{-- add city modal--}}
    <div class="modal fade show" id="addCity" style="display: none; padding-right: 17px;" aria-modal="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add City</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form role="form" method="post" action="{{action('Admin\CityController@store')}}">
              @csrf
            <div class="modal-body">
                
                    <div class="card-body">
                      <div class="form-group">
                        <label for="name">City Name</label>
                        <input type="text" class="form-control" required id="name" placeholder="Enter city name" name="name">
                      </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
            </div>
        </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    {{-- add city modal--}}

    {{-- add type modal--}}
    <div class="modal fade show" id="addType" style="display: none; padding-right: 17px;" aria-modal="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Shop Type</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form role="form" method="POST" action="{{action('Admin\ShopTypeController@store')}}" enctype="multipart/form-data">
              @csrf
            <div class="modal-body">
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Shop Type</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter shop type" name="name">
                </div>
                <div class="form-group">
                  <label for="name">Image</label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
        </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    {{-- add type modal--}}


    {{-- edit city modal--}}
    <div class="modal fade show" id="ediCity" style="display: none; padding-right: 17px;" aria-modal="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit City</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form role="form" id="ediForm" method="POST" action="{{action('Admin\CityController@edit')}}">
            @csrf
            <input type="hidden" name="id">
          <div class="modal-body">
              
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">City Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter city name" name="name">
                    </div>
                  </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
          </div>
      </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
{{-- edit city modal--}}

    {{-- edit type modal--}}
    <div class="modal fade show" id="ediType" style="display: none; padding-right: 17px;" aria-modal="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Shop Type</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form role="form" action="{{action('Admin\ShopTypeController@edit')}}" method="POST" id="ediTypeForm" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id">
          <div class="modal-body">
            <div class="card-body">
              <div class="form-group">
                <label for="name">Shop Type</label>
                <input type="text" class="form-control" id="name" placeholder="Enter shop type" name="name">
              </div>
              <div class="form-group">
                <label for="name">Image</label>
                <input type="file" class="form-control" id="image" name="image">
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
          </div>
      </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  {{-- edit type modal--}}
@endsection