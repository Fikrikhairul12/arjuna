<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            // 'username' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'no_tlpn' => 'required',
            'address' => 'required',
            'password' => 'required|min:6',
            'g-recaptcha-response' => 'required'
        ]);

        // VALIDASI RECAPTCHA
        /** @var \Illuminate\Http\Client\Response $response */
        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip()
            ]
        );

        $result = $response->json();

        if (!$result['success']) {
            return back()->withErrors([
                'captcha' => 'Captcha gagal, coba lagi'
            ]);
        }

        // SIMPAN USER
        User::create([
            // 'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'no_tlpn' => $request->no_tlpn,
            'address' => $request->address,
            'role' => 2,
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Register berhasil');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
        }

        return back()->withErrors(['login' => 'Email atau password salah']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
