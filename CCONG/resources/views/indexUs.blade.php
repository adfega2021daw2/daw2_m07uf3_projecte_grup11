@extends('disseny')

@section('content')

<h1>Llista de usuaris</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif

  <table class="table">
    <thead>
        <tr class="table-primary">

         
          <td>ID</td>
          <td>Usuari</td>
          <td>Email</td>
          <td>Constrasenya</td>
          <td>Administrador</td>
            
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usuari as $empl)
        <tr>
        <td>{{$empl->id}}</td>
            <td>{{$empl->nom}}</td>
            <td>{{$empl->email}}</td>
            <td>**********</td>
            @if($empl->admin==1)
            <td>Si</td>
            @else
            <td>No</td>
            @endif
            <td class="text-left">
                <a href="{{ route('usuaris.edit', $empl->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('usuaris.destroy', $empl->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('/') }}">Tancar sessió</a>

<br>
@endsection