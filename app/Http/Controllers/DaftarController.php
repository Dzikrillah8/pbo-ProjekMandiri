<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Models\Laporan;

class DaftarController extends Controller
{
    public function index(Request $request){
        $data = Laporan::all();
        return view('daftar', compact('data'));
    }
}
