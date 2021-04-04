<?php

namespace App\Http\Controllers;
use App\Materi;

use Illuminate\Http\Request;


class MaterisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$materi = DB::table('materi')->get();
        $materis = materi::all();
        //return view('materi.index', ['materis= >$materis']);
        return view('materi.index', compact('materis'));
        //return materi::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Materi::create($request->all()); 
        return redirect('/materi')->with('status', 'Data Berhasil Ditambahkan!');

        /* $materi = new Materi;
        $materi->judul_materi = $request->judul_materi;
        $materi->file_upload = $request->file_upload;
        $materi->save(); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        //return view('materi.show');
        //return $materi;
        //return view('materi.show', ['materi'=>$materi]);
        //dd($materi);
        return view('materi.show', compact('materi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        return view('materi/edit', compact('materi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi)
    {
        //return $request;
        Materi::where('id',$materi->id)
        ->update([
                    'judul_materi' => $request->judul_materi,
                    'file_upload' => $request->file_upload
        ]);
        return redirect('/materi')->with('status', 'Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        Materi::destroy($materi->id);
        return redirect('/materi')->with('status', 'Data Berhasil Dihapus!');
    }
}
