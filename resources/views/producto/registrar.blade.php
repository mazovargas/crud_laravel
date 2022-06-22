@extends('principal')

@section('contenido')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Producto</h3>
        <br>
        <a href="{{ url('/producto/crear')}}" title="crear" class="btn btn-primary">
        Crear</a>
        </div>
            <form name="frmRegistrar" method="POST" action="{{ url('/producto/guardar') }}">
                @csrf
                <div class="form-group">
                    <label for="nombre">Codigo:</label>
                    <input type="number" id="codigo" name="codigo">
                </div>
                <div class="form-group">
                    <label for="descripcion">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="descripcion">Precio:</label>
                    <input type="number" id="precio" name="precio">
                </div>
               
                <button type="submit" class="btn btn-primary">Registrar</button>  
            </form>
</div>





@endsection