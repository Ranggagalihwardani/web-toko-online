@extends('layout')

@section('judul', 'Kategori Produk')

@section('konten')

<!-- Hero Section with Modern Design -->
<section class="hero is-large" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-6-desktop is-8-tablet">
                    <div class="animate__animated animate__fadeInLeft">
                        <div class="mb-4">
                            <span class="tag is-white is-medium">
                                <i class="fas fa-store mr-2"></i>
                                Toko Zenith
                            </span>
                        </div>
                        <h1 class="title is-1 has-text-white has-text-weight-bold mb-4">
                            Kategori Produk
                        </h1>
                        <p class="subtitle is-4 has-text-light mb-5">
                            Temukan berbagai kategori produk berkualitas yang kami tawarkan untuk memenuhi kebutuhan Anda
                        </p>
                        <div class="buttons">
                            <button class="button is-white is-medium is-rounded" onclick="scrollToCategories()">
                                <span class="icon">
                                    <i class="fas fa-arrow-down"></i>
                                </span>
                                <span>Lihat Kategori</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="column is-6-desktop is-4-tablet has-text-centered">
                    <div class="animate__animated animate__fadeInRight animate__delay-1s">
                        <div class="is-inline-flex is-align-items-center is-justify-content-center"
                             style="width: 200px; height: 200px; background: rgba(255,255,255,0.1); border-radius: 50%; backdrop-filter: blur(10px);">
                            <i class="fas fa-boxes has-text-white" style="font-size: 4rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wave separator -->
    <div class="hero-foot">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="height: 80px; width: 100%;">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" fill="#ffffff"></path>
        </svg>
    </div>
</section>

<!-- Categories Section -->
<section class="section" id="categories-section" style="padding-top: 0;">
    <div class="container">
        <!-- Section Header -->
        <div class="has-text-centered mb-6 animate__animated animate__fadeInUp">
            <h2 class="title is-2 has-text-grey-dark mb-3">
                <i class="fas fa-th-large mr-3 has-text-primary"></i>
                Jelajahi Kategori
            </h2>
            <p class="subtitle is-5 has-text-grey">
                Pilih kategori yang sesuai dengan kebutuhan Anda
            </p>
            <div class="divider" style="width: 80px; height: 4px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); margin: 0 auto; border-radius: 2px;"></div>
        </div>

        <!-- Categories Grid -->
        <div class="columns is-multiline is-centered">
            @foreach ($data as $index => $item)
            <div class="column is-4-desktop is-6-tablet animate__animated animate__fadeInUp" 
                 style="animation-delay: {{ $index * 0.1 }}s;">
                <div class="category-card" 
                     style="background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%); 
                            border-radius: 20px; 
                            border: 2px solid transparent;
                            background-clip: padding-box;
                            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
                            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                            position: relative;
                            overflow: hidden;">
                    
                    <!-- Background Pattern -->
                    <div class="category-pattern" 
                         style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; opacity: 0.05;">
                        <i class="fas fa-cube" style="font-size: 6rem; color: #667eea;"></i>
                    </div>
                    
                    <!-- Card Header -->
                    <div class="card-header" style="background: transparent; border: none; padding: 2rem 2rem 1rem;">
                        <div class="has-text-centered">
                            <!-- Dynamic Icon based on category -->
                            <div class="category-icon mb-4"
                                 style="width: 80px; height: 80px; 
                                        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                                        border-radius: 50%; 
                                        margin: 0 auto;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);">
                                <i class="fas {{ getCategoryIcon($loop->index) }} has-text-white is-size-3"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card Content -->
                    <div class="card-content" style="padding: 0 2rem 2rem;">
                        <div class="content has-text-centered">
                            <h3 class="title is-4 has-text-grey-dark mb-3" style="line-height: 1.2;">
                                {{ $item->nama_kategori }}
                            </h3>
                            <p class="has-text-grey is-size-6 mb-4">
                                Temukan produk berkualitas dalam kategori {{ strtolower($item->nama_kategori) }}
                            </p>
                        </div>
                    </div>
                    
                    <!-- Card Footer -->
                    <div class="card-footer" style="background: transparent; border: none; padding: 0 2rem 2rem;">
                        <div class="card-footer-item" style="border: none; padding: 0;">
                            <a href="/kategori-produk/{{ $item->id }}" 
                               class="button is-fullwidth is-medium is-rounded category-btn"
                               style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                                      border: none; 
                                      color: white; 
                                      font-weight: 600;
                                      transition: all 0.3s ease;">
                                <span>Lihat Produk</span>
                                <span class="icon">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Empty State -->
        @if(count($data) == 0)
        <div class="has-text-centered animate__animated animate__fadeInUp">
            <div class="box" style="max-width: 500px; margin: 0 auto; border-radius: 15px;">
                <i class="fas fa-inbox is-size-1 has-text-grey-light mb-4"></i>
                <h3 class="title is-4 has-text-grey">Belum Ada Kategori</h3>
                <p class="has-text-grey">Kategori produk akan segera tersedia. Silakan kembali lagi nanti.</p>
            </div>
        </div>
        @endif
    </div>
</section>

<!-- Statistics Section -->
<section class="section has-background-light">
    <div class="container">
        <div class="columns is-multiline has-text-centered">
            <div class="column is-3-desktop is-6-tablet">
                <div class="animate__animated animate__countUp">
                    <p class="title is-2 has-text-primary has-text-weight-bold">{{ count($data) }}+</p>
                    <p class="subtitle is-6 has-text-grey">Kategori Tersedia</p>
                </div>
            </div>
            <div class="column is-3-desktop is-6-tablet">
                <div class="animate__animated animate__countUp animate__delay-1s">
                    <p class="title is-2 has-text-info has-text-weight-bold">100+</p>
                    <p class="subtitle is-6 has-text-grey">Produk Berkualitas</p>
                </div>
            </div>
            <div class="column is-3-desktop is-6-tablet">
                <div class="animate__animated animate__countUp animate__delay-2s">
                    <p class="title is-2 has-text-success has-text-weight-bold">24/7</p>
                    <p class="subtitle is-6 has-text-grey">Layanan Online</p>
                </div>
            </div>
            <div class="column is-3-desktop is-6-tablet">
                <div class="animate__animated animate__countUp animate__delay-3s">
                    <p class="title is-2 has-text-warning has-text-weight-bold">99%</p>
                    <p class="subtitle is-6 has-text-grey">Kepuasan Pelanggan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .category-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        border: 2px solid rgba(102, 126, 234, 0.2);
    }
    
    .category-card:hover .category-icon {
        transform: scale(1.1);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.5);
    }
    
    .category-card:hover .category-btn {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        transform: scale(1.02);
    }
    
    .category-card:hover .category-pattern {
        opacity: 0.1;
        transform: rotate(10deg);
    }
    
    .category-icon {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .category-btn {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .category-pattern {
        transition: all 0.3s ease;
    }
    
    @media (max-width: 768px) {
        .hero.is-large .hero-body {
            padding: 3rem 1.5rem;
        }
        
        .category-card {
            margin-bottom: 2rem;
        }
    }
</style>

<script>
    function scrollToCategories() {
        document.getElementById('categories-section').scrollIntoView({
            behavior: 'smooth'
        });
    }
    
    // Dynamic icon assignment (you can customize this based on your categories)
    function getCategoryIcon(index) {
        const icons = [
            'fa-laptop', 'fa-mobile-alt', 'fa-headphones', 'fa-camera', 
            'fa-gamepad', 'fa-watch', 'fa-home', 'fa-car',
            'fa-book', 'fa-heart', 'fa-gift', 'fa-star'
        ];
        return icons[index % icons.length];
    }
</script>

@php
function getCategoryIcon($index) {
    $icons = [
        'fa-laptop', 'fa-mobile-alt', 'fa-headphones', 'fa-camera', 
        'fa-gamepad', 'fa-watch', 'fa-home', 'fa-car',
        'fa-book', 'fa-heart', 'fa-gift', 'fa-star'
    ];
    return $icons[$index % count($icons)];
}
@endphp

@endsection