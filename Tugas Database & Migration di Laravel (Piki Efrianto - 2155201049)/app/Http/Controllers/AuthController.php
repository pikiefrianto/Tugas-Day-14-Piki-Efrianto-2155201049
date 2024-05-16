<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        // Kode untuk menampilkan form login
    }

    public function welcome_(Request $request)
    {
        // Debug: tampilkan semua data yang dikirim
        $firstname = $request->input('firstname', '');
        $lastname = $request->input('lastname', '');

        return view('welcome_', compact('firstname', 'lastname'));
        // Validasi data yang masuk
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255', // Mengizinkan Biodata bernilai null
        ]);

        // Mengambil data yang telah divalidasi
        $validatedData = $request->all();

        // Debugging: Output data untuk memeriksa isinya
        dd($validatedData);

        // Proses login atau simpan ke database
        // ...
        return view('welcome_');
    }

}