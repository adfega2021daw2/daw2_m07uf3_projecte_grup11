<head>
<script

        src="https://code.jquery.com/jquery-3.6.0.js"

        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="

        crossorigin="anonymous"></script>

        <script>

$(function () {         //$() es lo mateix que fer un window load, al estar lhtml carregat es crida automaticament la funcio


    $("#quota").keyup(function(){
        $("#anual").val(parseInt($("#aportacions").val()) + parseInt($(this).val()*12));
    });

    $("#aportacions").keyup(function(){
        $("#anual").val(parseInt($(this).val()) + parseInt($("#quota").val()*12));
    });
    

});

</script>
</head>
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
            <form method="post" action="{{ route('socis.update', $soci->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="nif">Nif</label>
                    <input type="text" class="form-control" name="nif" value="{{ $soci->nif }}" />
                </div>
                <div class="form-group">
                <label for="noms">Nom</label>
                <input type="text" class="form-control" name="noms" value="{{ $soci->noms }}"/>
                </div>
                <div class="form-group">
                    <label for="cognoms">Cognoms</label>
                    <input type="text" class="form-control" name="cognoms" value="{{ $soci->cognoms }}"/>
                </div>
                <div class="form-group">
                    <label for="adressa">Adreça</label>
                    <input type="text" class="form-control" name="adressa" value="{{ $soci->adressa }}"/>
                </div>
                
                <div class="form-group">
                    <label for="poblacio">Poblacio</label>
                    <input type="text" class="form-control" name="poblacio" value="{{ $soci->poblacio }}"/>
                </div>
                <div class="form-group">
                    <label for="comarca">Comarca</label>
                    <input type="text" class="form-control" name="comarca" value="{{ $soci->comarca }}"/>
                </div>
                <div class="form-group">
                    <label for="telefon">Telèfon</label>
                    <input type="tel" class="form-control" name="telefon" value="{{ $soci->telefon }}"/>
                </div>
                <div class="form-group">
                    <label for="movil">Movil</label>
                    <input type="tel" class="form-control" name="movil" value="{{ $soci->movil }}"/>
                </div>
                <div class="form-group">
                    <label for="email">Correu electrònic</label>
                    <input type="email" class="form-control" name="email" value="{{ $soci->email }}"/>
                </div>
                <div class="form-group">
                    <label for="alta">Data alta a ONG</label>
                    <input type="date" class="form-control" name="alta" value="{{ $soci->alta }}"/>
                </div>
                <div class="form-group">
                    <label for="nom_ong">ONG</label>
                    <input type="text" class="form-control" name="nom_ong" value="{{ $soci->nom_ong }}"/>
                </div>
                <div class="form-group">
                    <label for="quota">Quota mensual</label>
                    <input type="number" id="quota" class="form-control" name="quota" value="{{ $soci->quota }}"/>
                </div>
                <div class="form-group">
                    <label for="aportacions">Aportacions voluntaries</label>
                    <input type="number" id="aportacions" class="form-control" name="aportacions" value="{{ $soci->aportacions }}"/>
                </div>
                <div class="form-group">
                    <label for="anual">Total anual</label>
                    <input type="number" step="0.01" id="anual" class="form-control" name="anual" value="{{ $soci->anual }}"/>
                </div>
                <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
            </form>
        </div>
    </div>
    <br><a href="{{ url('soci') }}">Accés directe a la Llista de socis</a>
    @endsection
</body>