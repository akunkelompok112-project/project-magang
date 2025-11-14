<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $loginInput = $request->input('login');

        $user = User::where('nim', $loginInput)
            ->orWhere('nip', $loginInput)
            ->orWhere('email', $loginInput)
            ->first();

        if (!$user) {
            return back()->withErrors(['login' => 'User tidak ditemukan.'])->withInput();
        }

        // Kita langsung memasukkan email user yang ditemukan dan password mentah dari request
        if (!Auth::attempt(['email' => $user->email, 'password' => $request->password], $request->boolean('remember'))) {
            return back()->withErrors(['password' => 'Password salah.'])->withInput();
        }

        $request->session()->regenerate();

        // Redirect berdasarkan role
        if ($user->isMahasiswa()) {
            return redirect()->route('mahasiswa.dashboard');
        } elseif ($user->isDosen()) {
            return redirect()->route('dosen.dashboard');
        } else {
            return redirect()->intended('/home');
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate(); // Invalidasi session saat logout
        $request->session()->regenerateToken(); // Regenerate CSRF token

        return redirect()->route('login');
    }
}
