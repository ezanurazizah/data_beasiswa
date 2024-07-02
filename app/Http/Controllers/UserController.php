<?php

namespace App\Http\Controllers;

use App\Models\DataBeasiswa;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil melakukan otentikasi...
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi yang Anda masukkan salah.',
        ]);
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil melakukan otentikasi...
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi yang Anda masukkan salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }
    
    public function index()
    {
        $beasiswa = DataBeasiswa::all();
        return view('beasiswa.index', compact('beasiswa'));
    }

    public function create()
    {
        return view('beasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date',
            'jumlah' => 'required|integer',
        ]);

        DataBeasiswa::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_berakhir' => $request->tanggal_berakhir,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('beasiswa')->with('success', 'Beasiswa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $beasiswa = DataBeasiswa::find($id);
        return view('beasiswa.edit', compact('beasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date',
            'jumlah' => 'required|integer',
        ]);

        $beasiswa = DataBeasiswa::find($id);

        if (!$beasiswa) {
            return redirect()->route('beasiswa.index')->with('error', 'Beasiswa tidak ditemukan');
        }

        $beasiswa->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_berakhir' => $request->tanggal_berakhir,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('beasiswa.index')->with('success', 'Beasiswa berhasil diperbarui!');
    }

    public function show($id)
    {
        $beasiswa = DataBeasiswa::find($id);

        if (!$beasiswa) {
            return redirect()->route('beasiswa.index')->with('error', 'Beasiswa tidak ditemukan');
        }

        return view('beasiswa.show', compact('beasiswa'));
    }

    public function destroy($id)
    {
        $beasiswa = DataBeasiswa::find($id);

        if ($beasiswa) {
            $beasiswa->delete();
        }

        return redirect()->route('beasiswa.index');
    }

}