@extends('layouts.app')

@section('title', 'Profile - Afiyah Computer')

@section('content')
<div class="row">
    <div class="col-md-3">
        <x-sidebar />
    </div>
    <div class="col-md-9">
        <x-card>
            <x-slot name="header">Profile</x-slot>
            
            <div class="text-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/014/194/216/non_2x/avatar-icon-human-a-person-s-badge-social-media-profile-symbol-the-symbol-of-a-person-vector.jpg" class="rounded-circle" alt="Profile Picture" width="150">
                <h3 class="mt-3">{{ $username }}</h3>
                <p class="text-muted">Admin</p>
            </div>
            
            <hr>
            
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" value="{{ $username }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" value="{{ strtolower($username) }}@example.com">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" value="{{ $username }}">
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" value="User">
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" rows="3">Jl. Jalanin aja dulu. 789, Bandung City</textarea>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phoneNumber" value="08123456789">
                    </div>
                    <div class="col-md-6">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" class="form-control" id="position" value="Administrator">
                    </div>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="button">Update Profile</button>
                </div>
            </form>
        </x-card>
    </div>
</div>
@endsection