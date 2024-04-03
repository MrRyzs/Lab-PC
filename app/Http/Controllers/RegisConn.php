<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB; // Tambahkan ini di bagian atas file

class RegisConn extends Controller
{
    public function index()
    {
        return view('ui.register');
    }

    public function register_process(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'nis' => 'required|unique:users',
            'phone' => 'required',
            'kelas' => 'required',
            'password' => 'required|min:8',
        ]);

        // Generate UUID manually
        $id = Str::uuid();

        // Buat array data dengan nilai id yang telah digenerate
        $data = [
            'id' => $id,
            'nis' => $request->nis,
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'kelas' => $request->kelas,
            'password' => Hash::make($request->password),
        ];
        
        // Gunakan DB::table untuk menyisipkan data ke dalam tabel
        $user = DB::table('users')->insert($data);

        if ($user) {
            return redirect('/login');
        } else {
            return redirect()->route('reg')->with('error', 'Registrasi Gagal');
        }
    }
}
