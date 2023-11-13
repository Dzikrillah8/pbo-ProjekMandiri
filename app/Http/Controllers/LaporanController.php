<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    Public Function index() {
        return view('laporan');
    }

    public function store(Request $request)
    {

            $message=[
            'required' => ':attribute harus diisi',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute mksimal :max karakter',
            'mimes' => 'file :attribute harus bertipe jpg, jpeg, png',
            ];

            // validasi request form
            $this->validate ($request,[
                'nama' => 'required|min:3|max:50',
                'kelas' => 'required',
                'tanggal' => 'required|min:5|max:255',
                'judul_laporan' => 'required|min:3|max:255',
                'keterangan' => 'required|min:5|max:255',
                'photo' => 'mimes:jpg,jpeg,png',
            ], $message );
    
            $file = $request->file('photo');
    
            $nama_file = time().'-'. $file->getClientOriginalName();
    
            $file->storeAs('photo', $nama_file);

            Laporan::create ([
                        'user_id' => $request->user_id,
                        'nama' => $request->nama,
                        'kelas' => $request->kelas,
                        'tanggal' => $request->tanggal,
                        'judul_laporan' => $request->judul_laporan,
                        'keterangan' => $request->keterangan,
                        'photo' => $nama_file,
                    ]);
    
    
            return redirect()->route('daftar.index')->with('success', 'laporan berhasil dibuat');
            
    }

    Public Function delete($id) {
        $data = Laporan::find($id);

       Storage::disk('local')->delete('public/photo/' . $data->photo);

        $data->delete();

        return redirect()->route('daftar.index')->with('success', 'Data berhasil dihapus');

        
    }

}

