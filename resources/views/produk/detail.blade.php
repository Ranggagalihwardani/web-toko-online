@extends('layout')

@section('judul', 'Produk ' . $data->nama_produk)

@section('konten')

<!-- Modern Gradient Hero Section -->
<section class="hero is-medium" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
    <!-- Animated Background Elements -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1;">
        <div style="position: absolute; top: 20%; left: 10%; width: 100px; height: 100px; background: white; border-radius: 50%; animation: float 6s ease-in-out infinite;"></div>
        <div style="position: absolute; top: 60%; right: 15%; width: 60px; height: 60px; background: white; border-radius: 50%; animation: float 4s ease-in-out infinite reverse;"></div>
        <div style="position: absolute; bottom: 20%; left: 60%; width: 80px; height: 80px; background: white; border-radius: 50%; animation: float 5s ease-in-out infinite;"></div>
    </div>
    
    <div class="hero-body has-text-centered" style="position: relative; z-index: 2;">
        <div class="container">
            <h1 class="title is-1 has-text-white has-text-weight-bold animate__animated animate__fadeInDown" 
                style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3); font-size: 3.5rem; margin-bottom: 1rem;">
                {{ $data->nama_produk }}
            </h1>

            <!-- Harga Produk -->
            <p class="has-text-white is-size-4 animate__animated animate__fadeInUp animate__delay-1s" style="margin-bottom: 1.5rem;">
                <strong>Harga:</strong> Rp {{ number_format($data->Harga, 0, ',', '.') }}
            </p>

            <!-- Kategori -->
            <div class="animate__animated animate__fadeInUp animate__delay-1s">
                <span class="tag is-large is-white is-rounded" 
                      style="padding: 1rem 2rem; font-size: 1.2rem; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                    <i class="fas fa-tag" style="margin-right: 0.5rem;"></i>
                    {{ $data->kategori->nama_kategori }}
                </span>
            </div>

            <!-- Tombol Tambah ke Keranjang -->
            <div class="mt-5 animate__animated animate__fadeInUp animate__delay-2s">
                <form action="{{ route('keranjang.tambah', $data->id) }}" method="POST">
                    @csrf
                    <button type="submit" 
                            class="button is-warning is-medium is-rounded"
                            style="margin-top: 1.5rem; font-weight: bold; box-shadow: 0 5px 15px rgba(0,0,0,0.2); transition: all 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                        <i class="fas fa-cart-plus" style="margin-right: 0.5rem;"></i>
                        Tambah ke Keranjang
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="section" style="padding-top: 4rem; padding-bottom: 4rem; background: linear-gradient(to bottom, #f8f9fa, #ffffff);">
    <div class="container">
        <!-- Glassmorphism Card -->
        <div class="animate__animated animate__fadeInUp" 
             style="background: rgba(255, 255, 255, 0.9); 
                    backdrop-filter: blur(20px); 
                    border: 1px solid rgba(255, 255, 255, 0.2);
                    border-radius: 20px; 
                    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                    padding: 3rem;
                    position: relative;
                    overflow: hidden;">
            
            <!-- Card Decoration -->
            <div style="position: absolute; top: -50px; right: -50px; width: 100px; height: 100px; 
                        background: linear-gradient(45deg, #667eea, #764ba2); 
                        border-radius: 50%; opacity: 0.1;"></div>
            
            <div class="columns is-vcentered" style="position: relative; z-index: 2;">
                <!-- Image Column -->
                <div class="column is-5">
                    <div class="has-text-centered animate__animated animate__fadeInLeft">
                        @if($data->gambar_cover)
                            <div style="position: relative; display: inline-block;">
                                <img src="{{ asset($data->gambar_cover) }}" 
                                     alt="{{ $data->nama_produk }}" 
                                     style="max-width: 100%; 
                                            height: auto; 
                                            border-radius: 15px; 
                                            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
                                            max-height: 350px;
                                            transition: transform 0.3s ease, box-shadow 0.3s ease;"
                                     onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 20px 40px rgba(0, 0, 0, 0.3)'"
                                     onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 15px 35px rgba(0, 0, 0, 0.2)'">
                                
                                <!-- Image overlay effect -->
                                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
                                           background: linear-gradient(45deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
                                           border-radius: 15px; opacity: 0; transition: opacity 0.3s ease;"
                                     onmouseover="this.style.opacity='1'"
                                     onmouseout="this.style.opacity='0'"></div>
                            </div>
                        @else
                            <div style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
                                        padding: 4rem 2rem;
                                        border-radius: 15px;
                                        border: 2px dashed #d1d5db;">
                                <i class="fas fa-image has-text-grey" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                                <p class="has-text-grey-dark" style="font-size: 1.1rem;">Gambar tidak tersedia</p>
                            </div>
                        @endif
                    </div>
                </div>
                
                <!-- Content Column -->
                <div class="column is-7">
                    <div class="animate__animated animate__fadeInRight">
                        <div class="content" 
                             style="font-size: 1.1rem; 
                                    line-height: 1.8; 
                                    color: #4a5568;
                                    padding: 2rem;
                                    background: rgba(248, 250, 252, 0.5);
                                    border-radius: 15px;
                                    border-left: 4px solid #667eea;">
                            {{ $data->konten_produk }}
                        </div>

                        <!-- Harga di bawah konten -->
                        <p class="has-text-weight-semibold mt-4 is-size-4" style="color: #764ba2;">
                            Harga: Rp {{ number_format($data->Harga, 0, ',', '.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Enhanced Back Button -->
        <div class="has-text-centered animate__animated animate__fadeInUp animate__delay-1s" style="margin-top: 3rem;">
            <a href="{{ url()->previous() }}" 
               class="button is-large is-rounded animate__animated animate__pulse animate__infinite"
               style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                      color: white;
                      border: none;
                      padding: 1rem 3rem;
                      font-size: 1.2rem;
                      font-weight: 600;
                      box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
                      transition: all 0.3s ease;
                      position: relative;
                      overflow: hidden;"
               onmouseover="this.style.transform='translateY(-2px)'; 
                           this.style.boxShadow='0 15px 30px rgba(102, 126, 234, 0.4)';
                           this.classList.remove('animate__pulse')"
               onmouseout="this.style.transform='translateY(0)'; 
                          this.style.boxShadow='0 10px 20px rgba(102, 126, 234, 0.3)';
                          this.classList.add('animate__pulse')">
                <i class="fas fa-arrow-left" style="margin-right: 0.5rem;"></i>
                Kembali
            </a>
        </div>
    </div>
</section>

<!-- Custom CSS Animations -->
<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

.animate__pulse {
    animation-duration: 2s;
}

/* Additional responsive adjustments */
@media (max-width: 768px) {
    .hero .title {
        font-size: 2.5rem !important;
    }
    
    .card-content {
        padding: 2rem !important;
    }
    
    .columns {
        margin: 0 !important;
    }
    
    .column {
        padding: 1rem !important;
    }
}

/* Smooth scroll behavior */
html {
    scroll-behavior: smooth;
}

/* Enhanced focus states for accessibility */
.button:focus {
    outline: 2px solid #667eea;
    outline-offset: 2px;
}
</style>

@endsection
