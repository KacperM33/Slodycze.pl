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
    <h1 class="text-center mt-3">MÓJ PROFIL</h1>
    @if(Auth::user()->id == $user->id )
        <div class="row d-flex justify-content-center mb-5 mt-3">
            <div class="col-10 col-sm-10 col-md-6 col-lg-4">
                <form action="{{ route('user.update', $user->id) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz zmienić dane?')" class="was-validated">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Imię:</label>
                        <input id="name" name="name" type="text" class="form-control" value="{{ $user->name }}" required>
                        <div class="invalid-feedback">Twoje imie jest wymagane.</div>
                        @if ($errors->has('name'))
                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="surname">Nazwisko:</label>
                        <input id="surname" name="surname" type="text" class="form-control" value="{{ $user->surname }}" required>
                        <div class="invalid-feedback">Twoje nazwisko jest wymagane.</div>
                        @if ($errors->has('surname'))
                            <div class="alert alert-danger">{{ $errors->first('surname') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="address">Adres:</label>
                        <input id="address" name="address" type="text" class="form-control" value="{{ $user->address }}" required>
                        <div class="invalid-feedback">Twój adres zamieszkania jest wymagany.</div>
                        @if ($errors->has('address'))
                            <div class="alert alert-danger">{{ $errors->first('address') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="phone">Nr telefonu:</label>
                        <input id="phone" name="phone" type="text" pattern="[0-9]{9}" maxlength="9" class="form-control" value="{{ $user->phone }}" required>
                        <div class="invalid-feedback">Twoje numer telefonu jest wymagany.</div>
                        @if ($errors->has('phone'))
                            <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Adres email:</label>
                        <input id="email" name="email" type="text" class="form-control" value="{{ $user->email }}" disabled>
                        <div id="emailCom" class="form-text">Email służy jako login, nie można go zmienić.</div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-3 justify-content-center">Aktualizuj dane</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
    </body>
    @include('shared.footer')
</html>
