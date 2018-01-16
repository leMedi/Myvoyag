<div class="card travel-card p-3 mb-5">
        <img class="card-img-top" src="{{ $bg }}" alt="Card image cap">
    <div>
        <div class="card-body mt-3">
            
            <img class="avatar rounded-circle w-25" src="{{ $avatar }}" alt="">
            <div class="card-meta">
                <h3>
                    {{ $firstname }} {{$lastname}}
                    <span class="travel-country">
                        Destination : {{ $dest }}
                    </span>
                </h3>
                
            </div>
        </div>
        <div class="ml-4">
            <dl class="d-flex mb-0">
                <dt class="w-25">Départ:</dt>
                <dd>{{$depart}}</dd>
            </dl>
            <dl class="d-flex mb-0">
                <dt class="w-25">Arrivés:</dt>
                <dd>{{ $arrive }}</dd>
            </dl>
            <dl class="d-flex mb-0">
                <dt class="w-25">Date:</dt>
                <dd>{{$date}}</dd>
            </dl>
        </div>
    </div>
    @if ($count == 0)
    <div class="card-footer d-block">
            <div class="text-danger pr-3 text-center" >
                {{ $count }} Place(s) Disponible
            </div>
        @else
        <div class="card-footer">
            <a class="btn btn-primary" href="#">New Message</a>
            <div class="text-success pr-3">
                {{ $count }} Place(s) Disponible
            </div>
        @endif
    </div>
</div>