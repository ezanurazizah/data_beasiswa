@extends('beasiswa.layout')

@section('konten')

<h4>Edit Beasiswa</h4>
<form action="{{ route('beasiswa.update', $beasiswa->id) }}" method="POST">
  @csrf
  <label>Nama</label>
  <input type="text" name="nama" value="{{ $beasiswa->nama }}" class="form-control mb-2">
  <label>Deskripsi</label>
  <input type="text" name="deskripsi" value="{{ $beasiswa->deskripsi }}" class="form-control mb-2">
  <label>Tanggal Dimulai</label>
  <input type="date" name="tanggal_mulai" value="{{ $beasiswa->tanggal_mulai }}" class="form-control mb-2">
  <label>Tanggal Berakhir</label>
  <input type="date" name="tanggal_berakhir" value="{{ $beasiswa->tanggal_berakhir }}" class="form-control mb-2">
  <label>Jumlah</label>
  <input type="number" name="jumlah" value="{{ $beasiswa->jumlah }}" class="form-control mb-2">

  <button type="submit" class="btn btn-primary">Edit</button>
</form>

@endsection
