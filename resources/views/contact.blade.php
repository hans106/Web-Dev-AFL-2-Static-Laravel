@extends('layout.mainlayout')

@section('title', $title)

@section('content')
    <style>
        .contact-hero {
            background: linear-gradient(120deg, #2e588a 0%, #163a69 60%, #4e8890 100%);
            padding: 2.5rem 1.5rem 2rem 1.5rem;
            border-radius: 1.5rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.13);
            text-align: center;
            margin: 2rem 0 2.5rem 0;
            color: #fff;
            position: relative;
        }
        .contact-hero .hero-icon {
            font-size: 3.5rem;
            color: #fffbe6;
            margin-bottom: 0.7rem;
            filter: drop-shadow(0 2px 8px #163a69);
        }
        .contact-form-card {
            background: #fff;
            border-radius: 1.25rem;
            box-shadow: 0 4px 18px rgba(44,62,80,0.10);
            padding: 2.2rem 1.5rem 1.5rem 1.5rem;
            max-width: 480px;
            margin: 0 auto 2.5rem auto;
            border-top: 4px solid #ffc107;
        }
        .contact-form-card .form-label {
            font-weight: 500;
        }
        .contact-info-row {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            margin-bottom: 2.5rem;
            flex-wrap: wrap;
        }
        .contact-info-box {
            background: #f8f9fa;
            border-radius: 1.25rem;
            box-shadow: 0 2px 8px rgba(44,62,80,0.06);
            padding: 1.5rem 1.2rem 1.2rem 1.2rem;
            min-width: 200px;
            flex: 1 1 200px;
            text-align: center;
            border-bottom: 3px solid #ffc107;
            transition: box-shadow 0.22s, transform 0.22s;
        }
        .contact-info-box:hover {
            box-shadow: 0 8px 32px rgba(44,62,80,0.13);
            transform: translateY(-5px) scale(1.03);
            border-bottom: 3px solid #2e588a;
        }
        .contact-info-icon {
            font-size: 2.1rem;
            color: #ffc107;
            margin-bottom: 0.5rem;
        }
        .contact-cta {
            background: #ffc107;
            color: #163a69;
            border-radius: 1.25rem;
            text-align: center;
            padding: 1.5rem 1rem 1.2rem 1rem;
            margin-top: 2.5rem;
            font-size: 1.2rem;
            font-weight: 500;
            box-shadow: 0 2px 12px rgba(44,62,80,0.08);
        }
        .contact-cta .btn {
            font-size: 1.1rem;
            font-weight: 600;
        }
        @media (max-width: 768px) {
            .contact-hero { padding: 1.5rem 0.5rem 1.2rem 0.5rem; }
            .contact-form-card { padding: 1.2rem 0.5rem; }
            .contact-info-row { flex-direction: column; gap: 1rem; }
        }
    </style>

    <div class="container mt-5">
        <div class="contact-hero">
            <div class="hero-icon mb-2"><i class="fas fa-address-book"></i></div>
            <h1 class="display-4 fw-bold text-warning mb-2">{{ $title }}</h1>
            <p class="lead mb-0">Kami siap membantu Anda. Silakan hubungi kami melalui form atau info di bawah ini.</p>
        </div>

        <div class="contact-form-card mb-4">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama Anda">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email@domain.com">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda..."></textarea>
                </div>
                <button type="submit" class="btn btn-warning px-4 py-2 rounded-pill fw-bold">Kirim Pesan</button>
            </form>
        </div>

        <div class="contact-info-row mb-4">
            <div class="contact-info-box">
                <div class="contact-info-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="fw-bold mb-1 text-dark">Alamat</div>
                <div class="small text-secondary">{{ $contactData['alamat'] ?? '-' }}</div>
            </div>
            <div class="contact-info-box">
                <div class="contact-info-icon"><i class="fas fa-phone-alt"></i></div>
                <div class="fw-bold mb-1 text-dark">Telepon</div>
                <div class="small text-secondary">{{ $contactData['no_Kontak'] ?? '-' }}</div>
            </div>
            <div class="contact-info-box">
                <div class="contact-info-icon"><i class="fas fa-envelope"></i></div>
                <div class="fw-bold mb-1 text-dark">Email</div>
                <div class="small text-secondary">{{ $contactData['email'] ?? '-' }}</div>
            </div>
        </div>

        <div class="contact-cta">
            Hubungi kami untuk konsultasi gratis! <br>
            <a href="https://wa.me/62xxxxxxxxxx" class="btn btn-outline-dark rounded-pill mt-3 px-4 py-2 fw-bold" target="_blank"><i class="fab fa-whatsapp me-2"></i>WhatsApp</a>
        </div>
    </div>


@endsection
