@extends('layouts.app') @section('content')
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
        
          <form action="{{action('BoleteriaController@destroy', $boleteria['id'])}}" method="DELETE">
          @csrf
            <button class="btn btn-danger" type="submit" name="eliminar" id="eliminar">Borrar</button>
            <button type="submit" id="enviar">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="btn btn-success" type="button" href="{{ route('boleterias.create') }}">Alta</a>

  <div id="dialog-confirm" title="Eliminar">
    <p>
      <span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>Está seguro que desea eliminar?</p>
  </div>
  @stop @section('javascript')
  <script>
    $.noConflict();

    jQuery(document).ready(function ($) {
      //$('#enviar').hide();
      $(function () {
        //$('#enviar').hide();
        $("#dialog-confirm").hide();
        $('#eliminar').click(function () {

          $("#dialog-confirm").dialog({
            resizable: false,
            height: "auto",
            width: 400,
            modal: true,
            buttons: {
              "Borrar": function () {
                $('#enviar').click();
                $(this).dialog("close");
              },
              "Cancelar": function () {
                $(this).dialog("close");
              }
            }
          });
        })

      });

    });
  </script>
  @stop