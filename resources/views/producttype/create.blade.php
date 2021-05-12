@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1>Alta de Tipos de Producto</h1>

      <form action="/producttypes" method="post" class="form">
        @csrf
        <div class="form-group">
          <label for="">Nombre</label>
          <input class="form-control" type="text" name="name" value="">
        </div>

        <div class="form-group">
          <input class="form-control" type="submit" value="Guardar">
        </div>

      </form>

    </div>
  </div>
</div>
@endsection