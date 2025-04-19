<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import model User

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function listUsers()
    {
        // Ambil semua data dari tabel users (hanya kolom name)
        $users = User::select('name', 'email', 'role', 'created_at', 'id')->get();

        // Kirim data pengguna ke view
        return view('admin.list-user', compact('users'));
    }
    public function deleteUser($id)
    {
        // Cari pengguna berdasarkan ID
        $user = User::find($id);

        // Jika pengguna ditemukan, hapus
        if ($user) {
            $user->delete();
            return redirect()->route('list-user')->with('success', 'Pengguna berhasil dihapus.');
        }

        // Jika pengguna tidak ditemukan, kembalikan pesan error
        return redirect()->route('list-user')->with('error', 'Pengguna tidak ditemukan.');
    }
}
