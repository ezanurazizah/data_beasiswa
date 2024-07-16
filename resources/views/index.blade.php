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
  <style>
    body {
      background-color: #0a1f5a;
      color: white;
    }
    .navbar-nav .nav-link {
      color: white !important;
    }
    .hero-section {
      padding: 50px 0;
      text-align: center;
    }
    .hero-section h1 {
      color: white;
      font-size: 2.5rem;
      font-weight: bold;
    }
    .hero-section p {
      color: white;
      font-size: 1.2rem;
    }
    .hero-section .btn {
      margin-top: 20px;
      padding: 10px 20px;
    }
    .hero-section img {
      max-width: 100%;
      height: auto;
    }
    .large-image {
      max-width: 100%; 
      height: auto; 
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('image/images.png') }}" alt="image" style="height: 50px;">
        BEASISWA UNGGULAN 2024
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero-section container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1>Beasiswa Unggulan 2024</h1>
        <p>Meraih masa depan sukses bersama Beasiswa Unggulan dengan menjadi insan cerdas dan kompetitif.</p>
        <p> Segera daftarkan diri anda sekarang juga.</p>
        <a href="{{ route('beasiswa.index') }}" class="btn btn-light">Lihat Beasiswa</a>
        <a href="{{ route('pendaftar.index') }}" class="btn btn-light">Pendaftaran</a>
        <a href="{{ route('penerima.index') }}" class="btn btn-light">Penerima Beasiswa</a>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('image/graduation.jpeg') }}" alt="Graduation Image" class="large-image">
      </div>
    </div>
  </div>

  <div class="mt-3">
    @yield('konten')
  </div>
  
  <script src="{{ asset('leaning-peach/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
@endsection
