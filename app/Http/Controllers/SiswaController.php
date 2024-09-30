<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class SiswaController extends Controller
{
    public function index(){
    $alldata = Siswa::with('user')->get();
    $paginate = Siswa::latest()->paginate(3);
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
            dd($th);
            return redirect('siswa')->with(['error' => 'Data gagal di tambahkan']);
        }
    }

    public function edit($id){
        try {

            $siswa = Siswa::findOrFail($id);
            $kelas = Kelas::all();
            return view('siswa.ubah', compact('siswa', 'kelas'));
        } catch (\Throwable $th) {
            return redirect('siswa')->with(['error' => 'Data telah gagal']);
        }
    }

    public function update(Request $request){

        try {

            $siswa = Siswa::findOrFail($request->id);

            if($request->password != null){
               User::where('id', $siswa->user_id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password),
               ]);
            } else {
                User::where('id', $siswa->user_id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                ]);
            }

            Siswa::where('id', $siswa->id)->update([
                'nis' => $request->nis,
                'kelas' => $request->kelas,
                'jurusan' => $request->jurusan,
                'alamat' => $request->alamat,
                'no_hp' => $request-> no_hp,
            ]);

            return redirect('siswa')->with(['successubah' => 'Data berhasil di ubah']);
        } catch (\Throwable $th) { 
            dd($th);
            return redirect('siswa')->with(['errorubah' => 'Data gagal di ubah']);
        }
    }

    public function delete ($id) {
            
        try {
            
            $siswa = Siswa::findOrFail($id);
            Siswa::destroy($siswa->id);
            User::destroy($siswa->user_id);

            return redirect('siswa')->with(['successdelete' => 'Data berhasil di hapus']);
        } catch (\Throwable $th) {
            return redirect('siswa')->with(['errordelete' => 'Data gagal di hapus']);
        }
    }

}
