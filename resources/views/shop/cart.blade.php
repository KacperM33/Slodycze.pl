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
<<<<<<< HEAD
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
    <div class="mt-3 mx-3">
        <table class="table">
=======
    <div class="mt-3">
        <table class="table" style="width: 100%;">
>>>>>>> 3db2b7df448457fbdcaa306964e8db0e0921c0d7
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
<<<<<<< HEAD
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
=======
                @forelse($sweets as $t)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $t->name}}</td>
                        <td>{{ $t->weight }}g</td>
                        <td>{{ $t->price }}zł</td>
                        <td>{{ number_format(($t->weight/100) * $t->price, 2) }}zł</td>
                        <td>
                            <form action="{{ route('shop.cartDel', ['id' => Auth::user()->id ]) }}" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-danger" name="cartDel" id="cartDel" value="{{ $t->id }}">USUŃ</button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $empty = 0;
                    @endphp
                @empty
                    <p class="text-center mb-3">Twój koszyk jest pusty</p>
                    @php
                        $empty = 1;
                    @endphp
                @endforelse
            </tbody>
        </table>
        <div class="ms-3 mt-3 mb-3">
            @php
                $price_all = 0;
            @endphp
            <h3 class="text-start ms-3">Łączna cena koszyka:
                @foreach ($sweets as $t)
                    @php
                        $price_all += ($t->weight/100) * $t->price;
                    @endphp
                @endforeach
            {{number_format($price_all, 2)}} zł </h3>
        </div>
        <div class="ms-4 mb-3">
            @if($empty == 1)

            @else
            <form action="{{ route('shop.buy', ['id' => Auth::user()->id ]) }}" method="GET"  onsubmit="alert('Zamówienie zostało złożone pomyślnie!')">
                @csrf
                @method('GET')
                <button type="submit" class="btn btn-success btn-outline-light" name="buy" id="buy">ZŁÓŻ ZAMÓWIENIE</button>
            </form>
            @endif
        </div>
>>>>>>> 3db2b7df448457fbdcaa306964e8db0e0921c0d7
    </div>
    </body>
    @include('shared.footer')
</html>
