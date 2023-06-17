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
                <h1 class="text-center mb-3"> Dodaj nowego użytkownika </h1>
                <div class="col-10 col-sm-10 col-md-6 col-lg-4">
                    <form method="POST" action="{{ route('user.create') }}" enctype="multipart/form-data" class="was-validated">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Imie</label>
                            <input type="text" class="form-control" id="name" name="name" pattern="[A-Z].[a-z].{0,41}" title="Imię musi być z dużej litery i mieć maksymalnie 40 znaków." required>
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nazwisko</label>
                            <input type="text" class="form-control" id="surname" name="surname" pattern="[A-Z].[a-z].{0,41}" title="Nazwisko musi być z dużej litery i mieć maksymalnie 40 znaków." required>
                            @if ($errors->has('surname'))
                                <div class="alert alert-danger">{{ $errors->first('surname') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Adres email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hasło</label>
                            <input type="password" class="form-control" id="password" name="password" minlength="8" title="Hasło musi zawierać conajmniej 8 znaków" required>
                            @if ($errors->has('password'))
                                <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Numer telefonu</label>
                            <input type="text" class="form-control" id="phone" name="phone" pattern="[0-9]{9}" maxlength="9" required>
                            @if ($errors->has('phone'))
                                <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Adres zamieszkania</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                            @if ($errors->has('address'))
                                <div class="alert alert-danger">{{ $errors->first('address') }}</div>
                            @endif
                        </div>
                        <div class="text-center mb-3">
                          <button type="submit" class="btn btn-primary">Dodaj użytkownika</button>
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
