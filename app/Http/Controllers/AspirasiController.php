<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\InputAspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    //
    public function view(){
        $aspirasi = InputAspirasi::all();
        return view('adminaspirasi.view', compact('aspirasi'));
    }

    public function create($id_pelaporan){

        $inputaspirasi = InputAspirasi::find($id_pelaporan);
        $aspirasi = Aspirasi::query()
        ->where("id_pelaporan", "=", $id_pelaporan)
        ->get();

        // return dump($aspirasi);
        return view('adminaspirasi.create', compact('inputaspirasi', 'aspirasi'));
    }

    public function store(Request $request, $id_pelaporan){

        Aspirasi::create([
            'id_pelaporan' => $id_pelaporan,
            'status' => $request->status,
            'feedback' => $request->feedback
        ]);

        return redirect("admin/aspirasi/$id_pelaporan")
        ->with('success', 'Feedback berhasil dikirim');
    }
}
