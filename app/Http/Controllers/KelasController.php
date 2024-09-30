<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){        
        $datakelas = Kelas::latest()->paginate(3);
        return view('kelas.index', compact('datakelas'));
    }

    public function tambah() {
        return view('kelas.tambah');
    }

    public function simpan(Request $request) {

        try {
            
            Kelas::create([
                'kelas' => $request->kelas,
                'kompetensi_keahlian' => $request->kompetensi_keahlian,
            ]);

            return redirect('kelas')->with(['success' => 'Data berhasil di tambahkan']);
        } catch (\Throwable $th) {

            return redirect('kelas')->with(['error' => 'Data gagal di tambahkan']);
        }
    }
}
