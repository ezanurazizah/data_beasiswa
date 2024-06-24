@extends('beasiswa.layout')

@section('konten')
<div class="container mt-5">
    <h2>Detail Beasiswa</h2>

    <div class="card mt-3">
        <div class="card-header">
            <h3>{{ $beasiswa->nama }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Deskripsi:</strong> {{ $beasiswa->deskripsi }}</p>
            <p><strong>Tanggal Mulai:</strong> {{ $beasiswa->tanggal_mulai }}</p>
            <p><strong>Tanggal Berakhir:</strong> {{ $beasiswa->tanggal_berakhir }}</p>
            <p><strong>Jumlah:</strong> {{ $beasiswa->jumlah }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('beasiswa.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('beasiswa.edit', $beasiswa->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('beasiswa.destroy', $beasiswa->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus beasiswa ini?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
