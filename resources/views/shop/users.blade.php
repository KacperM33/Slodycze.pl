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
    <div class="mb-5">
        <table class="table" style="width: 100%;">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imie</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Telefon</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse($user as $t)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $t->name}}</td>
                        <td>{{ $t->surname }}</td>
                        <td>{{ $t->phone }}</td>
                        <td>{{ $t->email }}</td>
                        <td>
                            <form action="{{ route('user.edit', $t->id) }}" method="GET">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-primary" name="userEd" id="userEd" value="{{ $t->id }}">EDYTUJ</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('user.delete') }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć tego użytkownika?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" name="userDel" id="userDel" value="{{ $t->id }}">USUŃ</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <p class="text-center mb-3">Brak użytkowników.</p>
                @endforelse
            </tbody>
        </table>
    </div>
    </body>
    @include('shared.footer')
</html>
