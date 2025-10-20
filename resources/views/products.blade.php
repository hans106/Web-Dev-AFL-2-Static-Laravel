@extends('layout.mainlayout')

@section('title', $title)

@section('content')
    <style>
        
    </style>

    <div class="container mt-5 pt-4">
        <header class="text-center mb-5 pb-3">
            <h1 class="display-4 fw-bold text-warning mb-4">{{ $title }}</h1>
            <div class="">

            </div>
            <p class="lead text-light mx-auto align-justify" style="max-width: 500px; weight: 500">
                {{ $description }}
            </p>
        </header>
        <div class="row mb-5">
            <div class="col-12">
                <div id="storeCard" class="card store-feature-card rounded-3">
                    <div class="row g-0">
                        <div class="col-md-7 store-feature-card-img-container position-relative">
                            <img src="{{ asset('images/Bagian_Dalam_Toko_Sumber_Teknik.jpg') }}"
                                class="img-fluid w-100 store-image" alt="Bagian Dalam Toko Sumber Teknik"
                                style="object-fit: cover; height: 500px;">
                        </div>
                        <div class="col-md-5 d-flex align-items-center bg-white p-4 p-md-5">
                            <div>
                                <h3 class="fw-bold text-dark mb-3">{{ $judulCard }}</h3>
                                <p class="text-muted">
                                    {{ $visitCard }}
                                </p>
                                <a href="/contact-us" class="btn btn-outline-primary mt-3">Visit Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <form method="GET" action="" class="mb-4">
            <div class="row g-2">
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="Cari nama barang..." value="{{ request('search') }}">
                </div>
                <div class="col-md-3">
                    <select name="merk" class="form-select">
                        <option value="">Semua Merk</option>
                        @foreach ($products->pluck('merk')->unique() as $merk)
                            <option value="{{ $merk }}" {{ request('merk') == $merk ? 'selected' : '' }}>{{ $merk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="number" name="max_price" class="form-control" placeholder="Harga Maksimal" value="{{ request('max_price') }}">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-warning w-100">Filter</button>
                </div>
            </div>
        </form>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card h-100 product-card shadow-lg rounded-xl overflow-hidden">
                        <img src="{{ asset(str_replace('%2F', '/', rawurlencode($product->image))) }}" class="card-img-top" alt="{{ $product->name }}"
                            loading="lazy" style="object-fit: contain; width: 100%; height: auto; max-height: 250px; background: #fff;">
                        <div class="card-body d-flex flex-column p-4">
                            <h5 class="card-title text-dark fw-bold mb-2 text-truncate" title="{{ $product->name }}">
                                {{ $product->name }}
                            </h5>
                            <p class="mb-1 text-muted small">Merk: <span class="fw-bold">{{ $product->merk }}</span></p>
                            <p class="card-text text-secondary small flex-grow-1 mb-3 line-clamp-3">
                                {{ $product->description }}
                            </p>
                            <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                                <p class="mb-0 fw-bolder text-danger fs-5">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </p>
                                <a href="#" class="btn btn-primary btn-sm rounded-pill px-3 shadow-md">
                                    <i class="fas fa-shopping-cart me-1"></i> Beli
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
