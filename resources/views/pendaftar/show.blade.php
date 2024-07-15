@extends('pendaftar.layout')

@section('konten')
<div class="container mt-5">
    <h2>Detail Pendaftaran Beasiswa</h2>

    <div class="card mt-3">
        <div class="card-header">
            <h3>{{ $pendaftar->nama }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ pendaftar->email }}</p>
            <p><strong>No Telepon:</strong> {{ pendaftar->telepon }}</p>
            <p><strong>Alamat:</strong> {{ pendaftar->alamat }}</p>
            <p><strong>Pilih Beasiswa:</strong> {{ pendaftar->data_beasiswa_id }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('pendaftar.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('pendaftar.edit', pendaftar->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('pendaftar.destroy', pendaftar->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus pendaftaran beasiswa ini?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection