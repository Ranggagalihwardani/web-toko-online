@extends('layout')

@section('judul', 'Pembayaran')

@section('konten')
<section class="section">
    <div class="container">
        <h1 class="title has-text-white">Pembayaran</h1>

        @if(session('success'))
    <div class="notification is-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="notification is-danger">
        {{ session('error') }}
    </div>
@endif


        @if(count($keranjang) > 0)
            <div class="box">
                <table class="table is-fullwidth is-hoverable is-bordered">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keranjang as $item)
                            <tr>
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ $item['jumlah'] }}</td>
                                <td>Rp{{ number_format($item['Harga'] * $item['jumlah']) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2" class="has-text-right">Total</th>
                            <th>Rp{{ number_format($totalHarga) }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <form action="{{ route('keranjang.prosesPembayaran') }}" method="POST">
    @csrf

    <div class="field">
        <label class="label has-text-white">Pilih Metode Pembayaran</label>
        <div class="control">
            <div class="select is-fullwidth">
                <select name="metode_pembayaran" required>
                    <option value="">-- Pilih Metode --</option>
                    <option value="transfer">Transfer Bank</option>
                    <option value="cod">Bayar di Tempat (COD)</option>
                    <option value="ewallet">E-Wallet (OVO, DANA, dll)</option>
                </select>
            </div>
        </div>
    </div>

    <div class="field mt-4">
        <button class="button is-success is-fullwidth is-medium">
            <i class="fas fa-money-check-alt"></i>&nbsp; Konfirmasi Pembayaran
        </button>
    </div>
</form>

        @else
            <div class="notification is-info is-light">
                Keranjang kamu kosong.
            </div>
        @endif
    </div>
</section>
@endsection
