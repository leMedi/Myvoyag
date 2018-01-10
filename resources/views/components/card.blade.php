<div class="card mb-4 border {{ (isset($border)) ? 'border-'.$border : '' }}">
    <div class="card-body">
        {{ $slot }}
    </div>
</div>