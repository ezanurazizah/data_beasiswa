@extends('beasiswa.layout')

@section('konten')

<div class="d-flex">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Daftar Beasiswa</h2>
                </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('beasiswa.create') }}">Tambah Beasiswa</a>
    </div>
</div>

<table class="table container">
    <tr>
        <th>No</th>
        <th>Nama Beasiswa</th>
        <th>Deskripsi</th>
        <th>Tanggal Dimulai</th>
        <th>Tanggal Berakhir</th>
        <th>Jumlah</th>
        <th>Option</th>
    </tr>
    @foreach ($beasiswa as $index => $bsw)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $bsw->nama }}</td>
        <td>{{ $bsw->deskripsi }}</td>
        <td>{{ $bsw->tanggal_mulai }}</td>
        <td>{{ $bsw->tanggal_berakhir }}</td>
        <td>{{ $bsw->jumlah }}</td>
        <td>
            <a href="{{ route('beasiswa.edit', $bsw->id) }}" class="btn btn-sm btn-warning">Edit</a>
        </td>
        <td>
            <form action="{{ route('beasiswa.destroy', $bsw->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
