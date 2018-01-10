<div class="card travel-card p-3 mb-5">
    <img class="card-img-top" src="{{ $bg }}" alt="Card image cap">
    <div class="card-body">
        <img class="avatar rounded-circle" src="{{ $avatar }}" alt="">
        <div class="card-meta">
            <h3>
                {{ $slot }}
                <span class="travel-country">
                    {{ $location }}
                </span>
            </h3>
        </div>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary" href="#">New Message</a>
        <div class="text-success pr-3">
            {{ $count }} Place(s) Disponible
        </div>
    </div>
</div>