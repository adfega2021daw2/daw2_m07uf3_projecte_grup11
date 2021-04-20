<head>
<script

        src="https://code.jquery.com/jquery-3.6.0.js"

        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="

        crossorigin="anonymous"></script>

    <script>

        $(function () {         //$() es lo mateix que fer un window load, al estar lhtml carregat es crida automaticament la funcio

            var carrec = $("input[name='carrec']");
            var sou = $("input[name='sou']");
            var seg = $("input[name='seg_social']");
            var irpf = $("input[name='irpf']");

            var hores = $("input[name='hores']");
            var profes = $("input[name='profesio']");
            var edat = $("input[name='edat']");

            hores.prop('disabled',true).val("");
            profes.prop('disabled',true).val("");
            edat.prop('disabled',true).val("");

            $('#tipus').change(function(){
                if($(this).val() == "1"){
                    carrec.prop('disabled',true).val("");
                    sou.prop('disabled',true).val("");
                    seg.prop('disabled',true).val("");
                    irpf.prop('disabled',true).val("");
                    hores.prop('disabled',false).val(" ");
                    profes.prop('disabled',false).val(" ");
                    edat.prop('disabled',false).val(" ");

                }else{
                    hores.prop('disabled',true).val("");
                    profes.prop('disabled',true).val("");
                    edat.prop('disabled',true).val("");
                    carrec.prop('disabled',false).val("");
                    sou.prop('disabled',false).val(" ");
                    seg.prop('disabled',false).val(" ");
                    irpf.prop('disabled',false).val(" ");

                }   
            });

            sou.keyup(function(){
                seg.val(parseInt($(this).val())/100);
                irpf.val(parseInt($(this).val())/10);

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
            <form method="post" action="{{ route('treballadors.update', $treballador->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="nif">Nif</label>
                    <input type="text" class="form-control" name="nif" value="{{ $treballador->nif }}" />
                </div>
                <div class="form-group">
                <label for="noms">Nom</label>
                <input type="text" class="form-control" name="noms" value="{{ $treballador->noms }}"/>
                </div>
                <div class="form-group">
                    <label for="cognoms">Cognoms</label>
                    <input type="text" class="form-control" name="cognoms" value="{{ $treballador->cognoms }}"/>
                </div>
                <div class="form-group">
                    <label for="adressa">Adreça</label>
                    <input type="text" class="form-control" name="adressa" value="{{ $treballador->adressa }}"/>
                </div>
                
                <div class="form-group">
                    <label for="poblacio">Poblacio</label>
                    <input type="text" class="form-control" name="poblacio" value="{{ $treballador->poblacio }}"/>
                </div>
                <div class="form-group">
                    <label for="comarca">Comarca</label>
                    <input type="text" class="form-control" name="comarca" value="{{ $treballador->comarca }}"/>
                </div>
                <div class="form-group">
                    <label for="telefon">Telèfon</label>
                    <input type="tel" class="form-control" name="telefon" value="{{ $treballador->telefon }}"/>
                </div>
                <div class="form-group">
                    <label for="movil">Movil</label>
                    <input type="tel" class="form-control" name="movil" value="{{ $treballador->movil }}"/>
                </div>
                <div class="form-group">
                    <label for="email">Correu electrònic</label>
                    <input type="email" class="form-control" name="email" value="{{ $treballador->email }}"/>
                </div>
                <div class="form-group">
                    <label for="ingres">Data ingrés a ONG</label>
                    <input type="date" class="form-control" name="ingres" value="{{ $treballador->ingres }}"/>
                </div>
                <div class="form-group">
                    <label for="nom_ong">ONG</label>
                    <input type="text" class="form-control" name="nom_ong" value="{{ $treballador->nom_ong }}"/>
                </div>
                <div class="form-group">
                    <label for="tipus">Tipus</label> <br>
                    <select name="tipus" id="tipus" class="form-control">
                        @if($treballador->tipus==0)
                        <option value="0" selected>Treballador</option>
                        <option value="1">Voluntari</option>
                        @else
                        <option value="0" >Treballador</option>
                        <option value="1" selected>Voluntari</option>
                        @endif
                    </select>
                </div>

                <div class="form-group">
                    <label for="carrec">Carrec</label>
                    <input type="text" id="carrec" class="form-control" name="carrec" value="{{ $treballador->carrec }}"/>
                </div>
                <div class="form-group">
                    <label for="sou">Sou</label>
                    <input type="number" class="form-control" name="sou" value="{{ $treballador->sou }}"/>
                </div>
                <div class="form-group">
                    <label for="seg_social">Pagament seguretat social</label> 
                    <input type="number" class="form-control" step="0.01" name="seg_social" value="{{ $treballador->seg_social }}" />
                </div>
                <div class="form-group">
                    <label for="irpf">IPRF descomptat</label>
                    <input type="number" class="form-control" step="0.01" name="irpf" value="{{ $treballador->irpf }}" />
                </div>
                <div class="form-group">
                    <label for="edat">Edat</label>
                    <input type="number" class="form-control" name="edat" value="{{ $treballador->edat }}"/>
                </div>
                <div class="form-group">
                    <label for="hores">Hores</label>
                    <input type="number" class="form-control" name="hores" value="{{ $treballador->hores }}"/>
                </div>
                <div class="form-group">
                    <label for="profesio">Professio</label> 
                    <input type="text" class="form-control" name="profesio" value="{{ $treballador->profesio }}"/>
                </div>

                <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
            </form>
        </div>
    </div>
    <br><a href="{{ url('treballadors') }}">Accés directe a la Llista d'empleats</a>
    @endsection
</body>