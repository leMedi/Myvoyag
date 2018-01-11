@component('components.card', [
    'class'     => 'creditcard_card',
    'border'    => 'info'
])
    <img class="logo" src="{{ $logo }}" alt="">
    <h5 class="creditcard-number">{{ $slot }}</h5>
    <p class="expiration-date">Valid {{ $expire }}</p>
@endcomponent
