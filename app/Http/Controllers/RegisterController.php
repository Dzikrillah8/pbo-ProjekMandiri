<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }


    public function store(Request $request) {

        $message=[
            'required' => ':attribute harus diisi',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute mksimal :max karakter',
            'mimes' => 'file :attribute harus bertipe jpg, jpeg, png',
            ];

        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:16',
            'password' => 'required|min:5|max:8',
        ], $message );

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        toastr()->success('registrasi berhasil dilakukan!');
        return redirect()->route('login.index');
        
    }
}
