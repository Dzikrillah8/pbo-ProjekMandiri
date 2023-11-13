<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Models\Laporan;


class DetailController extends Controller
{
    Public Function index($id) {
        $data = Laporan::where('id', $id)->first();
        return view('detail', compact('data'));
    }
}
