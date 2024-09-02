<?php

namespace App\Http\Controllers;
use App\Models\InputAspirasi;
use App\Models\Aspirasi;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;


class InputAspirasiController extends Controller
{
    public function index()
    {
        $inputaspirasis = InputAspirasi::get();
        return view('inputaspirasi.index', compact('inputaspirasis'));
    }
    public function show($id)
    {
        $inputaspirasi = InputAspirasi::find($id);
        return view('inputaspirasi.detail', compact('inputaspirasi'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'nisn'=>'required',
            'kategori_id'=>'required',
            'lokasi'=>'required',
            'keterangan'=>'required',
            'foto'=>'required|mimes:png,jpeg,jpg',
        ]);
        $foto = $request->file('foto');
        $name = time().'.'.$foto->getClientOriginalExtension();
        $destinationPath = public_path('/foto');
        $foto->move($destinationPath,$name);
        if(Siswa::get()->where('nisn', $request->nisn)->count() > 0){
            InputAspirasi::create([
                'nisn'=>$request->get('nisn'),
                'kategori_id'=>$request->get('kategori_id'),
                'lokasi'=>$request->get('lokasi'),
                'keterangan'=>$request->get('keterangan'),
                'foto'=>$name,
            ]);
            
            return redirect('/#lapor')->with('message','pengaduan berhasil ditambahkan');    
        }else{
            // Siswa::create([
            //     'nisn'=>$request->get('nisn'),
            //     'kelas'=>'blank',
            // ]);
            // InputAspirasi::create([
            //     'nisn'=>$request->get('nisn'),
            //     'kategori_id'=>$request->get('kategori_id'),
            //     'lokasi'=>$request->get('lokasi'),
            //     'keterangan'=>$request->get('keterangan'),
            //     'foto'=>$name,
            // ]);
            // return redirect('/#lapor')->with('message','pengaduan berhasil ditambahkan'); 
            return redirect('/#lapor')->with('message','NISN belum Terdaftar.Harap hubungi admin');   
        }
    }
   
    public function search(Request $request)
    {

        
        $keyword = $request->input('keyword');

        $inputaspirasis = InputAspirasi::where('nisn', 'like', '%' . $keyword . '%')
                            ->orWhere('lokasi', 'like', '%' . $keyword . '%')
                            ->orWhereHas('kategori', function ($query) use ($keyword) {
                                $query->where('keterangan', 'like', '%' . $keyword . '%');
                            })
                            ->orWhere('keterangan', 'like', '%' . $keyword . '%')
                            ->get();

        return view('search', compact('inputaspirasis'));
    }
   
    public function profil()
{
    return view('profil');
}
public function laporan() {
    $inputaspirasis = InputAspirasi::latest()->get();   
    return view('inputaspirasi.laporan', compact('inputaspirasis'));
}

public function pdf() {
    $inputaspirasis = InputAspirasi::latest()->get();
    $pdf = PDF::loadView('inputaspirasi.pdf', compact('inputaspirasis'));
    return $pdf->download('laporan.pdf');
}
}
