@extends('layouts.user-main')
@section('content')
<section class="main-section js-maina">
    <div class="row">
        <div class="main">
            <div class="left-side">
                <div class="title">
                    <h2> select category</h2>
                </div>
                <div class="category-box">
                    <div class="category-name">
                        @foreach ($types as $item)
                            <div class="items-box">
                                <div class="image">
                                    <img src="{{asset('uploads/shoptype/'.$item->image)}}" alt="">
                                </div>
                                <div class="button">
                                    <a href="{{action('User\HomeController@type_wise',['id' => $item->id, 'slug' => Str::slug($item->name)])}}">{{$item->name}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="right-side">
                <div class="division-box">
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
    </div>
</section>

@endsection