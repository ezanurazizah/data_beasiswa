@extends('pendaftar.layout')

@section('konten')

<h4>Edit Pendaftar Beasiswa</h4>
<form action="{{ route('pendaftar.update', $pendaftar->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mb-2">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $pendaftar->nama }}" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Email</label>
        <input type="email" name="email" value="{{ $pendaftar->email }}" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>No Telepon</label>
        <input type="number" name="telepon" value="{{ $pendaftar->telepon }}" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Alamat</label>
        <input type="text" name="alamat" value="{{ $pendaftar->alamat }}" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Pilih Beasiswa</label>
        <select name="data_beasiswa_id" class="form-control" required>
            @foreach($beasiswa as $bsw)
                <option value="{{ $bsw->id }}" {{ $bsw->id == $pendaftar->data_beasiswa_id ? 'selected' : '' }}>{{ $bsw->nama }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>

@endsection

            