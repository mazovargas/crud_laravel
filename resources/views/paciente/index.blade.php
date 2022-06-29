@extends('principal')

@section('contenido')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Pacientes</h3>
        <br>
        <a href="{{ url('/paciente/crear')}}" title="crear" class="btn btn-primary">
        crear</a>
        
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
        <table class="table table-striped projects">
    <thead>
        <tr>
            <th>Id</th>
            <th>Documento</th>
            <th>Tipo Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Genero</th>
            <th>Fecha Nacimiento</th>
            <th>Estado Civil</th>
            <th></th>
        </tr>
        <tbody>
            @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->id }}</td>
                <td>{{ $paciente->Documento }}</td>
                <td>{{ $paciente->TipoDocumento }}</td>
                <td>{{ $paciente->Nombres }}</td>
                <td>{{ $paciente->Apellidos }}</td>
                <td>{{ $paciente->Direccion }}</td>
                <td>{{ $paciente->Telefono }}</td>
                <td>{{ $paciente->Genero }}</td>
                <td>{{ $paciente->FechaNacimiento }}</td>
                <td>{{ $paciente->EstadoCivil }}</td>

                <td class="project-actions text-right">
                <form action="{{ url('/paciente/eliminar',$paciente) }}" method="POST">
                  @csrf
                <a class="btn btn-info btn-sm" href="{{ url('/paciente/editar', $paciente->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </a>
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" >
                              <i class="fas fa-trash">
                              </i>
                              Eliminar
                          </button>
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </thead>
</table>
        </div>
        <!-- /.card-body -->
      </div>
@endsection