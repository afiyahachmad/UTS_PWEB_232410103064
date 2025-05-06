<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        Menu Navigasi
    </div>
    <div class="list-group list-group-flush">
        <!-- Dashboard -->
        <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" 
           class="list-group-item list-group-item-action {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <i class="bi bi-speedometer2 me-2"></i> Dashboard
        </a>

        <!-- Pengelolaan -->
        <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}" 
           class="list-group-item list-group-item-action {{ request()->routeIs('pengelolaan') ? 'active' : '' }}">
            <i class="bi bi-table me-2"></i> Pengelolaan
        </a>

        <!-- Profile -->
        <a href="{{ route('profile', ['username' => request()->query('username')]) }}" 
           class="list-group-item list-group-item-action {{ request()->routeIs('profile') ? 'active' : '' }}">
            <i class="bi bi-person-circle me-2"></i> Profile
        </a>
    </div>
</div>