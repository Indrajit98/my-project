@extends('layouts.general')
@section('content')
<section class="account-section">
    <div class="row">
        <div class="account">
            <div class="acc">
                <p>account</p>
            </div>
            <div class="my-content">
                <div class="name">
                    @if(Auth::user()->image=='default.jpg')
                        <img src="{{asset('img/default.png')}}" alt="ad-image">
                        @else
                        <img src="{{asset('uploads/profile/'.Auth::user()->image)}}" alt="profile">
                        @endif
                </div>
                <div class="name">
                    <h4>{{Auth::user()->name}}</h4>
                </div>
                <div class="name">
                    <h4>{{Auth::user()->email}}</h4>
                </div>
                <div class="post">
                    <div class="image">
                        <img src="{{asset('asset/')}}/resource/image/account.png" alt="image">
                    </div>
                    <div class="button">
                       <a href="{{action('User\AdController@upload_page')}}">Post your ad now!</a>
                       <button id="myBtn">Update Profile</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <form action="{{action('User\HomeController@profile_up')}}"  method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                <div class="shop-form">
                    <div class="shop">
                        <label for="name">Enter name</label>
                        <input type="text" id="name" name="name" value="{{Auth::user()->name}}" required>
                        <small>Error message</small>
                    </div>
                    <div class="shop">
                        <label for="email">Enter address</label>
                        <input type="text" id="email" name="email" value="{{Auth::user()->email}}" required>
                        <small>Error message</small>
                    </div>

                    <div class="image-upload ">
                        <p>Profile Photo</p>
                        <input type="file" id="image" name="image">
                        <small>Error message</small>
                    </div>
                </div>
                <div class="button">
                    <button type="submit">Post add</button>
                </div>

            </form>
            </div>
          
          </div>
    </div>
    <div class="row">
        <div class="account">
            <table class="table" id="ads">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">shop Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Address</th>
                    <th class="text-right">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                      $i = 1;
                  @endphp
  
                  @foreach($table as $item)
                      <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>
                        @if($item->image=='default.jpg')
                        <img width="50" height="40" src="{{asset('img/default.png')}}" alt="ad-image">
                        @else
                        <img width="50" height="40" src="{{asset('uploads/add/'.$item->image)}}" alt="blog-image">
                        @endif
                      </td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->category['name']}}</td>
                      <td>{{$item->address}}</td>
                    <td class="text-right">
                    <a onclick="return confirm('Are you sure to delete?')" href="{{action('User\AdController@del_ad',$item->id)}}" class="btn btn-sm btn-danger">Del</a>
                    </td>
                  </tr>
                  @endforeach
                      
                </tbody>
              </table>
        </div>

    </div>

</section>
@endsection
@section('script')
<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
@endsection