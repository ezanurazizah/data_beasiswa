@extends('pendaftar.layout')

@section('konten')

<div class="d-flex">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Daftar Pendaftaran Beasiswa</h2>
                </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('pendaftar.create') }}">Tambah Pendaftar Baru</a>
    </div>
</div>

<table class="table container">
    <tr>
        <th>Nama </th>
        <th>Email</th>
        <th>No Telepon</th>
        <th>Alamat</th>
        <th>Pilih Beasiswa</th>
        <th>Option</th>
    </tr>
    @foreach ($pendaftar as $index => $item)
    <tr>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->telepon }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->dataBeasiswa->nama }}</td>
        <td>
            <a href="{{ route('pendaftar.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
        </td>
        <td>
            <form action="{{ route('pendaftar.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
