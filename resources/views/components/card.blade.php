<div class="card mb-4 {{ (isset($class)) ? $class : '' }} border {{ (isset($border)) ? 'border-'.$border : '' }}">
    <div class="card-body">
        {{ $slot }}
    </div>
</div>