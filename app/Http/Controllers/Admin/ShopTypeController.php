<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ShopType;
use Str;
class ShopTypeController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        $table = new ShopType();
        $table->name = $request->name;
        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $fileName = Str::slug($request->name,'_').'_'.md5(date('Y-m-d h:i:s'));
            $fileName = $fileName.'.'.$extension;

            $table->image = $fileName;

            $request->image->move('uploads/shoptype',$fileName);
        }
        $table->save();
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $table = ShopType::find($request->id);
        $table->name = $request->name;

        if ($request->hasFile('image')) {

            $path = public_path('uploads/shoptype/'.$table->image);
            if (file_exists($path)) {
                unlink($path);
            }

            $extension = $request->image->extension();
            $fileName = Str::slug($request->name,'_').'_'.md5(date('Y-m-d h:i:s'));
            $fileName = $fileName.'.'.$extension;

            $table->image = $fileName;

            $request->image->move('uploads/shoptype',$fileName);
        }
        $table->save();
        return redirect()->back();
    }

    public function del($id)
    {
        $table = ShopType::find($id);

        $path = public_path('uploads/shoptype/'.$table->image);
        if (file_exists($path)) {
            unlink($path);
        }
        $table->delete();
        return redirect()->back();
    }
}
