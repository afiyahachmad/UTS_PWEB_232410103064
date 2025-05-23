<div class="card mb-4 {{ $class ?? '' }}">
    @if(isset($header))
    <div class="card-header bg-{{ $headerColor ?? 'primary' }} text-{{ $headerTextColor ?? 'white' }}">
        {{ $header }}
    </div>
    @endif
    <div class="card-body">
        @if(isset($title))
        <h5 class="card-title">{{ $title }}</h5>
        @endif
        @if(isset($subtitle))
        <h6 class="card-subtitle mb-2 text-muted">{{ $subtitle }}</h6>
        @endif
        <div class="card-text">
            {{ $slot }}
        </div>
    </div>
    @if(isset($footer))
    <div class="card-footer text-muted">
        {{ $footer }}
    </div>
    @endif
</div>