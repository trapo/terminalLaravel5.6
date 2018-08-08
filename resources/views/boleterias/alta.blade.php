
@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Alta Boletería</h2><br/>
      <form method="post" action="{{url('boleterias')}}" >
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="descripcion">Nombre:</label>
            <input type="text" class="form-control" name="descripcion">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="telefono">Teléfono:</label>
            <input type="number" class="form-control" name="telefono">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
      
     
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </div>
      </form>
    </div>

@endsection