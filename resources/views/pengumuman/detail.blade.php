@extends('layout')

@section('judul', $data->judul_pengumuman)

@section('konten')

<!-- Header Section with Gradient Background -->
<section class="hero is-medium" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <div class="has-text-centered">
                        <span class="tag is-white is-medium mb-4 animate__animated animate__fadeInDown">
                            <i class="fas fa-bullhorn mr-2"></i>
                            PENGUMUMAN RESMI
                        </span>
                        <h1 class="title is-2 has-text-white has-text-weight-bold animate__animated animate__fadeInUp animate__delay-1s">
                            {{ $data->judul_pengumuman }}
                        </h1>
                        <div class="has-text-light animate__animated animate__fadeInUp animate__delay-2s">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            Dipublikasikan pada {{ date('d F Y', strtotime($data->created_at ?? now())) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wave separator -->
    <div class="hero-foot">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="height: 60px; width: 100%;">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" fill="#ffffff"></path>
        </svg>
    </div>
</section>

<!-- Main Content Section -->
<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-8-desktop">
                <!-- Content Card -->
                <div class="box animate__animated animate__fadeInUp" 
                     style="border-radius: 15px; 
                            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); 
                            border: none;
                            background: #ffffff;
                            position: relative;
                            margin-top: -30px;">
                    
                    <!-- Icon Header -->
                    <div class="has-text-centered mb-5">
                        <div class="is-inline-flex is-align-items-center is-justify-content-center"
                             style="width: 80px; 
                                    height: 80px; 
                                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                                    border-radius: 50%; 
                                    margin-top: -40px;">
                            <i class="fas fa-info-circle has-text-white is-size-3"></i>
                        </div>
                    </div>

                    <!-- Content Body -->
                    <div class="content is-medium" style="line-height: 1.8; color: #4a4a4a;">
                        <div class="has-text-justified" style="text-indent: 2em;">
                            {!! nl2br(e($data->konten_pengumuman)) !!}
                        </div>
                    </div>

                    <!-- Footer Info -->
                    <div class="has-background-light p-4 mt-5" style="border-radius: 10px; border-left: 4px solid #667eea;">
                        <div class="columns is-mobile is-vcentered">
                            <div class="column">
                                <p class="is-size-7 has-text-grey">
                                    <i class="fas fa-user mr-2"></i>
                                    Dikelola oleh: <strong>Admin Toko</strong>
                                </p>
                            </div>
                            <div class="column is-narrow">
                                <p class="is-size-7 has-text-grey">
                                    <i class="fas fa-eye mr-2"></i>
                                    Penting untuk dibaca
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="has-text-centered mt-6 animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="buttons is-centered">
                        <a href="/pengumuman" 
                           class="button is-primary is-medium is-rounded has-text-weight-semibold"
                           style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; min-width: 150px;">
                            <span class="icon">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                            <span>Kembali</span>
                        </a>
                        
                        <button class="button is-light is-medium is-rounded has-text-weight-semibold" 
                                onclick="window.print()" 
                                style="min-width: 150px;">
                            <span class="icon">
                                <i class="fas fa-print"></i>
                            </span>
                            <span>Cetak</span>
                        </button>
                        
                        <button class="button is-info is-medium is-rounded has-text-weight-semibold" 
                                onclick="shareAnnouncement()" 
                                style="min-width: 150px;">
                            <span class="icon">
                                <i class="fas fa-share-alt"></i>
                            </span>
                            <span>Bagikan</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Links Section -->
<section class="section has-background-light">
    <div class="container">
        <div class="has-text-centered mb-5">
            <h3 class="title is-4 has-text-grey-dark">
                <i class="fas fa-link mr-3"></i>
                Tautan Terkait
            </h3>
        </div>
        <div class="columns is-multiline is-centered">
            <div class="column is-4-desktop is-6-tablet">
                <div class="card hover-card" style="border-radius: 10px; transition: transform 0.3s ease;">
                    <div class="card-content has-text-centered">
                        <i class="fas fa-list is-size-3 has-text-primary mb-3"></i>
                        <p class="title is-6">Semua Pengumuman</p>
                        <a href="/pengumuman" class="button is-small is-primary is-outlined">Lihat Semua</a>
                    </div>
                </div>
            </div>
            <div class="column is-4-desktop is-6-tablet">
                <div class="card hover-card" style="border-radius: 10px; transition: transform 0.3s ease;">
                    <div class="card-content has-text-centered">
                        <i class="fas fa-home is-size-3 has-text-info mb-3"></i>
                        <p class="title is-6">Beranda Toko</p>
                        <a href="/" class="button is-small is-info is-outlined">Ke Beranda</a>
                    </div>
                </div>
            </div>
            <div class="column is-4-desktop is-6-tablet">
                <div class="card hover-card" style="border-radius: 10px; transition: transform 0.3s ease;">
                    <div class="card-content has-text-centered">
                        <i class="fas fa-phone is-size-3 has-text-success mb-3"></i>
                        <p class="title is-6">Hubungi Kami</p>
                        <a href="/kontak" class="button is-small is-success is-outlined">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    
    @media print {
        .hero, .section:last-child, .buttons {
            display: none !important;
        }
        .box {
            box-shadow: none !important;
            border: 1px solid #ddd !important;
        }
    }
    
    .animate__delay-1s {
        animation-delay: 0.5s;
    }
    
    .animate__delay-2s {
        animation-delay: 1s;
    }
</style>

<script>
    function shareAnnouncement() {
        if (navigator.share) {
            navigator.share({
                title: '{{ $data->judul_pengumuman }}',
                text: 'Pengumuman dari Toko: {{ $data->judul_pengumuman }}',
                url: window.location.href
            });
        } else {
            // Fallback untuk browser yang tidak mendukung Web Share API
            const url = window.location.href;
            navigator.clipboard.writeText(url).then(() => {
                alert('Link pengumuman telah disalin ke clipboard!');
            }).catch(() => {
                prompt('Salin link ini:', url);
            });
        }
    }
</script>

@endsection