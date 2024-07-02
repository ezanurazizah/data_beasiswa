@extends('penerima.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Show Penerima Beasiswa</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('pendaftar.index') }}"> Kembali</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    {{ $pendaftar->nama }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $pendaftar->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Telepon:</strong>
                    {{ $pendaftar->telepon }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    {{ $pendaftar->alamat }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Beasiswa:</strong>
                    {{ $pendaftar->data_beasiswa_id->nama }}
                </div>
            </div>
        </div>
    </div>
@endsection
