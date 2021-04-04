<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
    	$data_pengguna = \App\Pengguna::all();
    	return view('pengguna.index', ['data_pengguna' => $data_pengguna]);
    }

    public function insert()
    {
    	return view('pengguna.insert');
    }

    public function create(Request $request)
    {	
    	//insert tabel user
    	$user = new \App\User;
    	$user->role = $request->role;
    	$user->name = $request->nama_depan;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->remember_token = str_random(60);
    	$user->save();

    	//insert tabel pengguna
    	$request->request->add(['user_id' => $user->id]);
    	$pengguna = \App\Pengguna::create($request->all());
    	return redirect('/pengguna')->with('status', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
    	$pengguna = \App\Pengguna::find($id);
    	return view('pengguna.edit', ['pengguna' => $pengguna]);
    }

    public function update(Request $request, $id)
    {
    	$pengguna = \App\Pengguna::find($id);
    	$pengguna->update($request->all());
    	return redirect('/pengguna')->with('status', 'Data Berhasil diupdate!');
    }

    public function delete($id)
    {
    	$pengguna = \App\Pengguna::find($id);
    	$pengguna->delete();
    	return redirect('/pengguna')->with('status', 'Data Berhasil dihapus!');
    }
}
