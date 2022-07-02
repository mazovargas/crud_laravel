@extends('principal')

@section('contenido')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>
        <br>
        <a href="{{ url('/medicamento/crear')}}" title="crear" class="btn btn-primary">
        Editar</a>
        </div>
       
            <form name="frmRegistrar" method="POST" action="{{ url('/medicamento/actualizar',$medicamento->id) }}">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="descripcion">Nombre:</label>
                    <input type="text" id="Nombre" name="Nombre" value="{{ $medicamento->Nombre}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Precio:</label>
                    <input type="int" id="Precio" name="Precio" value="{{ $medicamento->Precio}}">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>  
            </form>
</div>





@endsection