<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Kategori;
use App\Order;
use Alert;
use Auth;
use Validator;
use Hash;
use Illuminate\Support\Facades\Input;
use File;

class AdminController extends Controller
{
    //
    public function admLogin(Request $request)
    {
    	$validator = Validator::make(
    		Input::all(), array(
    			'email' => 'required|max:100',
    			'password' => 'required|max:100'
    			)
    		);

    	if ($validator->passes()) {
    		# code...
    		if (!Auth::attempt(['email' => $request['email'] , 'password' => $request['password'] , 'admin' => '1' ])) {

    			alert()->error("Login Gagal");
    			return redirect('/aksa-admin');
    			}
    		
    		alert()->success("Login Berhasil");
    		return redirect('/aksa-admin/home');
    	}
    }

    public function Logout()
    {
    	Auth::logout();

    	alert()->info(" Anda Berhasil Logout ");
    	return redirect('/aksa-admin');
    }

    public function getCount()
    {
        $no = 0;
        $user = User::count();
        $produk = Kategori::count();
        $order = Order::count();

        $cekUserBaru = User::orderBy('id', 'asc')->where('admin', '=', '0')->take(5)->get();

        return view('admin.index')->with('user', $user)->with('produk', $produk)->with('order', $order)->with('newUser', $cekUserBaru)->with('no', $no);
    }

}
