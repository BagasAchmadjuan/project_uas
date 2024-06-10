@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome, Admin!</div>
                <div class="card-body">
                    <p>You are Admin.</p>
                    <ul>
                        <li><a href="{{ url('/kelola-produk') }}">Kelola Produk</a></li>
                        <li><a href="{{ url('/detail-pemesanan') }}">Detail Pemesanan</a></li>
                        <li><a href="{{ url('/cek-pembayaran') }}">Cek Pembayaran</a></li>
                        <li><a href="{{ url('/input-pengiriman') }}">Input Pengiriman</a></li>
                        <li><a href="{{ url('/kontrol-pakan') }}">Kontrol Pakan</a></li>
                        <li><a href="{{ url('/kontrol-suhu') }}">Kontrol Suhu</a></li>
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
