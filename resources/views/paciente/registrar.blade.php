@extends('principal')

@section('contenido')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">paciente</h3>
        <br>
        <a href="{{ url('/paciente/crear')}}" title="crear" class="btn btn-primary">
        Crear</a>
        </div>
            <form name="frmRegistrar" method="POST" action="{{ url('/paciente/guardar') }}">
                @csrf

                <div class="form-group">
                    <label for="descripcion">Documento:</label>
                    <input type="number" id="Documento" name="Documento">
                </div>
                <div class="form-group">
                    <label for="descripcion">Tipo Documento:</label>
                    <input type="text" id="TipoDocumento" name="TipoDocumento">
                </div>
                <div class="form-group">
                    <label for="descripcion">Nombres:</label>
                    <input type="text" id="Nombres" name="Nombres">
                </div>
                <div class="form-group">
                    <label for="descripcion">Apellidos:</label>
                    <input type="text" id="Apellidos" name="Apellidos">
                </div>
                <div class="form-group">
                    <label for="descripcion">Direccion:</label>
                    <input type="text" id="Direccion" name="Direccion">
                </div>
                <div class="form-group">
                    <label for="descripcion">Telefono:</label>
                    <input type="number" id="Telefono" name="Telefono">
                </div>
                <div class="form-group">
                    <label for="descripcion">Genero:</label>
                    <input type="text" id="Genero" name="Genero">
                </div>
                <div class="form-group">
                    <label for="descripcion">Fecha Nacimiento:</label>
                    <input type="date" id="FechaNacimiento" name="FechaNacimiento">
                </div>
                <div class="form-group">
                    <label for="descripcion">Estado Civil:</label>
                    <input type="text" id="EstadoCivil" name="EstadoCivil">
                </div>
               
                <button type="submit" class="btn btn-primary">Registrar</button>  
            </form>
</div>





@endsection