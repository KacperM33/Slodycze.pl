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
    @php
        if($sw_category=='cukierki') {
            $tlo = '#b9ddae';
        }
        else if($sw_category=='czekolada') {
            $tlo = '#ddb0ae';
        }
        else if($sw_category=='żelki') {
            $tlo = '#d5aedd';
        }
        else {
            $tlo = '#dddaae';
        }
    @endphp
    <body style="background-color: {{$tlo}};">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
        <h1 class="text-center mb-3 mt-3" style="font-family:'Courier New', Courier, monospace ">{{mb_strtoupper(mb_substr($sw_category, 0, 1)) . mb_substr($sw_category, 1)}}</h1>
        <center>
            <div>
                <a type="button" class="btn btn-secondary mb-3" href={{ route('shop.order', ['category' => $sw_category])}}>Sortuj od naniższej ceny</a>
                <a type="button" class="btn btn-secondary mb-3" href={{ route('shop.orderD', ['category' => $sw_category])}}>Sortuj od najwyższej ceny</a>
            </div>
            <div class="container mb-5">
                <div class="row">
                    @forelse ($sweets as $t)
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
                        <p>Brak produktów.</p>
                    @endforelse
                </div>
            </div>
        </center>
    </body>
    @include('shared.footer')
</html>
