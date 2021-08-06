<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $table = User::where('id','!=',Auth::user()->id)->get();
        return view('admin.users',compact('table'));
    }

    public function make_user($id){
      $table = User::find($id);
      $table->userRole = 'User';
      $table->save();
      return back();
    }
    public function make_admin($id){
        $table = User::find($id);
        $table->userRole = 'Admin';
        $table->save();
        return back();
      }
}
