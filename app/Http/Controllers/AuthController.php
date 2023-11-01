<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\AuthMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    function index()
    {
        return view('auth.index');
    }
    function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email harus diisi',
                'password.required' => 'Password harus diisi',
            ]
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->email_verified_at !== null) {
                if (Auth::user()->role == "admin") {
                    return redirect('admin');
                } else if (Auth::user()->role == "user") {
                    return redirect('user');
                }
            } else {
                Auth::logout();
                return redirect(route('login'))->withErrors('Akun anda belum aktif, harap verifikasi terlebih dahulu');
            }
        } else {
            return redirect(route('login'))->withErrors('Email atau password salah');
        }
    }

    function regist()
    {
        return view('auth.regist');
    }

    function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|min:5|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        $str = Str::random(100);
        $infoRegist = [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => $request->password,
            'verify_key' => $str
        ];

        User::create($infoRegist);
        $details = [
            'nama' => $infoRegist['fullname'],
            'role' => 'user',
            'datetime' => now(),
            'website' => 'laravel10',
            'url' => 'http://' . request()->getHttpHost() . '/' . 'verify/' . $infoRegist['verify_key']
        ];

        Mail::to($infoRegist['email'])->send(new AuthMail($details));

        return redirect()->route('login')->with('success', 'Link verifikasi telah dikirim ke email anda. Cek email untuk melakukan registrasi.');
    }

    function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)->update(['email_verified_at' => now()]);
            return redirect()->route('login')->with('success', 'Verifikasi berhasil, akun anda sudah aktif.');
        } else {
            return redirect()->route('login')->withErrors('Keys tidak valid, pastikan telah melakukan register')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
