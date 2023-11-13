<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    
    Public Function index() {
        $data = Laporan::all();
        return view('admin', compact('data'));
    }

    Public Function edit($id) {
        $data = Laporan::find($id);
        return view('editadmin', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Laporan::find($id);
        

        // custom message
        $message=[
            'required' => ':attribute harus diisi',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute mksimal :max karakter',
            'mimes' => 'file :attribute harus bertipe jpg, jpeg, png',
            ];
            
        //dd($request);

        // validasi request form
        $this->validate ($request,[
            'status' => 'required',
            'tanggapan' => 'required|min:5|max:255',
        ], $message );


            $data->update ([
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'tanggal' => $request->tanggal,
                'judul_laporan' => $request->judul_laporan,
                'keterangan' => $request->keterangan,
                'status' => $request->status,
                'tanggapan' => $request->tanggapan,
            ]);


        return redirect()->route('admin.index')->with('success', 'Data berhasil diubah');
    }

}