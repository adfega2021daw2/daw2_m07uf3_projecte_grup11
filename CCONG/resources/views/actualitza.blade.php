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
        <form method="post" action="{{ route('ong.update', $ong->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="cif">Cif</label>
                <input type="text" class="form-control" name="cif" value="{{ $ong->cif }}" />
            </div>
            <div class="form-group">
                <label for="nom">nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $ong->nom }}" />
            </div>
            <div class="form-group">
                <label for="adressa">adressa</label>
                <input type="text" class="form-control" name="adressa" value="{{ $ong->adressa }}" />
            </div>
            <div class="form-group">
                <label for="poblacio">poblacio</label>
                <input type="text" class="form-control" name="poblacio" value="{{ $ong->poblacio }}" />
            </div>
            <div class="form-group">
                <label for="comarca">comarca</label>
                <input type="text" class="form-control" name="comarca" value="{{ $ong->comarca }}" />
            </div>
            <div class="form-group">
              <label for="tipus">Tipus</label>
              <select name="tipus" class="form-control">
                <option value="ecologista">ecologista</option>
                <option value="integracio">integracio</option>
                <option value="desenvolupament">desenvolupament</option>
                <option value="cultural">cultural</option>
                <option value="altres">altres</option>
              </select>
          </div> <br>
          <div class="form-group">
                    <label for="utilitat_publica">Utilitat publica</label> <br>
                        @if($ong->utilitat_publica==0)
                        No <input type="radio" name="utilitat_publica" value="0" checked/> 
                        Si <input type="radio" name="utilitat_publica" value="1"/> 
                        @else
                        No <input type="radio" name="utilitat_publica" value="0"/> 
                        Si <input type="radio" name="utilitat_publica" value="1" checked/> 
                        @endif
                </div>


            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('ong') }}">Accés directe a la Llista d'ong</a
@endsection