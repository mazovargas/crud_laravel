@extends('principal')

@section('contenido')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>
        <br>
        <a href="{{ url('/producto/crear')}}" title="crear" class="btn btn-primary">
        Editar</a>
        </div>
       
            <form name="frmRegistrar" method="POST" action="{{ url('/producto/actualizar',$producto->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Codigo:</label>
                    <input type="int" id="codigo" name="codigo" value="{{ $producto->codigo}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Precio:</label>
                    <input type="int" id="precio" name="precio" value="{{ $producto->precio}}">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>  
            </form>
</div>





@endsection