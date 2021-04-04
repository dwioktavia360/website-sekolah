<?php

namespace App\Http\Controllers;
use App\Materi;

use Illuminate\Http\Request;


class MateriSiswaController extends Controller
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
        return view('siswa.materi.index', compact('materis'));
        //return materi::all();
    }

   
   
}
