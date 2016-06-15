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
use File;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $no = 0;
        $data = Kategori::orderBy('id', 'desc')->get();

        return view('admin.produk.produk')->with('prod', $data)->with('no', $no);
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
                'nama' => 'required',
                'satuan' => 'required',
                'cat' => 'required',
                'qty' => 'required',
                'gambar' => 'required|mime:jpg,jpeg,png|image',
                'tipe_a' => 'required',
                'tipe_b' => 'required',
                'tipe_c' => 'required'
                )
            );

        if ($request->hasFile('gambar')) {
            # code...
            $prod['gambar'] = $this->savePhoto($request->file('gambar'));
        }

        $prod = new Kategori();
        $prod->nama = Input::get('nama');
        $prod->slug = str_slug(Input::get('nama'));
        $prod->satuan = Input::get('satuan');
        $prod->kat = Input::get('cat');
        $prod->qty = Input::get('qty');
        $prod->tipe_a = Input::get('tipe_a');
        $prod->tipe_b = Input::get('tipe_b');
        $prod->tipe_c = Input::get('tipe_c');
        $prod->save();

        alert()->success('Produk Berhasil diTambah', 'Success');
        return redirect('/aksa-admin/produk/tambah-produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $produk = Kategori::where('id', '=', $id)->first();

        return view('admin.produk.edit-produk')->with(['produk' => $produk]);
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
        $validator = Validator::make(
            Input::all(), array(
                'nama' => 'required',
                'satuan' => 'required',
                'cat' => 'required',
                'qty' => 'required',
                'gambar' => 'required|mime:jpg,jpeg,png|image',
                'tipe_a' => 'required',
                'tipe_b' => 'required',
                'tipe_c' => 'required'
                )
            );

        $prod = Kategori::find($id);

        if ($request->hasFile('gambar')) {
            # code...
            $prod['gambar'] = $this->deletePhoto($prod->gambar);

            $prod['gambar'] = $this->savePhoto($request->file('gambar'));
            $prod->gambar = $prod['gambar'];
        }

        $prod->nama = Input::get('nama');
        $prod->slug = str_slug(Input::get('nama'));
        $prod->satuan = Input::get('satuan');
        $prod->kat = Input::get('cat');
        $prod->qty = Input::get('qty');
        $prod->tipe_a = Input::get('tipe_a');
        $prod->tipe_b = Input::get('tipe_b');
        $prod->tipe_c = Input::get('tipe_c');
        $prod->save();

        alert()->success('Produk Berhasil diUpdate', 'Success');
        return redirect('/aksa-admin/produk');
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
        $prod = Kategori::findOrFail($id);
        $hapusGambar = $this->deletePhoto($prod->gambar);
        $prod->delete();

        alert()->success(' Produk Berhasil Dihapus ');
        return redirect('/aksa-admin/produk');
    }

    protected function savePhoto($photo)
    {
        $destinationPath = 'images';
        $subdestinationPath = 'produk';
        $extension = $photo->getClientOriginalExtension();
        $fileName = rand(11111,99999).'.'.$extension;
        $photo->move($destinationPath. '/' . $subdestinationPath , $fileName);
        $prod['gambar'] = $destinationPath. '/' . $subdestinationPath . '/' . $fileName;

        return $prod['gambar'];
    }

    protected function deletePhoto($photo)
    {
        File::delete($photo);
        return $photo;
    }
}
