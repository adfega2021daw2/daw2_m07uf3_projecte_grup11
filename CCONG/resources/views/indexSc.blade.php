@extends('disseny')

@section('content')

<h1>Llista de socis</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif

  <table class="table">
    <thead>
        <tr class="table-primary">

         
          <td>NIF</td>
          <td>Nom</td>
          <td>Cognoms</td>
          <td>Adreça</td>
          <td>Poblacio</td>
          <td>Comarca</td>
          <td>Telefon</td>
          <td>Movil</td>
          <td>Correu</td>
          <td>Data d'alta</td>
          <td>ONG</td>
          <td>Quota mensual</td>
          <td>Aportacions extra</td>
          <td>Paga anual</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($soci as $empl)
        <tr>
        <td>{{$empl->nif}}</td>
            <td>{{$empl->noms}}</td>
            <td>{{$empl->cognoms}}</td>
            <td>{{$empl->adressa}}</td>
            <td>{{$empl->poblacio}}</td>
            <td>{{$empl->comarca}}</td>
            <td>{{$empl->telefon}}</td>
            <td>{{$empl->movil}}</td>
            <td>{{$empl->email}}</td>
            <td>{{$empl->alta}}</td>
            <td>{{$empl->nom_ong}}</td>
            <td>{{$empl->quota}}</td>
            <td>{{$empl->aportacions}}</td>
            <td>{{$empl->anual}}</td>
            <td class="text-left">
                <a href="{{ route('socis.edit', $empl->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('socis.destroy', $empl->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('socis/create') }}">Accés directe a la vista de creació de socis</a>
<br><a href="{{ url('/') }}">Tancar sessió</a>

@endsection