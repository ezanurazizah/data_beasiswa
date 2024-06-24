<?php

namespace App\Http\Controllers;

use App\Models\DataBeasiswa;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function welcome()
    {
        return view('auth.welcome');
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

    function store(Request $request)
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

        return redirect('beasiswa.create')->with('success', 'beasiswa berhasil ditambahkan!');

    }

    public function edit($id)
    {
        $beasiswa = DataBeasiswa::find($id);
        return view('beasiswa.edit', compact('beasiswa'));
    }

function update(Request $request, $id)
{
    $beasiswa = DataBeasiswa::find($id);
    $beasiswa->nama = $request->nama;
    $beasiswa->deskripsi = $request->deskripsi;
    $beasiswa->tanggal_mulai = $request->tanggal_mulai;
    $beasiswa->tanggal_berakhir = $request->tanggal_berakhir;
    $beasiswa->jumlah = $request->jumlah;
    $beasiswa->update();

    return redirect()->route('beasiswa.index');
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
        $beasiswa->delete();
    return redirect()->route('beasiswa.index'); 
}

}