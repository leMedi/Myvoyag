<div class="card card-landing p-4">
	<div class="card-body text-center">
        @if (isset($img))
		    <img class="card-img" src="{{ $img }}" alt="">
        @endif
        <h4 class="card-title">
        {{ $slot }}
        </h4>
		<a class="btn btn-primary" href="{{ $action_link }}">{{ $action_text }}</a>
	</div>
</div>