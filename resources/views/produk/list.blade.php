@extends('layout')

@section('judul', 'Produk')

@section('konten')

<!-- Hero Section with Modern Gradient -->
<section class="hero is-large" style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #ec4899 100%), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-7-desktop">
                    <div class="animate__animated animate__fadeInLeft">
                        <div class="mb-4">
                            <span class="tag is-white is-large has-text-weight-semibold">
                                <i class="fas fa-store mr-2"></i>
                                Toko Zenith
                            </span>
                        </div>
                        <h1 class="title is-1 has-text-white has-text-weight-bold mb-4" style="font-size: 3.5rem; line-height: 1.1;">
                            Koleksi Produk
                            <span class="has-text-warning">Premium</span>
                        </h1>
                        <p class="subtitle is-4 has-text-light mb-5" style="max-width: 500px;">
                            Jelajahi berbagai produk berkualitas tinggi yang telah dipilih khusus untuk memenuhi kebutuhan dan gaya hidup modern Anda
                        </p>
                        <div class="field has-addons">
                            <div class="control is-expanded">
                                <input class="input is-large" type="text" id="searchInput" placeholder="Cari produk yang Anda inginkan...">
                            </div>
                            <div class="control">
                                <button class="button is-white is-large" onclick="searchProducts()">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-5-desktop has-text-centered">
                    <div class="animate__animated animate__fadeInRight animate__delay-1s">
                        <div class="product-showcase" style="position: relative;">
                            <!-- Floating product icons -->
                            <div class="floating-icon" style="position: absolute; top: 20%; left: 10%; animation: float 3s ease-in-out infinite;">
                                <div class="icon-circle">
                                    <i class="fas fa-laptop has-text-white"></i>
                                </div>
                            </div>
                            <div class="floating-icon" style="position: absolute; top: 10%; right: 20%; animation: float 3s ease-in-out infinite 0.5s;">
                                <div class="icon-circle">
                                    <i class="fas fa-mobile-alt has-text-white"></i>
                                </div>
                            </div>
                            <div class="floating-icon" style="position: absolute; bottom: 30%; left: 20%; animation: float 3s ease-in-out infinite 1s;">
                                <div class="icon-circle">
                                    <i class="fas fa-headphones has-text-white"></i>
                                </div>
                            </div>
                            <div class="floating-icon" style="position: absolute; bottom: 10%; right: 10%; animation: float 3s ease-in-out infinite 1.5s;">
                                <div class="icon-circle">
                                    <i class="fas fa-camera has-text-white"></i>
                                </div>
                            </div>
                            <!-- Central icon -->
                            <div class="is-inline-flex is-align-items-center is-justify-content-center"
                                 style="width: 180px; height: 180px; background: rgba(255,255,255,0.15); border-radius: 50%; backdrop-filter: blur(20px); margin: 80px auto;">
                                <i class="fas fa-box-open has-text-white" style="font-size: 4rem;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wave separator -->
    <div class="hero-foot">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="height: 100px; width: 100%;">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" fill="#ffffff"></path>
        </svg>
    </div>
</section>

<!-- Filter and Sort Section -->
<section class="section" style="padding-top: 0; padding-bottom: 2rem;">
    <div class="container">
        <div class="card" style="border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);">
            <div class="card-content">
                <div class="columns is-vcentered">
                    <div class="column">
                        <div class="field is-grouped is-grouped-multiline">
                            <div class="control">
                                <span class="tag is-medium is-light">
                                    <i class="fas fa-filter mr-2"></i>
                                    Filter & Sortir
                                </span>
                            </div>
                            <div class="control">
                                <div class="select">
                                    <select id="categoryFilter">
                                        <option value="">Semua Kategori</option>
                                        @foreach($data->unique('kategori.nama_kategori') as $item)
                                            <option value="{{ $item->kategori->nama_kategori }}">{{ $item->kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="control">
                                <div class="select">
                                    <select id="sortBy">
                                        <option value="name">Urutkan: Nama A-Z</option>
                                        <option value="name-desc">Urutkan: Nama Z-A</option>
                                        <option value="category">Urutkan: Kategori</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-narrow">
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-white" id="gridView" onclick="changeView('grid')">
                                    <i class="fas fa-th"></i>
                                </button>
                            </div>
                            <div class="control">
                                <button class="button is-light" id="listView" onclick="changeView('list')">
                                    <i class="fas fa-list"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="section" id="products-section">
    <div class="container">
        <!-- Section Header -->
        <div class="has-text-centered mb-6 animate__animated animate__fadeInUp">
            <h2 class="title is-2 has-text-grey-dark mb-3">
                <i class="fas fa-shopping-bag mr-3 has-text-primary"></i>
                Produk Unggulan
            </h2>
            <p class="subtitle is-5 has-text-grey">
                Temukan produk terbaik dengan kualitas premium
            </p>
            <div class="divider" style="width: 100px; height: 4px; background: linear-gradient(135deg, #4f46e5 0%, #ec4899 100%); margin: 0 auto; border-radius: 2px;"></div>
        </div>

        <!-- Products Grid -->
        <div class="columns is-multiline" id="productsContainer">
            @foreach ($data as $index => $item)
            <div class="column is-4-desktop is-6-tablet product-item animate__animated animate__fadeInUp" 
                 style="animation-delay: {{ $index * 0.1 }}s;"
                 data-category="{{ $item->kategori->nama_kategori }}"
                 data-name="{{ $item->nama_produk }}">
                
                <div class="product-card" 
                     style="background: #ffffff; 
                            border-radius: 20px; 
                            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
                            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                            position: relative;
                            overflow: hidden;
                            border: 2px solid transparent;">
                    
                    <!-- Card Header with Gradient -->
                    <div class="card-header" 
                         style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #ec4899 100%); 
                                border: none; 
                                padding: 0; 
                                position: relative;
                                height: 120px;">
                        
                        <!-- Product Icon -->
                        <div class="has-text-centered" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                            <div class="product-icon"
                                 style="width: 70px; height: 70px; 
                                        background: rgba(255,255,255,0.2); 
                                        border-radius: 50%; 
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        backdrop-filter: blur(10px);
                                        transition: all 0.3s ease;">
                                <i class="fas {{ getProductIcon($loop->index) }} has-text-white is-size-4"></i>
                            </div>
                        </div>
                        
                        <!-- Category Badge -->
                        <div style="position: absolute; top: 15px; right: 15px;">
                            <span class="tag is-white is-small has-text-weight-semibold">
                                {{ $item->kategori->nama_kategori }}
                            </span>
                        </div>
                    </div>
                    
                    <!-- Card Content -->
                    <div class="card-content" style="padding: 2rem;">
                        <div class="content">
                            <h3 class="title is-4 has-text-grey-dark mb-3" style="line-height: 1.3;">
                                {{ $item->nama_produk }}
                            </h3>
                            <div class="tags has-addons mb-4">
                                <span class="tag is-light">Kategori</span>
                                <span class="tag is-primary">{{ $item->kategori->nama_kategori }}</span>
                            </div>
                            <p class="has-text-grey is-size-6 mb-4">
                                Produk berkualitas tinggi dengan spesifikasi terbaik untuk memenuhi kebutuhan Anda.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Card Footer -->
                    <div class="card-footer" style="background: #f8f9fa; border: none; padding: 1.5rem 2rem;">
                        <div class="card-footer-item" style="border: none; padding: 0;">
                            <a href="/produk/{{ $item->id }}" 
                               class="button is-fullwidth is-medium is-rounded product-btn"
                               style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); 
                                      border: none; 
                                      color: white; 
                                      font-weight: 600;
                                      transition: all 0.3s ease;">
                                <span>Lihat Detail</span>
                                <span class="icon">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Hover overlay -->
                    <div class="product-overlay" 
                         style="position: absolute; 
                                top: 0; 
                                left: 0; 
                                right: 0; 
                                bottom: 0; 
                                background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(236, 72, 153, 0.1)); 
                                opacity: 0; 
                                transition: opacity 0.3s ease;
                                pointer-events: none;"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Empty State -->
        @if(count($data) == 0)
        <div class="has-text-centered animate__animated animate__fadeInUp">
            <div class="box" style="max-width: 500px; margin: 0 auto; border-radius: 15px;">
                <i class="fas fa-box-open is-size-1 has-text-grey-light mb-4"></i>
                <h3 class="title is-4 has-text-grey">Belum Ada Produk</h3>
                <p class="has-text-grey">Produk akan segera tersedia. Silakan kembali lagi nanti.</p>
            </div>
        </div>
        @endif

        <!-- No Results State -->
        <div class="has-text-centered" id="noResults" style="display: none;">
            <div class="box" style="max-width: 500px; margin: 0 auto; border-radius: 15px;">
                <i class="fas fa-search is-size-1 has-text-grey-light mb-4"></i>
                <h3 class="title is-4 has-text-grey">Tidak Ada Hasil</h3>
                <p class="has-text-grey">Coba ubah kata kunci pencarian atau filter yang digunakan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="section has-background-light">
    <div class="container">
        <div class="columns is-multiline has-text-centered">
            <div class="column is-3-desktop is-6-tablet">
                <div class="animate__animated animate__countUp">
                    <p class="title is-2 has-text-primary has-text-weight-bold">{{ count($data) }}+</p>
                    <p class="subtitle is-6 has-text-grey">Produk Tersedia</p>
                </div>
            </div>
            <div class="column is-3-desktop is-6-tablet">
                <div class="animate__animated animate__countUp animate__delay-1s">
                    <p class="title is-2 has-text-info has-text-weight-bold">{{ $data->unique('kategori.nama_kategori')->count() }}+</p>
                    <p class="subtitle is-6 has-text-grey">Kategori Produk</p>
                </div>
            </div>
            <div class="column is-3-desktop is-6-tablet">
                <div class="animate__animated animate__countUp animate__delay-2s">
                    <p class="title is-2 has-text-success has-text-weight-bold">100%</p>
                    <p class="subtitle is-6 has-text-grey">Kualitas Terjamin</p>
                </div>
            </div>
            <div class="column is-3-desktop is-6-tablet">
                <div class="animate__animated animate__countUp animate__delay-3s">
                    <p class="title is-2 has-text-warning has-text-weight-bold">24/7</p>
                    <p class="subtitle is-6 has-text-grey">Layanan Support</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .product-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        border: 2px solid rgba(79, 70, 229, 0.2);
    }
    
    .product-card:hover .product-icon {
        transform: scale(1.2);
        background: rgba(255,255,255,0.3);
    }
    
    .product-card:hover .product-btn {
        background: linear-gradient(135deg, #7c3aed 0%, #ec4899 100%);
        transform: scale(1.02);
    }
    
    .product-card:hover .product-overlay {
        opacity: 1;
    }
    
    .icon-circle {
        width: 50px;
        height: 50px;
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(10px);
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    .floating-icon {
        animation: float 3s ease-in-out infinite;
    }
    
    .product-icon {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .product-btn {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .product-overlay {
        transition: opacity 0.3s ease;
    }
    
    /* List view styles */
    .list-view .product-item {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .list-view .product-card {
        display: flex;
        flex-direction: row;
        height: 200px;
    }
    
    .list-view .card-header {
        flex: 0 0 200px;
        height: 100%;
    }
    
    .list-view .card-content {
        flex: 1;
        display: flex;
        align-items: center;
    }
    
    .list-view .card-footer {
        flex: 0 0 200px;
        display: flex;
        align-items: center;
    }
    
    @media (max-width: 768px) {
        .hero.is-large .hero-body {
            padding: 3rem 1.5rem;
        }
        
        .product-card {
            margin-bottom: 2rem;
        }
        
        .floating-icon {
            display: none;
        }
        
        .list-view .product-card {
            flex-direction: column;
            height: auto;
        }
        
        .list-view .card-header {
            flex: none;
            height: 120px;
        }
    }
</style>

<script>
    let currentView = 'grid';
    
    function searchProducts() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const products = document.querySelectorAll('.product-item');
        let visibleCount = 0;
        
        products.forEach(product => {
            const productName = product.dataset.name.toLowerCase();
            const productCategory = product.dataset.category.toLowerCase();
            
            if (productName.includes(searchTerm) || productCategory.includes(searchTerm)) {
                product.style.display = 'block';
                visibleCount++;
            } else {
                product.style.display = 'none';
            }
        });
        
        document.getElementById('noResults').style.display = visibleCount === 0 ? 'block' : 'none';
    }
    
    function filterByCategory() {
        const category = document.getElementById('categoryFilter').value;
        const products = document.querySelectorAll('.product-item');
        let visibleCount = 0;
        
        products.forEach(product => {
            if (category === '' || product.dataset.category === category) {
                product.style.display = 'block';
                visibleCount++;
            } else {
                product.style.display = 'none';
            }
        });
        
        document.getElementById('noResults').style.display = visibleCount === 0 ? 'block' : 'none';
    }
    
    function sortProducts() {
        const sortBy = document.getElementById('sortBy').value;
        const container = document.getElementById('productsContainer');
        const products = Array.from(document.querySelectorAll('.product-item'));
        
        products.sort((a, b) => {
            switch(sortBy) {
                case 'name':
                    return a.dataset.name.localeCompare(b.dataset.name);
                case 'name-desc':
                    return b.dataset.name.localeCompare(a.dataset.name);
                case 'category':
                    return a.dataset.category.localeCompare(b.dataset.category);
                default:
                    return 0;
            }
        });
        
        products.forEach(product => container.appendChild(product));
    }
    
    function changeView(view) {
        currentView = view;
        const container = document.getElementById('productsContainer');
        const gridBtn = document.getElementById('gridView');
        const listBtn = document.getElementById('listView');
        
        if (view === 'grid') {
            container.classList.remove('list-view');
            gridBtn.classList.remove('is-light');
            gridBtn.classList.add('is-white');
            listBtn.classList.remove('is-white');
            listBtn.classList.add('is-light');
        } else {
            container.classList.add('list-view');
            listBtn.classList.remove('is-light');
            listBtn.classList.add('is-white');
            gridBtn.classList.remove('is-white');
            gridBtn.classList.add('is-light');
        }
    }
    
    // Event listeners
    document.getElementById('searchInput').addEventListener('input', searchProducts);
    document.getElementById('categoryFilter').addEventListener('change', filterByCategory);
    document.getElementById('sortBy').addEventListener('change', sortProducts);
    
    // Dynamic icon assignment
    function getProductIcon(index) {
        const icons = [
            'fa-laptop', 'fa-mobile-alt', 'fa-headphones', 'fa-camera', 
            'fa-gamepad', 'fa-watch', 'fa-home', 'fa-car',
            'fa-book', 'fa-heart', 'fa-gift', 'fa-star',
            'fa-music', 'fa-coffee', 'fa-bicycle', 'fa-palette'
        ];
        return icons[index % icons.length];
    }
</script>

@php
function getProductIcon($index) {
    $icons = [
        'fa-laptop', 'fa-mobile-alt', 'fa-headphones', 'fa-camera', 
        'fa-gamepad', 'fa-watch', 'fa-home', 'fa-car',
        'fa-book', 'fa-heart', 'fa-gift', 'fa-star',
        'fa-music', 'fa-coffee', 'fa-bicycle', 'fa-palette'
    ];
    return $icons[$index % count($icons)];
}
@endphp

@endsection