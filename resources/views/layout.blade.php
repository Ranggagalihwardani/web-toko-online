<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title> @yield('judul') | TOKO ZENITH </title> 
<link rel="stylesheet" href="/bulma/css/bulma.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <style>
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
    </a>
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
document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
        const $notification = $delete.parentNode;
        $delete.addEventListener('click', () => {
            $notification.parentNode.removeChild($notification);
        });
    });
    
    // Auto hide notification after 5 seconds
    setTimeout(() => {
        const notifications = document.querySelectorAll('.notification');
        notifications.forEach(notification => {
            notification.style.display = 'none';
        });
    }, 5000);
});
</script>
</body> 
</html>