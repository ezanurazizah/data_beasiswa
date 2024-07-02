<?php

namespace App\Http\Controllers;

use App\Models\DataBeasiswa;
use App\Models\pendaftar;
use App\Models\penerima;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $pendaftar = Pendaftar::with('dataBeasiswa')->get();
    return view('penerima.index', compact('pendaftar'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pendaftar = pendaftar::all();
        $beasiswa = DataBeasiswa::all();
        return view('penerima.create', compact('pendaftar', 'beasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pendaftar_id' => 'required',
            'data_beasiswa_id' => 'required',
        ]);

        penerima::create($request->all());

        return redirect()->route('penerima.index')
                        ->with('success', 'penerima created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('penerima.show', compact('penerima'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendaftar = pendaftar::all();
        $beasiswa = DataBeasiswa::all();
        return view('penerima.edit', compact('penerima', 'pendaftar', 'beasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, penerima $penerima)
    {
        $request->validate([
            'pendaftar_id' => 'required',
            'data_beasiswa_id' => 'required',
        ]);

        $penerima->update($request->all());

        return redirect()->route('penerima.index')
                        ->with('success', 'penerima updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $penerima)
    {
        $penerima = penerima::findOrFail($penerima);
        $penerima->delete();
        return redirect()->route('penerima.index')->with('success', 'Penerima berhasil dihapus!');
    }
}
