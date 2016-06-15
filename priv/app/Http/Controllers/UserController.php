<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Input;
use Validator;
use Alert;
use File;
use Hash;

class UserController extends Controller
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
        $data = User::orderBy('id', 'desc')->where('admin','=','0')->get();

        return view('admin.user.user')->with('user', $data)->with('no', $no);
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
        $user = User::where('id', '=', $id)->first();

        return view('admin.user.edit')->with(['user' => $user]);
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
                'name' => 'required|max:255',
                'email' => 'required|email',
                'tipe' => 'required',
                'aktif' => 'required'
                )
            );

            $user = User::findorFail($id);

        if ($validator->passes()) {
            # code...
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->tipe = Input::get('tipe');
            $user->aktif = Input::get('aktif');
            $user->save();

            alert()->success(" User Berhasil Diupdate ");
            return redirect('/aksa-admin/user');
        } else {
            alert()->error(" Gagal Update User ");
            return redirect('/aksa-admin/user');
        }
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
        $user = User::findorFail($id);
        $user->delete();

        alert()->success(" User Berhasil Dihapus", "Success");
        return redirect('/aksa-admin/user');
    }
}
