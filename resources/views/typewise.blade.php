@extends('layouts.general')
@section('content')
<section class="dhaka-section division">
    <div class="row">
        <div class="main-division">
            <div class="item-shop">
                <div class="left-title">
                    <div class="city-name">
                        <h3>{{$ShopType->name}}</h3>
                    </div>
                </div>
                <div class="left-sides">
                    @foreach ($table as $item)
                        <div class="shop-box">
                        <div class="shop-name">
                            <h4>shop Name: {{$item->name}}</h4>
                        </div>
                        <div class="location">
                            <p> Address: {{$item->address}}</p>
                        </div>
                        <div class="comment">
                            <p> Description: {{$item->description}}</p>
                        </div>
                        <div class="image">
                            <img src="{{asset('uploads/add/'.$item->image)}}" alt="" />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="right-side">
                <div class="shop-type">
                    <p>Shop type</p>
                    <select>
                        <option value="All"> All</option >
                            @foreach ($shoptypes as $item)
                                <option value="{{$item->id}}" > {{$item->name}}</option >
                            @endforeach
                        
                    </select>
                </div>
                <div class="division-box box-margin">
                    <div class="division">
                        <h3>city</h3>
                    </div>
                    <div class="division-name">
                        <ul>
                            @foreach ($cities as $item)
                                <li> 
                                    <a href="{{action('User\HomeController@city_wise',['id' => $item->id, 'slug' => Str::slug($item->name)])}}" class="slider-city"> <i
                                        class="fas fa-map-marker-alt"></i>{{$item->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="pagination">
        {{$table->links()}}
        </div>
    </div>
</section>
@endsection