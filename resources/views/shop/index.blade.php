<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Słodycze.pl</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="website icon" type="png" href="{{asset('img/icon.png')}}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
  </head>
    @include('shared.nav')
    <body style="background-color: #dddaae;">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
    <div class="container mb-5">
        <div class="row text-center">
            <h3 class="mb-5 mt-3">Polecane produkty</h3>
        </div>
        <center>
            <div class="row">
                <div class="col col-xl-4 mb-3">
                    <div class="card text-bg-dark border-dark" style="width: 20rem; -webkit-box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);
                    -moz-box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);
                    box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);">
                        <a href="{{route('shop.item', ['id' => $pol_czekolada->id])}}" class="link-card">
                            <img src="{{ asset('img/sweets/'.$pol_czekolada->name.'.jpg') }}" class="card-img mb-3" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title" style="text-shadow: 0px 0px 8px rgb(0, 0, 0);">{{$pol_czekolada->name}}</h5>
                            </div>
                                <p class="card-text mx-3">{{$pol_czekolada->describe}}</p>
                                <h3>{{$pol_czekolada->price}}zł/100g</h3>
                        </a>
                    </div>
                </div>
                <div class="col col-xl-4 mb-3">
                    <div class="card text-bg-dark border-dark" style="width: 20rem; -webkit-box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);
                    -moz-box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);
                    box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);">
                        <a href="{{route('shop.item', ['id' => $pol_cukierek->id])}}" class="link-card">
                            <img src="{{ asset('img/sweets/'.$pol_cukierek->name.'.jpg') }}" class="card-img mb-3" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title" style="text-shadow: 0px 0px 8px rgb(0, 0, 0);">{{$pol_cukierek->name}}</h5>
                            </div>
                                <p class="card-text mx-3">{{$pol_cukierek->describe}}</p>
                                <h3>{{$pol_cukierek->price}}zł/100g</h3>
                        </a>
                    </div>
                </div>
                <div class="col col-xl-4 mb-3">
                    <div class="card text-bg-dark border-dark" style="width: 20rem; -webkit-box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);
                    -moz-box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);
                    box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);">
                        <a href="{{route('shop.item', ['id' => $pol_zelek->id])}}" class="link-card">
                            <img src="{{ asset('img/sweets/'.$pol_zelek->name.'.jpg') }}" class="card-img mb-3" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title" style="text-shadow: 0px 0px 8px rgb(0, 0, 0);">{{$pol_zelek->name}}</h5>
                            </div>
                                <p class="card-text mx-3">{{$pol_zelek->describe}}</p>
                                <h3>{{$pol_zelek->price}}zł/100g</h3>
                        </a>
                    </div>
                </div>
            </div>
        </center>
    </div>
    <div style="height: 100%;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="mb-4">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/carousel/chocolate.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>CZEKOLADA</h1>
                            </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/carousel/jelly.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>ŻELKI</h1>
                            </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/carousel/candies.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>CUKIERKI</h1>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row text-center">
                <h3 class="mb-5">Losowe produkty</h3>
            </div>
            <center>
                <div class="row">
                    <div class="col col-xl-4 mb-3">
                        <div class="card text-bg-dark border-dark" style="width: 20rem; -webkit-box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);
                        -moz-box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);
                        box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);">
                            <a href="{{route('shop.item', ['id' => $cukierek->id])}}" class="link-card">
                                <img src="{{ asset('img/sweets/'.$cukierek->name.'.jpg') }}" class="card-img mb-3" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title" style="text-shadow: 0px 0px 8px rgb(0, 0, 0);">{{$cukierek->name}}</h5>
                                </div>
                                    <p class="card-text mx-3">{{$cukierek->describe}}</p>
                                    <h3>{{$cukierek->price}}zł/100g</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col col-xl-4 mb-3">
                        <div class="card text-bg-dark border-dark" style="width: 20rem; -webkit-box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);
                        -moz-box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);
                        box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);">
                            <a href="{{route('shop.item', ['id' => $czekolada->id])}}" class="link-card">
                                <img src="{{ asset('img/sweets/'.$czekolada->name.'.jpg') }}" class="card-img mb-3" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title" style="text-shadow: 0px 0px 8px rgb(0, 0, 0);">{{$czekolada->name}}</h5>
                                </div>
                                    <p class="card-text mx-3">{{$czekolada->describe}}</p>
                                    <h3>{{$czekolada->price}}zł/100g</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col col-xl-4 mb-3">
                        <div class="card text-bg-dark border-dark" style="width: 20rem; -webkit-box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);
                        -moz-box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);
                        box-shadow: 0px 0px 30px 10px rgba(66, 68, 90, 1);">
                            <a href="{{route('shop.item', ['id' => $zelek->id])}}" class="link-card">
                                <img src="{{ asset('img/sweets/'.$zelek->name.'.jpg') }}" class="card-img mb-3" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title" style="text-shadow: 0px 0px 8px rgb(0, 0, 0);">{{$zelek->name}}</h5>
                                </div>
                                    <p class="card-text mx-3">{{$zelek->describe}}</p>
                                    <h3>{{$zelek->price}}zł/100g</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>

    </body>
    @include('shared.footer')
</html>

