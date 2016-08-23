@extends('templates.partials.main')

@section('container')
    <h3 class="text-center">Metricas de las categorias</h3>
    <table class="highlight">
        <thead>
        <tr>
            <th data-field="id">ID</th>
            <th data-field="nombre">Nombre</th>
            <th data-field="fecha_inicio">Porcentaje</th>
        </tr>
        </thead>

        <tbody>
        @if(count($resultados) > 0 )
            @foreach($resultados as $resultado)
                <tr>
                    <td>{{$resultado->id}}</td>
                    <td>{{$resultado->nombre}}</td>
                    <td>{{$resultado->porcentaje}}</td>
                </tr>
            @endforeach

        @else
            <h3>No hay metricas</h3>
        @endif
        </tbody>
    </table>

    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a href="{{ route('convocatoria_metrica_categoria_create', ['convocatoria_categoria_id' =>$convocatoria_categoria_id]) }}" class="btn-floating btn-large red">
            <i class="large material-icons">add</i>
        </a>

    </div>
@endsection