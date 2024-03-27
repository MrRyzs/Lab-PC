<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function register()
    {
        return view('auth.registration');
    }

    public function register_proses(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nis' => 'required|unique:users',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'kelas' => 'required',
        ]);

        $data = [
            'nis' => $request->nis,
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'kelas' => $request->kelas,
        ];

        $user = User::create($data);

        if ($user) {
            return redirect()->route('login');
        } else {
            return redirect()->route('register')->with('error', 'Registrasi Gagal');
        }
    }

    public function login()
    {
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Email atau Password Salah');
        }
    }
}
