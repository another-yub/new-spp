<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
    $alldata = Siswa::all();
    return view('siswa.index', compact('alldata'));
    }
    public function tambah() {
        $kelas = Kelas::all();
        return view('siswa.tambah', compact('kelas'));
    }
}
