@extends('beasiswa.layout')

@section('konten')

<h4>Tambah Beasiswa</h4>
<form action="{{ route('beasiswa.store') }}" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>Deskripsi</label>
    <input type="text" name="deskripsi" class="form-control mb-2">
    <label>Tanggal Dimulai</label>
    <input type="date" name="tanggal_mulai" class="form-control mb-2">
    <label>Tanggal Berakhir</label>
    <input type="date" name="tanggal_berakhir" class="form-control mb-2">
    <label>Jumlah</label>
    <input type="number" name="jumlah" class="form-control mb-2">

    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection