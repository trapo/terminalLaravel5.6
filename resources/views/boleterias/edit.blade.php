 @extends('layouts.app') @section('content')
<div class="container">
  <h2>Edición Boleteria</h2>
  <br/>
  <form method="post" action="{{action('BoleteriaController@update', $id)}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input name="_method" type="hidden" value="PATCH">
    <input name="id" type="hidden" value="{{$boleteria->id}}">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="descripcion">Nombre:</label>
        <input type="text" class="form-control" name="descripcion" value="{{$boleteria->descripcion}}">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="telefono">Teléfono:</label>
        <input type="text" class="form-control" name="telefono" value="{{$boleteria->telefono}}">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="Email">Email:</label>
        <input type="text" class="form-control" name="email" value="{{$boleteria->email}}">
      </div>
    </div>



    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4" style="margin-top:60px">
        <button type="submit" class="btn btn-success">Editar</button>
      </div>
    </div>
  </form>
</div>


@endsection