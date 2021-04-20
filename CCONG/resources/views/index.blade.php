@extends('disseny')

@section('content')

<h1>Llista d'ong</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>CIF</td>
          <td>Nom</td>
          <td>Adreça</td>
          <td>Poblacio</td>
          <td>Comarca</td>
          <td>Tipus</td>
          <td>Utilitat Publica</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($ong as $ong)
        <tr>
            <td>{{$ong->cif}}</td>
            <td>{{$ong->nom}}</td>
            <td>{{$ong->adressa}}</td>
            <td>{{$ong->poblacio}}</td>
            <td>{{$ong->comarca}}</td>
            <td>{{$ong->tipus}}</td>
            @if($ong->utilitat_publica==1)
            <td>Si</td>
            @else
            <td>No</td>
            @endif
            <td class="text-left">
                <a href="{{ route('ong.edit', $ong->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('ong.destroy', $ong->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('ong/create') }}">Accés directe a la vista de creació d'ONG</a>
<br><a href="{{ url('/') }}">Tancar sessió</a>

@endsection