@extends('disseny')

@section('content')

<h1>Llista d'empleats</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <h3>Voluntaris</h3>
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
          <td>Data ingres</td>
          <td>Edat</td>
          <td>Professio</td>
          <td>Hores</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($treballador as $empl)
        @if($empl->tipus==1)
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
            <td>{{$empl->ingres}}</td>
            <td>{{$empl->edat}}</td>
            <td>{{$empl->profesio}}</td>
            <td>{{$empl->hores}}</td>
            <td class="text-left">
                <a href="{{ route('treballadors.edit', $empl->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('treballadors.destroy', $empl->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @else
        @endif
        @endforeach
    </tbody>
  </table>


  <h3>Treballadors</h3>

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
          <td>Data ingres</td>
          <td>Carrec</td>
          <td>Sou</td>
          <td>Seguretat social</td>
          <td>IRPF</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($treballador as $empl)
        @if($empl->tipus==0)       
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
            <td>{{$empl->ingres}}</td>
            <td>{{$empl->carrec}}</td>
            <td>{{$empl->sou}}</td>
            <td>{{$empl->seg_social}}</td>
            <td>{{$empl->irpf}}</td>
            <td class="text-left">
                <a href="{{ route('treballadors.edit', $empl->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('treballadors.destroy', $empl->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @else
        @endif
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('treballadors/create') }}">Accés directe a la vista de creació d'empleats</a>
<br><a href="{{ url('/') }}">Tancar sessió</a>

@endsection