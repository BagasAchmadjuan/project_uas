@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome, User!</div>
                <div class="card-body">
                    <p>You are User.</p>
                    <ul>
                        <li><a href="{{ url('/produk') }}">Lihat Produk</a></li>
                        <li><a href="{{ url('/keranjang') }}">Lihat Keranjang</a></li>
                        <li><a href="{{ url('/detail-pesanan') }}">Detail Pesanan</a></li>
                        <li><a href="{{ url('/pembayaran') }}">Bayar Pesanan</a></li>
                        <li><a href="{{ url('/status-pengiriman') }}">Status Pengiriman</a></li>
                    </ul>
                    <!-- Tombol Logout -->
                    @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
