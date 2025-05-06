@extends('layouts.app')

@section('title', 'Login - Afiyah Computer')

@section('styles')
<style>
    .login-container {
        max-width: 400px;
        margin: 0 auto;
        padding-top: 100px;
    }
</style>
@endsection

@section('content')
<div class="login-container">
    <x-card>
        <x-slot name="header">Login</x-slot>
        <x-slot name="title">Afiyah Computer</x-slot>
        <x-slot name="subtitle">Please login to continue</x-slot>
        
        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" 
                       id="username" name="username" required>
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                       id="password" name="password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </x-card>
</div>
@endsection