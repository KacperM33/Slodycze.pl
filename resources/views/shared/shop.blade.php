{{-- <div>
    @forelse ( as $t)
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card">
            <img src="{{ asset('storage/img/'.$t->type) }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $t->name }}</h5>
                <p class="card-text">{{ $t->description }}</p>
                <a href="{{route('trips.show', ['id' => $t->id])}}" class="btn btn-primary">Więcej szczegółów...</a>
            </div>
        </div>
    @empty
        <p>Brak produktów.</p>
    @endforelse
</div> --}}
