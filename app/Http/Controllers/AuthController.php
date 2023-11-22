<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;


class AuthController extends Controller
{
    public function showLoginForm()
{
    return view('auth.login', ['title' => 'Login']);
}

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Login berhasil
        return redirect()->intended('/dashboard');
    }

    // Login gagal
    return redirect()->route('login')->withErrors(['email' => 'Email atau password salah']);
}

public function showRegistrationForm()
{
    return view('auth.register', ['title' => 'Register']);
}

public function register(Request $request)
{
    // Validasi data registrasi
    $this->validate($request, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Buat pengguna baru
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    // Login pengguna setelah registrasi
    Auth::login($user);

    return redirect('/dashboard');
}
}
