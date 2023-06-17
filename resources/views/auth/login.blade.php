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
    <div class="container mt-5 mb-5">
        @if (session('error'))
            <div class="row d-flex justify-content-center">
                <div class="alert alert-danger">{{ session('error') }}</div>
            </div>
        @endif
        <div class="row mt-4 mb-4 text-center">
            <h1>Zaloguj się</h1>
        </div>

        @if ($errors->any())
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <div class="row d-flex justify-content-center">
            <div class="col-10 col-sm-10 col-md-6 col-lg-4">
                <form method="POST" action="{{ route('login.authenticate') }}" class="needs-validation" class="was-validation">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="continent">Hasło</label>
                        <input id="password" name="password" type="password" class="form-control" required>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-secondary btn-outline-light" type="submit" value="Wyślij">
                    </div>
                    <div class="text-center">
                        <p>
                        Zapomniałeś hasła? Skontaktuj się z Administratorem!
                        <br> Telefon <b>881365578</b>
                        <br> (nie dzwonić przed 8 rano)
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>

