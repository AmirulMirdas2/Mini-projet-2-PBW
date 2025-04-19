<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view('sesi/login');
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required', // Perbaikan di sini
            'password' => 'required', // Perbaikan di sini
        ], [
            'email.required' => 'Email tidak boleh kosong', // Perbaikan di sini
            'password.required' => 'Password tidak boleh kosong', // Perbaikan di sini
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            // Jika autentikasi berhasil
            return redirect('dashboard-admin')->with('success, berhasil login');
        } else {
            // Jika autentikasi gagal
            return redirect('sesi')->withErrors('Username dan Password yang dimasukkan tidak valid');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('sesi')->with('success', 'berhasil logout');
    }

    function register()
    {
        return view('sesi/register');
    }

    function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash password
        ];

        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            // Jika login berhasil
            return redirect('dashboard-user')->with('success', 'Berhasil login');
        } else {
            // Jika login gagal
            return redirect('/sesi')->withErrors('Username dan Password yang dimasukkan tidak valid');
        }
    }
}
