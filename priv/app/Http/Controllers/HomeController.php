<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\Kategori;
use App\Cart;
use Illuminate\Support\Facades\Input;
use Validator;
use Alert;
use Auth;
use Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Kategori::orderBy('id', 'asc')->take(6)->get();
        return view('index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make(
            Input::all(), array(
                'name_buah' => 'required',
                'name_sayur' => 'required',
                'name_plastik' => 'required',
                'qty_sayur' => 'required',
                'qty_buah' => 'required',
                'qty_plastik' => 'required'
                )
            );

        $harga_sayur = $request->input('sayur_harga');
        $qty_sayur = $request->input('qty_sayur');
        $harga_buah = $request->input('buah_harga');
        $qty_buah = $request->input('qty_buah');
        $harga_plastik = $request->input('plastik_harga');
        $qty_plastik = $request->input('qty_plastik');

        $tot_sayur = $harga_sayur*$qty_sayur;
        $tot_buah = $harga_buah*$qty_buah;
        $tot_plastik = $harga_plastik*$qty_plastik;

        $jum_total = $tot_plastik+$tot_buah+$tot_sayur;

        if ($validator->passes()) {
            # code...
            $order = new Order();
            $order->id_orders = str_random();
            $order->id_kustomer = Auth::user()->id;
            $order->kode_orders = str_random();
            $order->nama_pemesan = Auth::user()->name;
            $order->email = Auth::user()->email;
            $order->sayur = Input::get('name_sayur');
            $order->qty_sayur = $qty_sayur;
            $order->buah = Input::get('name_buah');
            $order->qty_buah = $qty_buah;
            $order->plastik = Input::get('name_plastik');
            $order->qty_plastik = $qty_plastik;
            $order->status = " On Progress ";
            $order->alamat = Input::get('alamat');
            $order->telp = Input::get('telp');
            $order->jumlah_dibayar = $jum_total;
            $order->save();

            Mail::send('mail', array('nama_pemesan' => Auth::user()->name, 'buah' => Input::get('name_buah'), 'sayur' => Input::get('name_sayur')), function ($message) {
                $message->to(Auth::user()->email, Auth::user()->name)->subject('Order dari Sembako.com');
            });

            alert()->success(" Order Berhasil ", "Success");
            return redirect('/akun');
        } else {
            alert()->error(" Gagal Order , Coba Lagi", "Error");
            return redirect('/akun');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $no = 0;
        $data = Kategori::orderBy('id', 'desc')->where('kat', '=', 'sayur')->paginate(5);
        $buah = Kategori::orderBy('id', 'desc')->where('kat', '=', 'buah')->paginate(5);
        $plastik = Kategori::orderBy('id', 'desc')->where('kat', '=', 'plastik')->paginate(5);
        $orderan = Order::orderBy('id_orders', 'desc')->where('id_kustomer', '=', Auth::user()->id)->paginate(5);

        return view('account')->with('sayur', $data)->with('buah', $buah)->with('plastik', $plastik)->with('no', $no)->with('order', $orderan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showProduk()
    {
        $data = Kategori::orderBy('id', 'asc')->paginate(10);
        return view('shop')->with('data', $data);
    }

    public function showHarga(Request $request)
    {
        $harga_sayur = $request->input('sayur_harga');
        $qty_sayur = $request->input('qty_sayur');
        $harga_buah = $request->input('buah_harga');
        $qty_buah = $request->input('qty_buah');
        $harga_plastik = $request->input('plastik_harga');
        $qty_plastik = $request->input('qty_plastik');

        $tot_sayur = $harga_sayur*$qty_sayur;
        $tot_buah = $harga_buah*qty_buah;
        $tot_plastik = $harga_plastik*qty_plastik;

        $jum_total = $tot_plastik+$tot_buah+$tot_sayur;

        return view('account')->with('yur', $tot_sayur)->with('tot_buah', $tot_buah)->with('tot_plastik', $tot_plastik)->with('jum_total', $jum_total);
    }

}
