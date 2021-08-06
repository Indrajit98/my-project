<?php

namespace App\Http\Controllers\User;
use App\City;
use App\ShopType;
use App\Ad;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
class AdController extends Controller
{
    public function upload_page()
    {
        $cities = City::all();
        $types = ShopType::all();
        return view('upload-page',compact('cities','types'));
    }

    public function store_ad(Request $request){
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'shop_type_id' => 'required',
            'image' => 'required',
        ]);
        $table = new Ad();
        $table->name = $request->name;
        $table->address = $request->address;
        $table->shop_type_id = $request->shop_type_id;
        $table->city_id = $request->city_id;
        $table->description = $request->description;
        $image = $request->image;
        if ($request->hasFile('image')) {
            $extension = $image->extension();
            $fileName = Str::slug($request->name,'_').'_'.md5(date('Y-m-d h:i:s'));
            $fileName = $fileName.'.'.$extension;
            $table->image = $fileName;

            $image->move('uploads/add',$fileName);
        }
        $table->user_id = Auth::user()->id;
        $table->save();

        return redirect('user-dashboard')->with(['message' => 'success']);
    }


    public function del_ad($id)
    {
       $table = Ad::find($id);
        $table->delete();
        return redirect()->back();
    }
}
