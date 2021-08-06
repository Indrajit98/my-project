@extends('layouts.general')
@section('content')
<section class="upload-section">
    <div class="row">
        <div class="form">
            <div class="form-title">
                @if ($message = Session::get('message'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
                <h4>fill in the post details</h4>
            </div>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="form-main">
                <form action="{{action('User\AdController@store_ad')}}" id="form"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="shop-form">
                        <div class="shop">
                            <label for="name">Enter your shop name</label>
                            <input type="text" id="name" name="name">
                            <small>Error message</small>
                        </div>
                        <div class="shop">
                            <label for="address">Enter your shop address</label>
                            <input type="text" id="address" name="address">
                            <small>Error message</small>
                        </div>
                        <div class="shop-type">
                            <p>Shop type</p>
                            <select name="shop_type_id">
                                @foreach ($types as $item)
                                    <option value="{{$item->id}}"> {{$item->name}}</option>
                                @endforeach
                                
                            </select>
                        </div>

                        <div class="image-upload ">
                            <p>add a upload photo</p>
                            <input type="file" id="image" name="image">
                            <small>Error message</small>
                        </div>
                        <div class="select-division">
                            <p>Your city</p>
                            <select name="city_id">
                                @foreach ($cities as $item)
                                    <option value="{{$item->id}}"> {{$item->name}}</option>
                                @endforeach
                                
                            </select>      
                        </div>

                        <div class="description">
                            <div class="label">
                                <label for="description">Description</label>
                            </div>
                            <textarea name="description" id="description" name="description"></textarea>
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
</section>

@endsection
