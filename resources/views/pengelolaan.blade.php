@extends('layouts.app')

@section('title', 'Pengelolaan - Afiyah Computer')

@section('content')
<div class="row">
    <div class="col-md-3">
        <x-sidebar />
    </div>
    <div class="col-md-9">
        <x-card>
            <x-slot name="header">Pengelolaan Produk</x-slot>
            
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5>Daftar Produk</h5>
                <button class="btn btn-primary">Tambah Produk</button>
            </div>
            
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product['id'] }}</td>
                            <td>{{ $product['name'] }}</td>
                            <td>{{ $product['category'] }}</td>
                            <td>Rp {{ number_format($product['price'], 0, ',', '.') }}</td>
                            <td>{{ $product['stock'] }}</td>
                            <td>
                                <button class="btn btn-sm btn-info">Edit</button>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <h5 class="mt-5">Tampilan Kartu Produk</h5>
            <div class="row mt-3">
                @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header bg-primary text-white">ID: {{ $product['id'] }}</div>
                        <img src="{{ asset('img/' . $product['image']) }}" 
                             alt="{{ $product['name'] }}" 
                             class="card-img-top" 
                             style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text">
                                <strong>Kategori:</strong> {{ $product['category'] }}<br>
                                <strong>Harga:</strong> Rp {{ number_format($product['price'], 0, ',', '.') }}<br>
                                <strong>Stok:</strong> {{ $product['stock'] }}
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button class="btn btn-sm btn-info">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </x-card>
    </div>
</div>
@endsection