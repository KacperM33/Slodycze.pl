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
    <div class="mt-3 mx-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Ilość</th>
                <th scope="col">Cena produktu</th>
                <th scope="col">Cena zamówienia</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($transaction as $t)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $photo }}</td>
                    <td>{{ $weight/1000 }}g</td>
                    <td>{{ $price }}zł</td>
                    <td>{{ ($weight/100) * $price }}zł</td>
                </tr>
            @empty
                <p>Pusty koszyk</p>
            @endforelse
            </tbody>
        </table>
    </div>
    </body>
    @include('shared.footer')
</html>
