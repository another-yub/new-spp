<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class LoginController extends Controller
{
    public function index() {
            $alldata = Spp::all();
            return view('main.index', compact('alldata'));
    }

    public function search(Request $request){
        try {
            
            $keyword = $request->search;
            $alldata = DB::table('siswa')
            ->where('kelas','like',"%".$keyword."%")
            ->get();
            // $alldata = Siswa::where([
            //     'kelas' == 'like', "%" . "$keyword" . "%",
            // ]);

            // ->orWhere('kelas', 'like', "%" . "$keyword". "%")
            // ->orWhere('jurusan', 'like', "%" . "$keyword". "%")
            // ->orWhere('alamat', 'like', "%" . "$keyword". "%")->get();

            $paginate = Siswa::latest($alldata)->paginate(4);
    
            return view('siswa.index', compact('alldata', 'paginate'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect('/')->with(['error' => 'Pencarian gagal']);
        }
    }

    public function dashboard(){

    }
}
