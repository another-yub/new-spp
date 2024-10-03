<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){        
        $datakelas = Kelas::latest()->paginate(4);
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

    public function edit($id){
        $kelas = Kelas::findOrFail($id);
        return view('kelas.ubah', compact('kelas'));
    }

    public function update(Request $request){
        try {
            
            Kelas::create([
                'kelas' => $request->kelas,
                'kompetensi_keahlian' => $request->kompetensi_keahlian,
            ]);
            return redirect('kelas')->with(['successubah' => 'Data berhasil di ubah']);
        } catch (\Throwable $th) {
            return redirect('siswa')->with(['errorubah' => 'Data gagal di ubah']);
        }
    }


    public function delete($id){

        try {

            $del = Kelas::findOrFail($id);
            Kelas::destroy($del->id);
    
            return redirect('kelas')->with(['successdelete' => 'Data berhasil di hapus']);
        } catch (\Throwable $th) {
            return redirect('kelas')->with(['errordelete' => 'Data gagal di hapus']);
        }
    }
}


