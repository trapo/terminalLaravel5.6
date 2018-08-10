 @extends('layouts.app')
 
  @section('content')

<div class="container">
  <br /> @if (\Session::has('success'))
  <div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
  </div>
  <br /> @endif
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($boleterias as $boleteria) @php @endphp
      <tr>
        <td>{{$boleteria['id']}}</td>
        <td>{{$boleteria['descripcion']}}</td>
        <td>{{$boleteria['telefono']}}</td>
        <td>{{$boleteria['email']}}</td>


        <td>
          <a href="{{action('BoleteriaController@edit', $boleteria['id'])}}" class="btn btn-warning">Editar</a>
        </td>
        <td>

          <form action="{{action('BoleteriaController@destroy', $boleteria['id'])}}" method="post" onsubmit="return confirm('Está seguro que desea borrar?');">
            @csrf
            <button class="btn btn-danger" type="submit" name="eliminar" id="eliminar">Borrar</button>
            <input name="_method" type="hidden" value="DELETE">
 
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="btn btn-success" type="button" href="{{ route('boleterias.create') }}">Alta</a>



  @stop