@extends('disseny')

@section('content')

<h1>Aplicaci√≥ d'administraci√≥ d'ONG</h1>
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
      <form method="post" action="{{ route('usuaris.store') }}">
          <div class="form-group">
              @csrf
              <label for="nom">Usuari</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="contrasenya">Contrasenya</label>
              <input type="password" class="form-control" name="contrasenya"/>
          </div>
          
          <div class="form-group">
              <label for="admin">Administrador</label> <br>
              No <input type="radio" name="admin" value="0" checked/> 
              Si <input type="radio" name="admin" value="1"/> 

          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br>
@endsection