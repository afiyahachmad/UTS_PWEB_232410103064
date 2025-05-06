@extends('layouts.app')

@section('title', 'Dashboard - Afiyah computer')

@section('content')
<div class="row">
    <div class="col-md-3">
        <x-sidebar />
    </div>
    <div class="col-md-9">
        <x-card>
            <x-slot name="header">Dashboard</x-slot>
            <x-slot name="title">Selamat Datang, {{ $username }}!</x-slot>
            
            <p class="mt-4">Ini adalah halaman dashboard manajemen pengelolaan produk Elektronik!!</p>
            
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Produk</h5>
                            <h2>25</h2>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            
                            <a class="small text-white stretched-link" href="{{ route('pengelolaan') }}">Lihat Detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Kategori</h5>
                            <h2>6</h2>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Lihat Detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Stok Menipis</h5>
                            <h2>3</h2>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Lihat Detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-4">
                <h5>Aktivitas Terbaru</h5>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Produk baru ditambahkan
                        <span class="badge bg-primary rounded-pill">Hari ini</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Update stok produk
                        <span class="badge bg-primary rounded-pill">Kemarin</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Perubahan harga produk
                        <span class="badge bg-primary rounded-pill">3 hari lalu</span>
                    </li>
                </ul>
            </div>
        </x-card>
    </div>
</div>
@endsection