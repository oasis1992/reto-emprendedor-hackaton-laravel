@extends('templates.partials.main')

@section('container')
    <h3 class="text-center">Secciones de convocatorias</h3>
    <table class="highlight">
        <thead>
        <tr>
            <th data-field="id">ID</th>
            <th data-field="nombre">Nombre</th>
            <th data-field="secciones">Secciones de campos</th>
        </tr>
        </thead>

        <tbody>
        @if(count($resultados) > 0 )
            @foreach($resultados as $resultado)
                <tr>
                    <td>{{$resultado->id}}</td>
                    <td>{{$resultado->nombre}}</td>
                    <td><a href="{{ route('convocatoria_secciones_index', ['convocatoria_id' => $resultado->id]) }}">ver</a></td>
                </tr>
            @endforeach

        @else
            <h3>No hay Secciones de convocatorias</h3>
        @endif
        </tbody>
    </table>

    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a href="{{ route('secciones_convocatoria_create', ['convocatoria_id' => $convocatoria_id]) }}" class="btn-floating btn-large red">
            <i class="large material-icons">add</i>
        </a>

    </div>
@endsection