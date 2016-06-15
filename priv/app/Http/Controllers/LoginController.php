<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Kategori;
use App\Order;
use App\Cart;
use Alert;
use Auth;
use Validator;
use Hash;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    //
    public function postSignIn(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|max:100',
    		'password' => 'required|max:100'
    		]);

    	if (!Auth::attempt(['email' => $request['email'] , 'password' => $request['password'] , 'aktif' => 'y'])) {
    		# code...
    		alert()->error("Login Gagal");
    		return redirect('/login');
    	}

    	alert()->success("Login Berhasil");
    	return redirect('/akun');
    }

    public function Logout()
    {
    	Auth::Logout();
    	alert()->info("Anda Berhasil Logout");

    	return redirect('/login');
    }

    public function Register(Request $request)
    {
    	$validator = Validator::make(
    		Input::all(), array(
    		'rumkit' => 'required|max:100',
    		'email' => 'required|max:100',
    		'password' => 'required|max:100',
    		'confirm_password' => 'required|max:100'
    		)
    	);

    	if ($validator->passes()) {
    		# code...
    		$user = new User();
    		$user->name = Input::get('rumkit');
    		$user->email = Input::get('email');
    		$user->password = Hash::make(Input::get('password'));
    		$user->admin = "0";
            $user->tipe = "a";
            $user->aktif = "n";
    		$user->save();

    		alert()->success(" Registrasi Berhasil ");
    		return redirect('/daftar');
    	} else {
    		alert()->error(" Gagal, Harap Cek Data Anda ");
    		return redirect('/daftar');
    	}
    }

    public function detailProd($id)
    {
        $prod = Kategori::where('id', '=', $id)->get();
        return view('detail-produk')->with('prod', $prod);
    }

    public function showCart()
    {
        $product = Kategori::all();
        
        $data = Order::orderBy('id_orders', 'asc')->where('id_kustomer', '=', Auth::user()->id)->get();

        return view('cart')->with('data', $data);
    }
}
