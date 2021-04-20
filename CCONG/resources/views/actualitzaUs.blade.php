
<body>

    @extends('disseny')

    @section('content')


    <div class="card mt-5">
        <div class="card-header">
            Actualització de dades
        </div>

        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('usuaris.update', $usuari->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="nom">Usuari</label>
                    <input type="text" class="form-control" name="nom" value="{{ $usuari->nom }}" />
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $usuari->email }}"/>
                </div>
                <div class="form-group">
                    <label for="contrasenya">Contrasenya</label>
                    <input type="password" class="form-control" name="contrasenya" value="{{ $usuari->contrasenya }}"/>
                </div>
                <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
            </form>
        </div>
    </div>
    <br><a href="{{ url('usuaris') }}">Accés directe a la Llista de usuaris</a>
    @endsection
</body>