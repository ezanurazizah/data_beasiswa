@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aplikasi Laravel</title>
  <link rel="stylesheet" href="{{ asset('leaning-peach/css/bootstrap.css') }}">
</head>
<body>
  <h1 class="text-center mt-3">Manajemen Pendaftaran Beasiswa</h1>
  <div class="text-center">
    <a href="{{ route('beasiswa.index') }}" class="btn btn-primary">Daftar Beasiswa</a>
    <a href="{{ route('pendaftar.index') }}" class="btn btn-primary">Formulir Pendaftaran</a>
    <a href="{{ route('penerima.index') }}" class="btn btn-primary">Penerima Beasiswa</a>
  </div>

  <div class="mt-3">
    @yield('konten')
  </div>
  
</body>
</html>
@endsection
