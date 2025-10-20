@extends('layout.mainlayout')

@section('title', $title)

@section('content')

    <div class="p-4">
        <div class="card home-hero-card">
            <div class="row g-0 h-100">
                <div class="col-md-6 hero-text-content d-flex align-items-center">
                    <h1 class="display-4 fw-bolder mb-3 text-warning">{{ $title }}</h1>
                    <h2 class="h2 fw-light mb-4">{{ $openingTeks }}</h2>
                    <a href="/products" class="btn btn-warning btn-lg rounded-pill shadow-lg mt-3">Produk</a>
                </div>

                <div class="col-md-6 h-100">
                    <img src="{{ asset('images/Toko_Sumber_Teknik.jpg') }}" alt="Toko Sumber Teknik" class="img-fluid h-100">
                </div>
            </div>
        </div>
    </div>
@endsection
