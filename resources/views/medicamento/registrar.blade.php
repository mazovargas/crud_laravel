@extends('principal')

@section('contenido')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Medicamentos</h3>
        <br>
        <a href="{{ url('/medicamento/crear')}}" title="crear" class="btn btn-primary">
        Crear</a>
        </div>
            <form name="frmRegistrar" method="POST" action="{{ url('/medicamento/guardar') }}">
                @csrf
                
                <div class="form-group">
                    <label for="descripcion">Nombre:</label>
                    <input type="text" id="Nombre" name="Nombre">
                </div>
                <div class="form-group">
                    <label for="descripcion">Precio:</label>
                    <input type="number" id="Precio" name="Precio">
                </div>
               
                <button type="submit" class="btn btn-primary">Registrar</button>  
            </form>
</div>





@endsection