@extends('principal')

@section('contenido')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Editar</h3>
        <br>
        <a href="{{ url('/paciente/crear')}}" title="crear" class="btn btn-primary">
        Editar</a>
        </div>
       
            <form name="frmRegistrar" method="POST" action="{{ url('/paciente/actualizar',$paciente->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="descripcion">Documento:</label>
                    <input type="number" id="Documento" name="Documento" value="{{ $paciente->Documento}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Tipo Documento:</label>
                    <input type="text" id="TipoDocumento" name="TipoDocumento" value="{{ $paciente->TipoDocumento}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Nombres:</label>
                    <input type="text" id="Nombres" name="Nombres" value="{{ $paciente->Nombres}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Apellidos:</label>
                    <input type="text" id="Apellidos" name="Apellidos" value="{{ $paciente->Apellidos}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Direccion:</label>
                    <input type="text" id="Direccion" name="Direccion" value="{{ $paciente->Direccion}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Telefono:</label>
                    <input type="number" id="Telefono" name="Telefono" value="{{ $paciente->Telefono}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Genero:</label>
                    <input type="text" id="Genero" name="Genero" value="{{ $paciente->Genero}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Fecha Nacimiento:</label>
                    <input type="date" id="FechaNacimiento" name="FechaNacimiento" value="{{ $paciente->FechaNacimiento}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Estado Civil:</label>
                    <input type="text" id="EstadoCivil" name="EstadoCivil" value="{{ $paciente->EstadoCivil}}">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>  
            </form>
</div>





@endsection