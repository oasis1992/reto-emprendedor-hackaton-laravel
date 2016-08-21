@extends('templates.partials.main')

@section('container')
    <h3 class="text-center">Metricas de las categorias de convocatoria</h3>
    <table class="highlight">
        <thead>
        <tr>
            <th data-field="id">ID</th>
            <th data-field="nombre">Nombre</th>
            <th data-field="fecha_inicio">Porcentaje</th>
            <th data-field="fecha_inicio">Categoria</th>

        </tr>
        </thead>

        <tbody>
        @if(count($resultados) > 0 )
            @foreach($resultados as $resultado)
                <tr>
                    <td>{{$resultado->id}}</td>
                    <td>{{$resultado->nombre}}</td>
                    <td>{{$resultado->porcentaje}}</td>
                    <a href=""><td>link</td></a>
                </tr>
            @endforeach

        @else
            <h3>No hay Convocatorias de categorias</h3>
        @endif
        </tbody>
    </table>
@endsection