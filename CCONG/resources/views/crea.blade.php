@extends('disseny')

@section('content')

<h1>Aplicació d'administració d'ONG</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix una nova ONG
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
      <form method="post" action="{{ route('ong.store') }}">
          <div class="form-group">
              @csrf
              <label for="cif">cif</label>
              <input type="text" class="form-control" name="cif"/>
          </div>
          <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="adressa">Adreça</label>
              <input type="text" class="form-control" name="adressa"/>
          </div>
          
          <div class="form-group">
              <label for="poblacio">Poblacio</label>
              <input type="text" class="form-control" name="poblacio"/>
          </div>
          <div class="form-group">
              <label for="comarca">Comarca</label>
              <input type="text" class="form-control" name="comarca"/>
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
              <label for="utilitat_publica">utilitat publica</label> <br>
              No <input type="radio" name="utilitat_publica" value="0" checked/> 
              Si <input type="radio" name="utilitat_publica" value="1"/> 

          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('ong') }}">Accés directe a la Llista d'ong</a>
@endsection