@extends('layout')

@section('judul', 'Profil')

@section('konten')

<!-- Modern Hero Section -->
<section class="modern-hero">
    <div class="hero-background">
        <div class="gradient-bg"></div>
        <div class="particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
    </div>
    <div class="hero-content">
        <div class="container">
            <div class="hero-text">
                <h1 class="hero-title">
                    <span class="title-icon">👨‍💼</span>
                    <span class="title-text">PROFIL</span>
                </h1>
                <h2 class="hero-subtitle">
                    <span class="brand-highlight">TOKO ZENITH</span>
                </h2>
                <div class="hero-divider"></div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Profile Section -->
<section class="profile-section">
    <div class="container">
        <div class="profile-card">
            <!-- Profile Image Section -->
            <div class="profile-image-section">
                <div class="image-container">
                    <div class="image-wrapper">
                        <img src="foto.jpg" alt="Foto Profil" class="profile-image">
                        <div class="image-overlay">
                            <div class="overlay-icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                        </div>
                    </div>
                    <div class="status-badge">
                        <span class="status-dot"></span>
                        <span class="status-text">Aktif</span>
                    </div>
                </div>
            </div>

            <!-- Profile Info Section -->
            <div class="profile-info-section">
                <div class="info-header">
                    <h3 class="info-title">Informasi Personal</h3>
                    <div class="info-decoration"></div>
                </div>
                
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="info-content">
                            <label class="info-label">Nama Lengkap</label>
                            <span class="info-value">Rangga Galih Wardani</span>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <label class="info-label">Alamat</label>
                            <span class="info-value">Karanganyar</span>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-flag"></i>
                        </div>
                        <div class="info-content">
                            <label class="info-label">Kewarganegaraan</label>
                            <span class="info-value">Indonesia</span>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <label class="info-label">Email</label>
                            <a href="mailto:ranggagalih@gmail.com" class="info-value info-link">
                                ranggagalih@gmail.com
                            </a>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <label class="info-label">No. HP</label>
                            <a href="tel:03249232358323" class="info-value info-link">
                                03249232358323
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</section>

<style>
/* Modern Profile Styles */
* {
    box-sizing: border-box;
}

/* Hero Section */
.modern-hero {
    position: relative;
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.gradient-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, 
        #667eea 0%, 
        #764ba2 50%, 
        #f093fb 100%);
    opacity: 0.95;
}

.particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: rgba(255, 255, 255, 0.6);
    border-radius: 50%;
    animation: float 15s infinite linear;
}

.particle:nth-child(1) {
    left: 20%;
    animation-delay: 0s;
    animation-duration: 15s;
}

.particle:nth-child(2) {
    left: 40%;
    animation-delay: 3s;
    animation-duration: 18s;
}

.particle:nth-child(3) {
    left: 60%;
    animation-delay: 6s;
    animation-duration: 12s;
}

.particle:nth-child(4) {
    left: 80%;
    animation-delay: 9s;
    animation-duration: 20s;
}

.particle:nth-child(5) {
    left: 90%;
    animation-delay: 12s;
    animation-duration: 16s;
}

@keyframes float {
    0% {
        transform: translateY(100vh) scale(0);
        opacity: 0;
    }
    10% {
        opacity: 1;
    }
    90% {
        opacity: 1;
    }
    100% {
        transform: translateY(-100vh) scale(1);
        opacity: 0;
    }
}

.hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    padding: 2rem;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

.hero-text {
    animation: fadeInUp 1s ease-out;
}

.hero-title {
    font-size: clamp(2.5rem, 6vw, 4rem);
    font-weight: 800;
    color: white;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    text-shadow: 0 4px 20px rgba(0,0,0,0.3);
}

.title-icon {
    font-size: 0.8em;
    animation: bounce 2s infinite;
}

.title-text {
    letter-spacing: 2px;
}

.hero-subtitle {
    font-size: clamp(1.2rem, 3vw, 1.8rem);
    font-weight: 300;
    color: rgba(255, 255, 255, 0.9);
    margin: 1rem 0;
}

.brand-highlight {
    background: linear-gradient(45deg, #ffd700, #ffed4a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 600;
    letter-spacing: 3px;
}

.hero-divider {
    width: 100px;
    height: 3px;
    background: linear-gradient(90deg, #ffd700, #ffed4a);
    margin: 2rem auto;
    border-radius: 2px;
    animation: expandWidth 1.5s ease-out 0.5s both;
}

@keyframes expandWidth {
    0% { width: 0; }
    100% { width: 100px; }
}

/* Profile Section */
.profile-section {
    padding: 4rem 2rem;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    min-height: 60vh;
}

.profile-card {
    background: white;
    border-radius: 24px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.1);
    overflow: hidden;
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 0;
    animation: slideUp 1s ease-out;
    position: relative;
}

.profile-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
}

/* Profile Image Section */
.profile-image-section {
    padding: 3rem 2rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
}

.image-container {
    text-align: center;
}

.image-wrapper {
    position: relative;
    width: 200px;
    height: 200px;
    margin: 0 auto 2rem;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    transition: all 0.4s ease;
}

.image-wrapper:hover {
    transform: scale(1.05);
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

.profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(102, 126, 234, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.image-wrapper:hover .image-overlay {
    opacity: 1;
}

.overlay-icon {
    color: white;
    font-size: 2rem;
}

.status-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    padding: 0.5rem 1rem;
    border-radius: 20px;
    color: white;
    font-size: 0.9rem;
    font-weight: 500;
}

.status-dot {
    width: 8px;
    height: 8px;
    background: #4ade80;
    border-radius: 50%;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

/* Profile Info Section */
.profile-info-section {
    padding: 3rem 2rem;
}

.info-header {
    margin-bottom: 2rem;
    text-align: center;
}

.info-title {
    font-size: 1.8rem;
    font-weight: 700;
    color: #2d3748;
    margin: 0 0 1rem 0;
}

.info-decoration {
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, #667eea, #764ba2);
    margin: 0 auto;
    border-radius: 2px;
}

.info-grid {
    display: grid;
    gap: 1.5rem;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: #f8fafc;
    border-radius: 16px;
    border-left: 4px solid transparent;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.info-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(135deg, #667eea, #764ba2);
    transform: scaleY(0);
    transition: transform 0.3s ease;
}

.info-item:hover::before {
    transform: scaleY(1);
}

.info-item:hover {
    background: white;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    transform: translateX(5px);
}

.info-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.info-content {
    flex: 1;
}

.info-label {
    display: block;
    font-size: 0.9rem;
    font-weight: 600;
    color: #718096;
    margin-bottom: 0.3rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.info-value {
    font-size: 1.1rem;
    font-weight: 500;
    color: #2d3748;
}

.info-link {
    color: #667eea;
    text-decoration: none;
    transition: color 0.3s ease;
}

.info-link:hover {
    color: #5a67d8;
    text-decoration: underline;
}

/* Action Section */
.action-section {
    text-align: center;
    margin-top: 3rem;
    animation: fadeInUp 1s ease-out 0.5s both;
}

.contact-btn {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 1rem;
    padding: 1.2rem 2.5rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1.1rem;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
    transition: all 0.3s ease;
    overflow: hidden;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.contact-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.6);
    color: white;
}

.contact-btn:active {
    transform: translateY(-1px);
}

.btn-icon {
    position: relative;
    z-index: 2;
    font-size: 1.2rem;
}

.btn-text {
    position: relative;
    z-index: 2;
}

.btn-ripple {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50px;
    transform: scale(0);
    transition: transform 0.3s ease;
}

.contact-btn:hover .btn-ripple {
    transform: scale(1);
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

@keyframes slideUp {
    0% {
        opacity: 0;
        transform: translateY(50px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .profile-card {
        grid-template-columns: 1fr;
        gap: 0;
    }
    
    .profile-image-section {
        padding: 2rem 1rem;
    }
    
    .image-wrapper {
        width: 150px;
        height: 150px;
    }
    
    .profile-info-section {
        padding: 2rem 1rem;
    }
    
    .info-item {
        padding: 1rem;
    }
    
    .info-icon {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
    
    .contact-btn {
        padding: 1rem 2rem;
        font-size: 1rem;
    }
    
    .hero-title {
        flex-direction: column;
        gap: 0.5rem;
    }
}

@media (max-width: 480px) {
    .profile-section {
        padding: 2rem 1rem;
    }
    
    .info-item {
        flex-direction: column;
        text-align: center;
        gap: 0.8rem;
    }
    
    .info-content {
        text-align: center;
    }
    
    .contact-btn {
        padding: 0.9rem 1.8rem;
        gap: 0.8rem;
    }
}
</style>

@endsection