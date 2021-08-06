@foreach ($table as $item)
<div class="shop-box">
    <div class="shop-name">
        <h4>{{$item->name}}</h4>
    </div>
    <div class="location">
        <p>{{$item->address}}</p>
    </div>
    <div class="comment">
        <p>{{$item->description}}</p>
    </div>
    <div class="image">
        <img src="{{asset('uploads/add/'.$item->image)}}" alt="" />
    </div>
</div>
@endforeach