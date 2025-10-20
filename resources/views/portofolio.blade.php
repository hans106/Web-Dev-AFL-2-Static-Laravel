@extends('layout.mainlayout')

@section('title', $title)

@section('content')
    <div class="container mt-5 pt-4">
        
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bold text-warning mb-3">Portfolio</h1>
            <p class="lead text-light">Aktivitas dan Testimoni dari Pelanggan Kami</p>
        </header>

        <section class="mb-5">
            <h2 class="text-light mb-4">Aktivitas</h2>
            <div class="row g-4">
                @foreach ($activities as $idx => $activity)
                    <div class="col-md-6">
                        <div class="card h-100 activity-card {{ $activity->is_job_vacancy ? 'border-warning' : '' }}"
                            style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#activityModal{{ $idx }}">
                            @if (file_exists(public_path($activity->image)))
                                <img src="{{ asset(str_replace('%2F', '/', rawurlencode($activity->image))) }}"
                                    class="card-img-top activity-image" alt="Activity Image"
                                    style="height: 250px; object-fit: cover;">
                            @else
                                <img src="{{ asset('images/placeholder.jpg') }}" class="card-img-top activity-image"
                                    alt="Activity Image" style="height: 250px; object-fit: cover;">
                            @endif
                            <div class="card-body">
                                @if ($activity->is_job_vacancy)
                                    <div class="badge bg-warning text-dark mb-2">Lowongan Kerja</div>
                                @endif
                                <p class="card-text">{{ $activity->description }}</p>
                                <small class="text-muted">{{ $activity->created_at->format('d F Y') }}</small>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="activityModal{{ $idx }}" tabindex="-1"
                        aria-labelledby="activityModalLabel{{ $idx }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="activityModalLabel{{ $idx }}">Aktivitas</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    @if (file_exists(public_path($activity->image)))
                                        <img src="{{ asset(str_replace('%2F', '/', rawurlencode($activity->image))) }}"
                                            class="img-fluid mb-3" alt="Activity Image"
                                            style="max-width:100%;height:auto;object-fit:contain;">
                                    @else
                                        <img src="{{ asset('images/placeholder.jpg') }}" class="img-fluid mb-3"
                                            alt="Activity Image" style="max-width:100%;height:auto;object-fit:contain;">
                                    @endif
                                    <div>
                                        @if ($activity->is_job_vacancy)
                                            <div class="badge bg-warning text-dark mb-2">Lowongan Kerja</div>
                                        @endif
                                        <p class="card-text">{{ $activity->description }}</p>
                                        <small class="text-muted">{{ $activity->created_at->format('d F Y') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="mb-5">
            <h2 class="text-light mb-4">Testimoni Pelanggan</h2>
            <div class="row g-4">
                @foreach ($testimonials as $testimonial)
                    <div class="col-md-4">
                        <div class="card h-100 testimonial-card">
                            <div class="card-body">
                                <div class="mb-3">
                                    @php $rate10 = $testimonial->rating * 2; @endphp
                                    @for ($i = 0; $i < 10; $i++)
                                        @if ($i < $rate10)
                                            <i class="fas fa-star text-warning"></i>
                                        @else
                                            <i class="far fa-star text-warning"></i>
                                        @endif
                                    @endfor
                                    <span class="ms-2 text-dark fw-bold">{{ $rate10 }}/10</span>
                                </div>
                                <p class="card-text mb-3">"{{ $testimonial->content }}"</p>
                                <footer class="blockquote-footer mt-3 text-light pengirim-testimoni-box">
                                    <strong>{{ $testimonial->user_name }}</strong>
                                    <br>
                                    <small class="text-light pl-2">{{ $testimonial->created_at->format('d F Y') }}</small>
                                </footer>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="text-center mb-5">
            <div class="p-5 bg-dark rounded-3">
                <h3 class="text-warning mb-3">Tertarik dengan Layanan Kami?</h3>
                <p class="text-light mb-4">Kunjungi toko kami atau hubungi tim sales kami untuk informasi lebih lanjut</p>
                <a href="/contact-us" class="btn btn-warning btn-lg">Hubungi Kami</a>
            </div>
        </section>
    </div>
@endsection
