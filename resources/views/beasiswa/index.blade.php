@extends('beasiswa.layout')

@section('konten')

<div class="d-flex">
<h4>List Beasiswa</h4>
<div class="ms-auto">
    <a class="btn btn-primary" href="{{ route('beasiswa.create') }}">Tambah</a>
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
@foreach ($beasiswa as $index=>$beasiswa)
<tr>
<td>{{ $index +1 }}</td>
<td>{{ $beasiswa->nama }}</td>
<td>{{ $beasiswa->deskripsi }}</td>
<td>{{ $beasiswa->tanggal_mulai }}</td>
<td>{{ $beasiswa->tanggal_berakhir }}</td>
<td>{{ $beasiswa->jumlah }}</td>
<td>
    <a href="{{ route('beasiswa.edit', $beasiswa->id) }}" class="btn btn-sm btn-warning">Edit</a>
</td>
<td>
    <form action="{{ route('beasiswa.destroy', $beasiswa->id) }}" class="post">
        @csrf
        <button class="btn btn-sm btn-danger">Delete</button>
    </form>
</td>
</tr>
@endforeach
</table>

@endsection
