<?php

namespace App\Http\Controllers\Admin;
use App\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        $table = new City();
        $table->name = $request->name;
        $table->save();
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $table = City::find($request->id);
        $table->name = $request->name;
        $table->save();
        return redirect()->back();
    }

    public function del($id)
    {
        $table = City::find($id);
        $table->delete();
        return redirect()->back();
    }
}
