@extends('layout')

@section('judul', 'Detail Akun')

@section('konten')

<section class="hero is-primary is-bold">
    <div class="hero-body has-text-centered">
        <div class="container">
            <h1 class="title is-1 has-text-white has-text-weight-bold animate__animated animate__fadeInDown">
                DETAIL AKUN
            </h1>
            <h2 class="subtitle is-3 has-text-light animate__animated animate__fadeInUp">
                Informasi Akun Anda
            </h2>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half animate__animated animate__fadeInUp">
                <div class="box has-background-light" style="border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <table class="table is-striped is-fullwidth">
                        <tr>
                            <td><strong>Nama</strong></td>
                            <td>:</td>
                            <td>{{ $user->nama }}</td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>:</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td><strong>Alamat</strong></td>
                            <td>:</td>
                            <td>{{ $user->alamat ?? 'Tidak tersedia' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Nomor Telepon</strong></td>
                            <td>:</td>
                            <td>{{ $user->nomor_telepon ?? 'Tidak tersedia' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="has-text-centered mt-4">
                    <a href="{{ url()->previous() }}" class="button is-link is-rounded animate__animated animate__bounceIn">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection