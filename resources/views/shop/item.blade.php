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
    @php
        if($id->category=='Cukierki') {
            $tlo = '#b9ddae';
        }
        else if($id->category=='Czekolada') {
            $tlo = '#ddb0ae';
        }
        else if($id->category=='Żelki') {
            $tlo = '#d5aedd';
        }
        else {
            $tlo = '#dddaae';
        }
    @endphp
    <body style="background-color: {{$tlo}};">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
    <div class="container mt-4 mx-sm-auto ms-lg-5 mb-5">
        <div class="row">
          <div class="col-lg-7">
            <img src="{{ asset('img/sweets/'.$id->name.'.jpg') }}" class="rounded float-start mb-5 me-5 img-fluid" alt="...">
          </div>
          <div class="col-lg-5">
            <h1 class="mb-lg-3">{{ $id->name }}</h1>
            <h6 style="color: #682121">{{ $id->category }}</h6>
            <p>{{ $id->type }}</p>
            <h5>{{ $id->price }}zł/100g</h5>
            <form>
                <div class="form-group mb-3 col-lg-5 col-7 mb-lg-5">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Ilość</span>
                        <input type="number" min="0" placeholder="0" step="10" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">g</span>
                    </div>
                    <div class="btn btn-success btn-outline-light">Dodaj do koszyka</div>
                </div>
            </form>
            <p class="mb-5" style="font-weight: bold;">{{ $id->describe }}</p>
            <div>
                @if (Auth::check())
                    @if (Auth::user()->role_id == 1)
                        <form action="{{ route('sweets.fill', $id->id) }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group mb-3 mb-lg-5">
                                <div class="input-group mt-3 mb-3">
                                    <span class="input-group-text">Ilość</span>
                                    <input type="number" min="0" placeholder="0" step="10" class="form-control" name="quantity" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">g</span>
                                    <button type="submit" class="btn btn-warning btn-outline-dark">UZUPEŁNIJ</button>
                                </div>
                            </div>
                        </form>
                        <form action="{{ route('sweets.update', $id->id) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz zaktualizować cene?')">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3 mb-lg-5">
                                <div class="input-group mt-3 mb-3">
                                    <input type="number" min="00.10" placeholder="00.10" step="00.10" class="form-control" name="price" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">zł/100g</span>
                                    <button type="submit" class="btn btn-secondary btn-outline-dark">ZAKTUALIZUJ CENE</button>
                                </div>
                            </div>
                        </form>
                        <form action="{{ route('sweets.delete', $id->id) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć ten przedmiot?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-outline-dark mb-3">USUŃ</button>
                        </form>
                    @endif
                @endif
            </div>
            </div>
        </div>
    </div>
    </body>
    @include('shared.footer')
</html>
