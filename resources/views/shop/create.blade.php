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
    @if(Auth::check())
        @if(Auth::user()->role_id == 1)
            <div class="row d-flex justify-content-center mb-5 mt-3">
                <div class="col-10 col-sm-10 col-md-6 col-lg-4">
                    <form method="POST" action="{{ route('sweets.add') }}" enctype="multipart/form-data" class="was-validated">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="name">Nazwa słodycza</label>
                            <input id="name" name="name" type="text" class="form-control" required>
                            <div class="invalid-feedback">Nazwa słodycza jest wymagana</div>
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group mb-2">
                            <label for="category">Kategoria</label>
                            <select required id="category" name="category" type="text" class="form-control">
                                <option value="">Wybierz kategorie</option>
                                <option value="Cukierki">Cukierki</option>
                                <option value="Czekolada">Czekolada</option>
                                <option value="Żelki">Żelki</option>
                            </select>
                            <div class="invalid-feedback">Wybierz kategorie słodycza</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="type">Typ</label>
                            <input id="type" name="type" type="text" class="form-control" required>
                            <div class="invalid-feedback">Typ słodycza jest wymagany</div>
                            @if ($errors->has('type'))
                                <div class="alert alert-danger">{{ $errors->first('type') }}</div>
                            @endif
                        </div>
                        <div class="form-group mb-2">
                            <label for="price">Cena za 100g</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="price" name="price" type="number" min="00.10" placeholder="0.0" step="00.01" class="form-control" required>
                                    <span class="input-group-text">zł/100g</span>
                                    <div class="invalid-feedback">Minimalna cena produktu to 0.10zł/100g</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="quantity">Ilość w gramach</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="quantity" name="quantity" type="number" min="100" placeholder="0" step="10" class="form-control" required>
                                    <span class="input-group-text">g</span>
                                    <div class="invalid-feedback">Minimalna ilość gramów produktu to 100g</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="describe">Opis</label>
                            <input id="describe" name="describe" type="text" class="form-control" required>
                            <div class="invalid-feedback">Opis wymagany</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="photo">Dodaj zdjęcie przedmiotu:</label>
                            <input type="file" class="form-control" aria-label="file example"  id="photo" name="photo" required>
                            <div class="invalid-feedback">Wybierz zdjęcie słodycza</div>
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
