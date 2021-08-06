<?php

namespace App\Http\Controllers\User;
use App\City;
use App\ShopType;
use App\Ad;
use App\User;
use Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $types = ShopType::all();
        $cities = City::all();
        return view('welcome',compact('types','cities'));
    }

    public function about() {
        return view('about');
    }

    public function city_wise($id = null){
       $shoptypes = ShopType::all();
       $city = City::find($id);
       $cities = City::all();
       $table = Ad::where('city_id',$id)->paginate(6);
       return view('citywise',compact('cities','table','shoptypes','city'));
    }
    public function type_wise($id = null){
        $shoptypes = ShopType::all();
        $ShopType = ShopType::find($id);
        $cities = City::all();
        $table = Ad::where('shop_type_id',$id)->paginate(6);
        return view('typewise',compact('cities','table','shoptypes','ShopType'));
     }

     public function city_type_match(Request $request)
     {
         $table = Ad::where('city_id',$request->city_id)->where('shop_type_id',$request->shop_type_id)->orderBy('created_at','DESC')->get();
         return view('show',compact('table'));
     }

     public function profile_up(Request $request)
     {
         $table = User::find($request->id);
         $table->name = $request->name;
         $table->email = $request->email;
         $image = $request->image;
        if ($request->hasFile('image')) {
            $extension = $image->extension();
            $fileName = Str::slug($request->name,'_').'_'.md5(date('Y-m-d h:i:s'));
            $fileName = $fileName.'.'.$extension;
            $table->image = $fileName;

            $image->move('uploads/profile',$fileName);
        }
        $table->save();
        return back();
     }
}
