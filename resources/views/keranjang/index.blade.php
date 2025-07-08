@extends('layout')

@section('judul', 'Keranjang Belanja')

@section('konten')
<section class="section">
    <div class="container">
        <h1 class="title has-text-white">Keranjang Belanja</h1>

        @if(session('success'))
            <div class="notification is-success is-light">
                {{ session('success') }}
            </div>
        @endif

        @if(count($keranjang) > 0)
            <div class="table-container">
                <table class="table is-fullwidth is-striped is-hoverable">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Gambar</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($keranjang as $item)
                            <tr>
                                <td>{{ $item['nama'] }}</td>
                                <td>
                                    <figure class="image is-96x96">
                                        <img src="{{ asset('storage/' . $item['gambar']) }}" alt="{{ $item['nama'] }}">
                                    </figure>
                                </td>
                                <td>Rp{{ number_format($item['Harga']) }}</td>
                                <td>{{ $item['jumlah'] }}</td>
                                <td>
                                    <form action="{{ url('/keranjang/hapus/' . $item['id']) }}" method="POST">
                                        @csrf
                                        <button class="button is-small is-danger" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="buttons">
                <form action="{{ url('/keranjang/kosongkan') }}" method="POST" style="display: inline;">
    @csrf
    <button class="button is-warning is-small" type="submit">Kosongkan Keranjang</button>
</form>

                <a class="button is-primary" href="{{ url('/keranjang/pembayaran') }}">
                    <i class="fas fa-money-bill-wave"></i> &nbsp; Lanjut ke Pembayaran
                </a>
            </div>
        @else
            <div class="notification is-info is-light">
                Keranjang kamu masih kosong.
            </div>
        @endif
    </div>
</section>
@endsection
