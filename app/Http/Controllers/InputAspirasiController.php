<?php

namespace App\Http\Controllers;

use App\Models\InputAspirasi;
use App\Models\Kategori;
use Illuminate\Http\Request;

class InputAspirasiController extends Controller
{
    //
    public function index(){
        return view('aspirasi.index');
    }

    public function create(){
        $kategori = Kategori::all();
        return view('aspirasi.create', compact('kategori'));
    }

    public function store(Request $request){

        $file = $request->file('gambar'); 
        $namafile = $file->getClientOriginalName();
        $file->move('gambar',$namafile);
        InputAspirasi::create([
            'nik' => $request->nik,
            'id_kategori' => $request->kategori,
            'lokasi' => $request->lokasi,
            'gambar' => $namafile,
            'keterangan' => $request->keterangan
        ]);
 
        return redirect('aspirasi')
        ->with('success', 'Aspirasi berhasil dikirim');
    }

    public function view(Request $request){
        
        $nik = $request->nik;

        $aspirasi = InputAspirasi::query()
                    ->join('penduduks', 'input_aspirasis.nik', '=', 'penduduks.nik')
                    ->join('kategoris', 'input_aspirasis.id_kategori', '=', 'kategoris.id_kategori')
                    ->where('input_aspirasis.NIK','=', $nik)
                    ->get();
        

        // return dump($aspirasi);
        return view('aspirasi.view', compact('aspirasi', 'nik'));
        
    }


}
