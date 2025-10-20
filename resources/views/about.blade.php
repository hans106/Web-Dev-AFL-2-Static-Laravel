@extends('layout.mainlayout')

@section('title', $title)

@section('content')
    <style>
        .card-header-visi {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
        }

        .card-header-misi {
            background: linear-gradient(45deg, #28a745, #1e7e34);
            color: white;
        }

        .shadow-strong {
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .shadow-strong:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.3);
        }
    </style>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 text-warning fw-bold mb-3">{{ $title }}</h1>
            <h3 class=" text-white">Komitmen kami pada kualitas dan integritas sejak awal.</h3>
        </div>

        <div class="row mb-5 justify-content-center">
            <div class="col-lg-10">

                <div class="card p-4 shadow-strong border-0 rounded-3">
                    <div class="card-body">
                        <p class="lead text-dark">{!! $aboutData['description1'] !!}</p>
                        <p class="text-secondary">{!! $aboutData['description2'] !!}</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center mb-5 fw-bolder text-light pt-5">Visi Misi <br> Misi Sumber Teknik</h2>
        <div class="row justify-content-center g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-strong rounded-4 overflow-hidden">
                    <div class="card-header-visi p-3 border-0">
                        <h3 class="card-title text-center fw-bold mb-0 fs-5"><i class="fas fa-eye me-2"></i> Visi</h3>
                    </div>
                    <div class="card-body p-4 bg-white">
                        <ul class="list-unstyled mt-3">
                            <div class="card-body p-4 bg-white">
                                <h3 class="card-text">{{ $aboutData['visi'] }}</h3>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-strong rounded-4 overflow-hidden">
                    <div class="card-header-misi p-3 border-0">
                        <h3 class="card-title text-center fw-bold mb-0 fs-5"><i class="fas fa-bullseye me-2"></i> Misi</h3>
                    </div>
                    <div class="card-body p-4 bg-white">
                        <ul class="list-unstyled mt-3">
                            <div class="card-body p-4 bg-white">
                                <h3 class="card-text ">{{ $aboutData['misi'] }}</h3>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 pt-5">
            <h2 class="fw-bold mb-4 text-light">Mengapa Memilih Sumber Teknik?</h2>
            <div class="row g-4">
                @foreach ($aboutData['kelebihan'] as $kelebihan)
                    <div class="col-md-4">
                        <div class="card p-4 h-100 shadow-sm rounded-3 border-0">
                            <h4 class="fw-bold text-dark">{{ $kelebihan['title'] }}</h4>
                            <p class="text-secondary mb-4">
                                {{ $kelebihan['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
