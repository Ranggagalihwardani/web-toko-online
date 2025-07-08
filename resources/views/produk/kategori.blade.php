@extends('layout')

@section('judul', 'Produk ' . $kategori->nama_kategori)

@section('konten')

<section class="hero is-primary is-bold">
    <div class="hero-body has-text-centered">
        <div class="container">
            <h1 class="title is-1 has-text-white has-text-weight-bold animate__animated animate__fadeInDown">
                PRODUK
            </h1>
            <h2 class="subtitle is-3 has-text-light animate__animated animate__fadeInUp">
                Kategori: {{ $kategori->nama_kategori }}
            </h2>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            @foreach ($data as $item)
            <div class="column is-one-third animate__animated animate__fadeInUp">
                <div class="card" style="border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <div class="card-content">
                        <div class="content">
                            <h3 class="title is-4">{{ $item->nama_produk }}</h3>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="/produk/{{ $item->id }}" class="card-footer-item">Selengkapnya</a>
                    </footer>
                </div>
            </div>
            @endforeach
        </div>
        <div class="has-text-centered mt-4">
            <a href="{{ url()->previous() }}" class="button is-link is-rounded animate__animated animate__bounceIn">Kembali</a>
        </div>
    </div>
</section>

@endsection