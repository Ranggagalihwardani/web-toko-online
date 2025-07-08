@extends('layout')

@section('judul', 'Selamat Datang')

@section('konten')
<section class="hero-modern">
    <!-- Gradient Background with Pattern -->
    <div class="hero-bg">
        <div class="gradient-overlay"></div>
        <div class="pattern-overlay"></div>
    </div>
    
    <!-- Hero Content -->
    <div class="hero-content">
        <div class="container">
            <!-- Main Heading with Modern Typography -->
            <div class="heading-wrapper">
                <h1 class="main-title">
                    <span class="title-highlight">SELAMAT</span>
                    <span class="title-main">DATANG</span>
                </h1>
                <div class="title-underline"></div>
            </div>
            
            <!-- Subtitle with Location -->
            <div class="subtitle-wrapper">
                <h2 class="subtitle">
                    <span class="brand-name">TOKO ZENITH</span>
                    <span class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        Jl. Mayor Achmadi No. 81
                    </span>
                </h2>
            </div>
            
            <!-- Modern Image Card -->
            <div class="image-card">
                <div class="image-wrapper">
                    <img src="toko.jpg" alt="Toko Zenith" class="store-image">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <i class="fas fa-store"></i>
                            <span>Toko Terpercaya</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modern CTA Button -->
            <div class="cta-wrapper">
                <a href="produk" class="cta-button">
                    <span class="button-text">Jelajahi Produk Kami</span>
                    <i class="fas fa-arrow-right"></i>
                    <div class="button-ripple"></div>
                </a>
            </div>
            
            <!-- Floating Elements -->
            <div class="floating-elements">
                <div class="float-element float-1"></div>
                <div class="float-element float-2"></div>
                <div class="float-element float-3"></div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <div class="scroll-arrow"></div>
    </div>
</section>

<style>
/* Modern Hero Section Styles */
.hero-modern {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
}

/* Background Layers */
.hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.gradient-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, 
        #667eea 0%, 
        #764ba2 50%, 
        #f093fb 100%);
    opacity: 0.9;
}

.pattern-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle at 20% 80%, rgba(255,255,255,0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(255,255,255,0.1) 0%, transparent 50%);
    background-size: 300px 300px;
    animation: patternMove 20s ease-in-out infinite;
}

@keyframes patternMove {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(-20px, -20px); }
}

/* Hero Content */
.hero-content {
    position: relative;
    z-index: 2;
    width: 100%;
    padding: 2rem;
    text-align: center;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

/* Modern Typography */
.heading-wrapper {
    margin-bottom: 2rem;
    animation: fadeInUp 1s ease-out;
}

.main-title {
    font-size: clamp(3rem, 8vw, 6rem);
    font-weight: 800;
    line-height: 0.9;
    margin: 0;
    color: white;
    text-shadow: 0 4px 20px rgba(0,0,0,0.3);
}

.title-highlight {
    display: block;
    background: linear-gradient(45deg, #ff6b6b, #feca57);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: titleGlow 2s ease-in-out infinite alternate;
}

.title-main {
    display: block;
    margin-top: -0.2em;
}

@keyframes titleGlow {
    0% { filter: brightness(1); }
    100% { filter: brightness(1.2); }
}

.title-underline {
    width: 120px;
    height: 4px;
    background: linear-gradient(90deg, #ff6b6b, #feca57);
    margin: 1rem auto;
    border-radius: 2px;
    animation: underlineExpand 1.5s ease-out 0.5s both;
}

@keyframes underlineExpand {
    0% { width: 0; }
    100% { width: 120px; }
}

/* Subtitle Styling */
.subtitle-wrapper {
    margin-bottom: 3rem;
    animation: fadeInUp 1s ease-out 0.3s both;
}

.subtitle {
    font-size: clamp(1.2rem, 3vw, 1.8rem);
    color: rgba(255,255,255,0.95);
    font-weight: 300;
    line-height: 1.4;
    margin: 0;
}

.brand-name {
    display: block;
    font-weight: 600;
    font-size: 1.2em;
    margin-bottom: 0.5rem;
    letter-spacing: 2px;
}

.location {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    font-size: 0.9em;
    opacity: 0.9;
}

.location i {
    color: #feca57;
}

/* Modern Image Card */
.image-card {
    margin: 3rem auto;
    max-width: 600px;
    animation: zoomIn 1s ease-out 0.6s both;
}

.image-wrapper {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.image-wrapper:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 30px 80px rgba(0,0,0,0.4);
}

.store-image {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.4s ease;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        135deg, 
        rgba(102,126,234,0.8) 0%, 
        rgba(118,75,162,0.8) 100%
    );
    opacity: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.3s ease;
}

.image-wrapper:hover .image-overlay {
    opacity: 1;
}

.overlay-content {
    color: white;
    text-align: center;
    font-weight: 600;
    font-size: 1.1rem;
}

.overlay-content i {
    display: block;
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

/* Modern CTA Button */
.cta-wrapper {
    margin: 3rem auto 0;
    animation: bounceIn 1s ease-out 0.9s both;
}

.cta-button {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 1rem;
    padding: 1.2rem 2.5rem;
    background: linear-gradient(135deg, #ff6b6b, #feca57);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1.1rem;
    box-shadow: 0 10px 30px rgba(255,107,107,0.4);
    transition: all 0.3s ease;
    overflow: hidden;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(255,107,107,0.6);
    color: white;
}

.cta-button:active {
    transform: translateY(-1px);
}

.button-text {
    position: relative;
    z-index: 2;
}

.cta-button i {
    position: relative;
    z-index: 2;
    transition: transform 0.3s ease;
}

.cta-button:hover i {
    transform: translateX(5px);
}

.button-ripple {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,0.1);
    border-radius: 50px;
    transform: scale(0);
    transition: transform 0.3s ease;
}

.cta-button:hover .button-ripple {
    transform: scale(1);
}

/* Floating Elements */
.floating-elements {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.float-element {
    position: absolute;
    width: 60px;
    height: 60px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
    backdrop-filter: blur(10px);
}

.float-1 {
    top: 20%;
    left: 10%;
    animation: float 6s ease-in-out infinite;
}

.float-2 {
    top: 60%;
    right: 15%;
    width: 40px;
    height: 40px;
    animation: float 8s ease-in-out infinite reverse;
}

.float-3 {
    bottom: 20%;
    left: 20%;
    width: 80px;
    height: 80px;
    animation: float 10s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

/* Scroll Indicator */
.scroll-indicator {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    animation: bounce 2s infinite;
}

.scroll-arrow {
    width: 30px;
    height: 30px;
    border: 2px solid rgba(255,255,255,0.7);
    border-top: none;
    border-left: none;
    transform: rotate(45deg);
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
    40% { transform: translateX(-50%) translateY(-10px); }
    60% { transform: translateX(-50%) translateY(-5px); }
}

/* Animations */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes zoomIn {
    0% {
        opacity: 0;
        transform: scale(0.8);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes bounceIn {
    0% {
        opacity: 0;
        transform: scale(0.3);
    }
    50% {
        transform: scale(1.05);
    }
    70% {
        transform: scale(0.9);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-content {
        padding: 1rem;
    }
    
    .heading-wrapper {
        margin-bottom: 1.5rem;
    }
    
    .subtitle-wrapper {
        margin-bottom: 2rem;
    }
    
    .location {
        flex-direction: column;
        gap: 0.3rem;
    }
    
    .image-card {
        margin: 2rem auto;
    }
    
    .cta-button {
        padding: 1rem 2rem;
        font-size: 1rem;
    }
    
    .float-element {
        display: none;
    }
}

@media (max-width: 480px) {
    .title-underline {
        width: 80px;
    }
    
    .brand-name {
        font-size: 1.1em;
    }
    
    .cta-button {
        padding: 0.9rem 1.8rem;
        gap: 0.8rem;
    }
}
</style>
@endsection