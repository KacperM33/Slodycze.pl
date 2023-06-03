<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Słodycze.pl</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
        <h1 class="text-center mb-3 mt-3" style="font-family:'Courier New', Courier, monospace ">{{mb_strtoupper(mb_substr($sw_category, 0, 1)) . mb_substr($sw_category, 1)}}</h1>
        <div class="container mb-5">
            <center>
                <div class="row">
                    @forelse ($sweets as $t)
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
                    @empty
                        <p>Brak produktów.</p>
                    @endforelse
                </div>
            </center>
        </div>
    </body>
    @include('shared.footer')
</html>
