<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;
use App\Models\InputAspirasi;


class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Tampilkan daftar aspirasi
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
    public function show($id)
    {
        $inputaspirasis = InputAspirasi::find($id);
        return view('aspirasi.create', compact('inputaspirasis'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data input

        $request->validate([
            'status' => 'required|in:Menunggu,Proses,Selesai',
            'feedback' => 'required'
        ]);
        Aspirasi::create([
            'input_aspirasi_id'=>$request->get('input_aspirasi_id'),    
            'status'=>$request->get('status'),
            'feedback'=>$request->get('feedback'),
        ]);

        // Simpan data aspirasi

        // Redirect dengan pesan sukses
       
        return redirect()->back()->with('message', 'Aspirasi berhasil ditambahkam!');
    }

    // Implementasikan metode lain seperti show, edit, update, destroy sesuai kebutuhan Anda
    
}
