@extends('layout')

@section('judul', 'Pengumuman')

@section('konten')

<!-- Header Section dengan Gradient Background -->
<section class="hero is-fullheight-with-navbar" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 60vh;">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="animate__animated animate__fadeInDown">
                <h1 class="title is-1 has-text-white has-text-weight-bold mb-4" style="font-size: 3.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                    📢 PENGUMUMAN
                </h1>
                <h2 class="subtitle is-3 has-text-light mb-5" style="font-weight: 300;">
                    Informasi Terbaru dari <span class="has-text-weight-bold">TOKO ZENITH</span>
                </h2>
                <div class="is-size-6 has-text-light">
                    <span class="icon-text">
                        <span class="icon">
                            <i class="fas fa-bell"></i>
                        </span>
                        <span>Tetap update dengan pengumuman terbaru kami</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Wave Divider -->
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0;">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 60px;">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="#ffffff"></path>
        </svg>
    </div>
</section>

<!-- Content Section -->
<section class="section" style="background-color: #f8f9fa; padding-top: 4rem; padding-bottom: 4rem;">
    <div class="container">
        <!-- Section Header -->
        <div class="has-text-centered mb-6">
            <h2 class="title is-2 has-text-dark mb-3">Daftar Pengumuman</h2>
            <div class="is-divider" style="border-color: #667eea; width: 80px; margin: 0 auto;"></div>
        </div>

        <!-- Cards Grid -->
        <div class="columns is-multiline is-variable is-6">
            @foreach ($data as $item)
            <div class="column is-one-third animate__animated animate__fadeInUp" style="animation-delay: {{ $loop->index * 0.1 }}s;">
                <div class="card has-shadow" style="
                    border-radius: 15px; 
                    border: none;
                    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
                    transition: all 0.3s ease;
                    overflow: hidden;
                    background: white;
                " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.15)'" 
                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'">
                    
                    <!-- Card Header dengan Gradient -->
                    <div class="card-header" style="background: linear-gradient(45deg, #667eea, #764ba2); padding: 1.5rem;">
                        <div class="card-header-title is-centered" style="color: white; font-weight: 600;">
                            <span class="icon mr-2">
                                <i class="fas fa-bullhorn"></i>
                            </span>
                            Pengumuman
                        </div>
                    </div>

                    <!-- Card Content -->
                    <div class="card-content" style="padding: 2rem;">
                        <div class="content">
                            <h3 class="title is-5 has-text-dark mb-3" style="line-height: 1.4;">
                                {{ $item->judul_pengumuman }}
                            </h3>
                            <div class="is-size-7 has-text-grey">
                                <span class="icon-text">
                                    <span class="icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <span>{{ date('d M Y', strtotime($item->created_at ?? now())) }}</span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <footer class="card-footer" style="border-top: 1px solid #f1f1f1;">
                        <a href="/pengumuman/{{ $item->id }}" 
                           class="card-footer-item has-text-weight-semibold" 
                           style="
                               color: #667eea; 
                               padding: 1rem;
                               transition: all 0.3s ease;
                               text-decoration: none;
                           "
                           onmouseover="this.style.backgroundColor='#667eea'; this.style.color='white';"
                           onmouseout="this.style.backgroundColor='transparent'; this.style.color='#667eea';">
                            <span class="icon-text">
                                <span>Baca Selengkapnya</span>
                                <span class="icon ml-2">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                    </footer>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Empty State -->
        @if(count($data) == 0)
        <div class="has-text-centered" style="padding: 4rem 2rem;">
            <div class="icon is-large has-text-grey-light mb-4">
                <i class="fas fa-inbox fa-3x"></i>
            </div>
            <h3 class="title is-4 has-text-grey">Belum Ada Pengumuman</h3>
            <p class="subtitle is-6 has-text-grey">Pengumuman akan muncul di sini ketika tersedia.</p>
        </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: linear-gradient(135deg, #764ba2 0%, #667eea 100%); padding: 3rem 0;">
    <div class="container has-text-centered">
        <div class="animate__animated animate__fadeInUp">
            <h3 class="title is-3 has-text-white mb-4">Jangan Lewatkan Update Terbaru!</h3>
            <p class="subtitle is-5 has-text-light mb-5">
                Ikuti terus pengumuman dari Toko Zenith untuk mendapatkan informasi terkini
            </p>
            <div class="buttons is-centered">
                <button class="button is-white is-medium" style="border-radius: 25px; padding: 0 2rem;">
                    <span class="icon">
                        <i class="fas fa-bell"></i>
                    </span>
                    <span>Aktifkan Notifikasi</span>
                </button>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .is-divider {
        height: 2px;
        background: linear-gradient(to right, #667eea, #764ba2);
        border: none;
        margin: 1rem auto;
    }
    
    .animate__fadeInUp {
        animation-fill-mode: both;
    }
    
    @media (max-width: 768px) {
        .hero .title {
            font-size: 2.5rem !important;
        }
        
        .hero .subtitle {
            font-size: 1.25rem !important;
        }
        
        .card {
            margin-bottom: 1.5rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Smooth scroll untuk animasi
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });
        
        cards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });
    });
</script>
@endpush