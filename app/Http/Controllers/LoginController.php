<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class LoginController extends Controller
{
    public function index() {
            $alldata = Spp::all();
            return view('main.index', compact('alldata'));
    }

    public function dashboard(){

    }
}
