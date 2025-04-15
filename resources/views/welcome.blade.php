@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Selamat Datang di Perpustakaan Digital</h2>
        <p class="text-muted">Temukan jutaan buku yang bisa dibaca secara gratis.</p>
    </div>

    <div class="row mb-5">
        <div class="col-md-4 text-center">
            <i class="bi bi-book-half fs-2"></i>
            <h5 class="mt-2">Baca Buku Online</h5>
            <p>Buku-buku tersedia melalui peminjaman digital terkendali.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="bi bi-calendar-check fs-2"></i>
            <h5 class="mt-2">Target Membaca</h5>
            <p>Tentukan target membaca tahunan dan pantau kemajuanmu.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="bi bi-journal-bookmark fs-2"></i>
            <h5 class="mt-2">Favoritkan Buku</h5>
            <p>Atur koleksi buku favorit dengan daftar dan log bacaan.</p>
        </div>
    </div>

    <h4 class="mb-3">Buku Tren</h4>
    <div class="row mb-5">
        @foreach($trendingBooks as $book)
        <div class="col-md-2">
            <div class="card shadow-sm mb-3">
                <img src="{{ $book['cover'] }}" class="card-img-top" alt="Cover {{ $book['title'] }}">
                <div class="card-body p-2">
                    <h6 class="card-title">{{ $book['title'] }}</h6>
                    <small class="text-muted">{{ $book['author'] }}</small>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-sm btn-outline-primary">{{ $book['status'] }}</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <h4 class="mb-3">Kategori Populer</h4>
    <div class="d-flex flex-wrap gap-3 mb-5">
        @foreach($categories as $category)
        <a href="#" class="badge bg-secondary p-3">{{ $category['name'] }} ({{ $category['count'] }})</a>
        @endforeach
    </div>

    <div class="text-muted small">
        <p>Total Pengunjung: {{ number_format($stats['visitors']) }}</p>
        <p>Anggota Baru: {{ number_format($stats['members']) }}</p>
        <p>Buku Dipinjam: {{ number_format($stats['borrowed']) }}</p>
    </div>
</div>
@endsection
