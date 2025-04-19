<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listUsers()
    {
        $users = User::where('role', 'user')->select('name')->get();
        return view('admin.list-user', compact('users'));
    }

    public function listEmail()
    {
        $users = User::where('role', 'user')->select('email')->get();
        return view('admin.list-user', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'role' => 'required|in:user,admin',
            'password' => 'required|string|min:8',
            'email' => 'required|email|unique:users,email',
        ]);

        User::create([
            'name' => $validatedData['username'],
            'role' => $validatedData['role'],
            'password' => Hash::make($validatedData['password']),
            'email' => $validatedData['email'],
        ]);

        return back()->with('success', 'Berhasil mendaftarkan user.');
    }

    public function updateProfile(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed', // Tambahkan validasi konfirmasi password
        ]);

        // Ambil pengguna yang sedang login
        $userId = Auth::id(); // Dapatkan ID pengguna yang sedang login

        // Siapkan query untuk memperbarui nama
        $query = 'update users set name = ?';

        // Siapkan parameter untuk query
        $params = [$request->name];

        // Jika password diisi, tambahkan ke query dan parameter
        if ($request->filled('password')) {
            $query .= ', password = ?';
            $params[] = Hash::make($request->password);
        }

        // Tambahkan kondisi untuk ID pengguna
        $query .= ' where id = ?';
        $params[] = $userId;

        // Jalankan query
        $affected = DB::update($query, $params);

        // Redirect kembali ke halaman setting dengan pesan sukses
        if ($affected > 0) {
            return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Tidak ada perubahan yang dilakukan.');
        }
    }
}
