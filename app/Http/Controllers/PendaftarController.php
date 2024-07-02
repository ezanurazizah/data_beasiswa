<?php

namespace App\Http\Controllers;

use App\Models\pendaftar;
use App\Models\DataBeasiswa;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftar = Pendaftar::with('dataBeasiswa')->latest()->paginate(5);
    return view('pendaftar.index', compact('pendaftar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $beasiswa = DataBeasiswa::all();
        return view('pendaftar.create', compact('beasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email',
        'telepon' => 'required|string|max:15',
        'alamat' => 'required|string',
        'data_beasiswa_id' => 'required|integer|exists:data_beasiswas,id',
    ]);


    Pendaftar::create($request->all());

    return redirect()->route('pendaftar.index')->with('success', 'Pendaftaran berhasil ditambahkan!');

}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pendaftar = pendaftar::find($id);

        if (!$pendaftar) {
            return redirect()->route('pendaftar.index')->with('error', 'pendaftar tidak ditemukan');
        }

        return view('pendaftar.index', compact('pendaftar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $beasiswa = DataBeasiswa::all();
        return view('pendaftar.index', compact('pendaftar', 'beasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'telepon' => 'required|string|max:15',
            'alamat' => 'required|string',
            'data_beasiswa_id' => 'required|integer|exists:data_beasiswas,id',
        ]);

        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->update($request->all());

        return redirect()->route('pendaftar.index')->with('success', 'Pendaftaran berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->delete();
        return redirect()->route('pendaftar.index')->with('success', 'Pendaftar berhasil dihapus!');
    }
}
