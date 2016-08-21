@extends('templates.partials.main')

@section('container')
    <h3 class="text-center">Convocatorias</h3>
    <table class="highlight">
        <thead>
        <tr>
            <th data-field="id">ID</th>
            <th data-field="nombre">Nombre</th>
            <th data-field="fecha_inicio">Fecha inicio</th>
            <th data-field="fecha_termino">fecha termino</th>
            <th data-field="calf_apro">Calf aprobada</th>
            <th data-field="calf_apro">Num evaluadores</th>
            <th data-field="calf_apro">Categorias de convocatoria</th>
            <th data-field="calf_apro">Secciones de convocatorias</th>
        </tr>
        </thead>

        <tbody>
        @if(count($resultados) > 0 )
            @foreach($resultados as $resultado)
                <tr>
                    <td>{{$resultado->id}}</td>
                    <td>{{$resultado->nombre}}</td>
                    <td>{{$resultado->fecha_inicio}}</td>
                    <td>{{$resultado->fecha_termino}}</td>
                    <td>{{$resultado->calf_aprobatoria}}</td>
                    <td>{{$resultado->evaluador_proyecto}}</td>
                    <td><a href="{{ route('convocatoria_secciones_index', ['convocatoria_id' => $resultado->id]) }}">ver</a></td>
                    <td><a href="{{ route('secciones_convocatoria_index', ['convocatoria_id' => $resultado->id]) }}">ver</a></td>

                </tr>
            @endforeach

        @else
            <h3>No hay Convocatorias de categorias</h3>
        @endif
        </tbody>
    </table>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a href="{{ route('convocatoria_create', ['organizacion_id' =>$organizacion_id]) }}" class="btn-floating btn-large red">
            <i class="large material-icons">add</i>
        </a>

    </div>

@endsection