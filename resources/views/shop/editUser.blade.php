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
    @if(Auth::user()->id == 1 )
        <div class="row d-flex justify-content-center mb-5 mt-3">
            <h1 class="text-center mb-3"> Profil użytkownika <b>{{ $user->name }}</b></h1>
            <div class="col-10 col-sm-10 col-md-6 col-lg-4">
                <form action="{{ route('user.update', $user->id) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz zmienić dane?')" class="was-validated">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">Imię:</label>
                        <input id="name" name="name" type="text" class="form-control" pattern="[A-Z].{0,40}" title="Imie musi być z dużej litery i mieć maksymalnie 40 znaków." value="{{ $user->name }}" required>
                        <div class="invalid-feedback">Twoje imie jest wymagane.</div>
                        @if ($errors->has('name'))
                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="surname">Nazwisko:</label>
                        <input id="surname" name="surname" type="text" class="form-control" pattern="[A-Z].{0,40}" title="Nazwisko musi być z dużej litery i mieć maksymalnie 40 znaków." value="{{ $user->surname }}" required>
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
                        <label for="phone">Hasło:</label>
                        <div class="input-group">
                            <input id="password" name="password" type="password" minlength="8" title="Hasło musi mieć conajmniej 8 znaków" class="form-control form-control-toggle" value="{{ $user->password }}" required>
                        </div>
                        <div class="invalid-feedback">Podaj hasło.</div>
                        @if ($errors->has('phone'))
                            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Adres email:</label>
                        <input id="email" name="email" type="text" class="form-control" value="{{ $user->email }}" disabled>
                        <div id="emailCom" class="form-text">Email służy jako login, nie można go zmienić.</div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-3 justify-content-center">Aktualizuj dane użytkownika</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
    </body>
    @include('shared.footer')
</html>
