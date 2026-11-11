@extends('layouts.main')

@section('title', 'Beranda')

@section('content')

    <img src="{{ asset('images/banner.jpg') }}" class="img-fluid rounded mb-4" alt="Banner konser TiketWar">

    <div class="p-5 mb-4 bg-light rounded-3 text-center">
        <h1 class="display-5 fw-bold">Selamat Datang di TiketWar</h1>
        <p class="lead">Tempat war tiket konser paling gercep!</p>


        <div class="row mt-4">
            <!-- Jumlah Konser -->
            <div class="col-md-4 mb-3">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="display-6">
                            {{ $jumlahKonser }}
                        </div>
                        <div class="text-muted">
                            Jumlah Konser
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jumlah Promotor -->
            <div class="col-md-4 mb-3">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="display-6">
                            {{ $jumlahPromotor }}
                        </div>
                        <div class="text-muted">
                            Jumlah Promotor
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Sisa Tiket -->
            <div class="col-md-4 mb-3">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="display-6">
                            {{ number_format($totalSisa, 0, ',', '.') }}
                        </div>
                        <div class="text-muted">
                            Total Sisa Tiket
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('konser.index') }}" class="btn btn-primary btn-lg">Lihat Daftar Konser</a>
    </div>

@endsection