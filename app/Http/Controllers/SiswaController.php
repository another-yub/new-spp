<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
    $alldata = Siswa::with('user')->get();
    $paginate = Siswa::latest()->paginate(33);
    return view('siswa.index', compact('alldata', 'paginate'));
    }
    public function tambah() {
        $kelas = Kelas::all();
        return view('siswa.tambah', compact('kelas'));
    }
    public function simpan(Request $request){

        try {
            $user = User::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 'siswa',

            ]);

            Siswa::create([
                'user_id' => $user->id,
                'nis' => $request->nis,
                'kelas' => $request->kelas,
                'jurusan' => $request->jurusan,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
            ]);

            return redirect('siswa')->with(['success' => 'Data berhasil di tambahkan!']);
        } catch (\Throwable $th) {
            return redirect('siswa')->with(['error' => 'Data gagal di tambahkan']);
        }
    }
}
