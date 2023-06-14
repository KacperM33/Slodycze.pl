<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Słodycze.pl</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="website icon" type="png" href="{{asset('img/icon.png')}}">
  </head>
    @include('shared.nav')
    <body style="background-color: #dddaae;">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <center>
        <div class="container mt-5 mb-5 justify-content-center">
            <div class="row">
                <h1 class="mb-3">Wyniki wyszukiwania dla {{ $request }}</h1>
                @forelse ($item as $t)
                    @if($t->quantity > 0)
                        <div class="col-xxl-3 col-lg-4 col-md-5 mb-3">
                            <div class="card text-bg-dark" style="width: 18rem;">
                                <img src="{{ asset('img/sweets/'.$t->name.'.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body text-start">
                                <h5 class="card-title">{{ $t->name }}</h5>
                                <p class="card-text">{{ $t->describe }}</p>
                                <a href="{{route('shop.item', ['id' => $t->id])}}" class="btn btn-secondary btn-outline-light">Sprawdź!</a>
                                <h4 style="float: right;">{{ $t->price }}zł/100g</h4>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <p>Brak pasujących produktów.</p>
                @endforelse
            </div>
        </div>
    </center>
    </body>
    @include('shared.footer')
</html>
