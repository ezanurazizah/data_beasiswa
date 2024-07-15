@extends('penerima.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Daftar Penerima Beasiswa</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('pendaftar.create') }}"> Tambah Penerima Baru</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Beasiswa</th>
                <th width="280px">Aksi</th>
            </tr>
            @foreach ($pendaftar as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->telepon }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->dataBeasiswa ? $item->dataBeasiswa->nama : 'Tidak ada data beasiswa' }}</td>
                    <td>
                        <form action="{{ route('pendaftar.destroy', $item->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('pendaftar.show', $item->id) }}">Detail</a>
                            <a class="btn btn-primary" href="{{ route('pendaftar.edit', $item->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
