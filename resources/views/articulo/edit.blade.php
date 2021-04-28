@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Articulo</h1>
@stop

@section('content')
<form action="/articulos/{{$articulo->id}}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
    <label for="" class="form-label">Codigo</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" value="{{$articulo->codigo}}">
</div>

<div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$articulo->descripcion}}">
</div>

<div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">
</div>

<div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any"  class="form-control" tabindex="4" value="{{$articulo->precio}}">
</div>

<a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4" >Guardar</button>



</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop