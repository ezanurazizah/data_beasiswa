@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pendaftaran Beasiswa</title>
  <link rel="stylesheet" href="{{ asset('leaning-peach/css/bootstrap.css') }}">
</head>
<body>
  <h1 class="text-center mt-3">Pendaftaran Beasiswa</h1>

  <div class="mt-3">
    @yield('konten')
  </div>
  
</body>
</html>
@endsection