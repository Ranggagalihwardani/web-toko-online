@extends('layouts.app')

@section('judul', 'Login')

@section('konten')
<div class="login-container">
    <div class="login-card animate__animated animate__fadeInUp">
        <div class="login-header">
            <h1 class="title is-3 has-text-white">
                <i class="fas fa-sign-in-alt"></i>
                Login
            </h1>
            <p class="subtitle is-6 has-text-white">Masuk ke akun Anda</p>
        </div>
        
        <div class="auth-form">
            @if (session('success'))
                <div class="notification is-success">
                    <button class="delete"></button>
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control has-icons-left">
                        <input class="input @error('email') is-danger @enderror" 
                               type="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               placeholder="Masukkan email Anda"
                               required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                    @error('email')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label">Password</label>
                    <div class="control has-icons-left">
                        <input class="input @error('password') is-danger @enderror" 
                               type="password" 
                               name="password" 
                               placeholder="Masukkan password Anda"
                               required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                    @error('password')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" name="remember">
                            Ingat saya
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button is-fullwidth" 
                                style="background: linear-gradient(135deg,rgb(42, 6, 41),rgb(6, 0, 125)); color: white; border: none;">
                            <span class="icon">
                                <i class="fas fa-sign-in-alt"></i>
                            </span>
                            <span>Login</span>
                        </button>
                    </div>
                </div>

                <div class="has-text-centered mt-4">
                    <p>Belum punya akun? <a href="{{ route('register') }}" class="has-text-link">Daftar di sini</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection