@extends('disseny')

@section('content')

<h1>Aplicació d'administració d'ONG</h1>
<div class="card mt-5">
  <div class="card-header">
    Registrar usuari
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
      <form method="post" action="{{ route('loginAdministrador') }}">
          <div class="form-group">
              @csrf
              <label for="nom">Usuari</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          
          <div class="form-group">
              <label for="contrasenya">Contrasenya</label>
              <input type="password" class="form-control" name="contrasenya"/>
          </div>

          <div class="form-group">
              <label for="admin">Administrador</label> <br>
              Si <input type="radio" name="admin" value="1" checked/> 

          </div>

          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br>
@endsection