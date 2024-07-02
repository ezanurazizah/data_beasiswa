@extends('pendaftar.layout')

@section('konten')

<h4>Edit Pendaftar Beasiswa</h4>
<form action="{{ route('pendaftar.update', $pendaftar->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $pendaftar->nama }}" class="form-control mb-2">
    <label>Email</label>
    <input type="text" name="email" value="{{ $pendaftar->email }}" class="form-control mb-2">
    <label>No Telepon</label>
    <input type="number" name="telepon" value="{{ $pendaftar->telepon }}" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" value="{{ $pendaftar->alamat }}" class="form-control mb-2">
    <label>Pilih Beasiswa</label>
    <select name="data_beasiswa_id" class="form-control mb-2">
        @foreach($beasiswa as $bsw)
            <option value="{{ $bsw->id }}" {{ $bsw->id == $pendaftar->data_beasiswa_id ? 'selected' : '' }}>{{ $bsw->nama }}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary">Edit</button>
</form>

@endsection
