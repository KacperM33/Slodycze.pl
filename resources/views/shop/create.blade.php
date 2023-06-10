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
    @if(Auth::check())
        @if(Auth::user()->role_id == 1)
            <div class="row d-flex justify-content-center mb-5 mt-3">
                <div class="col-10 col-sm-10 col-md-6 col-lg-4">
                    <form method="POST" action="{{ route('sweets.add') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="name">Nazwa słodycza</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="category">Kategoria</label>
                            <select id="category" name="category" type="text" class="form-control">
                                <option selected disabled>Wybierz kategorie</option>
                                <option value="Cukierki">Cukierki</option>
                                <option value="Czekolada">Czekolada</option>
                                <option value="Żelki">Żelki</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="type">Typ</label>
                            <input id="type" name="type" type="text" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="price">Cena za 100g</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="price" name="price" type="number" min="00.10" placeholder="00.10" step="00.10" class="form-control">
                                    <span class="input-group-text">zł/100g</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="quantity">Ilość w gramach</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="quantity" name="quantity" type="number" min="10" placeholder="10" step="10" class="form-control">
                                    <span class="input-group-text">g</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="describe">Opis</label>
                            <input id="describe" name="describe" type="text" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="photo">Dodaj zdjęcie przedmiotu:</label>
                            <input type="file" class="form-control-file" id="photo" name="photo">
                          </div>
                        <div class="text-center mt-4 mb-4">
                            <input class="btn btn-secondary btn-outline-light" type="submit" value="Dodaj przedmiot">
                        </div>
                    </form>
                </div>
            </div>
        @else
            <h1 class="text-center mt-3">ZALOGUJ SIĘ JAKO ADMINISTRATOR</h1>
        @endif
    @else
        <h1 class="text-center mt-3">ZALOGUJ SIĘ JAKO ADMINISTRATOR</h1>
    @endif
    </body>
    @include('shared.footer')
</html>
