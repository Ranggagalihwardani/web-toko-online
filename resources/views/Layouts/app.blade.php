<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title> @yield('judul') | TOKO ZENITH </title> 
<link rel="stylesheet" href="/bulma/css/bulma.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
<style>
    .navbar {
        background: linear-gradient(135deg,rgb(42, 6, 41),rgb(6, 0, 125));
        padding: 1rem;
    }
    .navbar-item {
        color: white !important;
        font-weight: bold;
    }
    .navbar-item:hover {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 8px;
    }
    
    .login-container {
        min-height: 100vh;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .login-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        overflow: hidden;
        max-width: 400px;
        width: 100%;
    }
    
    .login-header {
        background: linear-gradient(135deg,rgb(42, 6, 41),rgb(6, 0, 125));
        color: white;
        padding: 2rem;
        text-align: center;
    }
    
    .auth-form {
        padding: 2rem;
    }
</style>
</head> 
<body> 
<div class="container"> 
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <b>TOKO ZENITH</b>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarPRODUKTOKO">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarPRODUKTOKO" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/">Beranda</a>
            <a class="navbar-item" href="/pengumuman">Tentang Kami</a>
            <a class="navbar-item" href="/kategori">Kategori</a>
            <a class="navbar-item" href="/produk">Produk</a>
        </div>
        <div class="navbar-end">
            @guest
                <a class="navbar-item" href="{{ route('login') }}">
                    <span class="icon">
                        <i class="fas fa-sign-in-alt"></i>
                    </span>
                    <span>Login</span>
                </a>
                <a class="navbar-item" href="{{ route('register') }}">
                    <span class="icon">
                        <i class="fas fa-user-plus"></i>
                    </span>
                    <span>Daftar</span>
                </a>
            @else
                <a class="navbar-item" href="{{ route('keranjang.index') }}">
                    <span class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                    <span class="tag is-danger is-rounded is-small" style="margin-left: 4px;">
                        {{ session('keranjang') ? count(session('keranjang')) : 0 }}
                    </span>
                </a>
                <a class="navbar-item" href="{{ route('profil') }}">
                    <span class="icon">
                        <i class="fas fa-user-circle"></i>
                    </span>
                    <span>{{ Auth::user()->name }}</span>
                </a>
                <a class="navbar-item" href="#" onclick="document.getElementById('logout-form').submit();">
                    <span class="icon">
                        <i class="fas fa-sign-out-alt"></i>
                    </span>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </div>
    </div>
</nav>

@yield('konten') 

</div> 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".navbar-burger").click(function() {
            $(".navbar-burger").toggleClass("is-active");
            $(".navbar-menu").toggleClass("is-active");
        });
    });
</script>
</body> 
</html>