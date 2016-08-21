@extends('templates.partials.main')

@section('container')
    <h3 class="text-center">Secciones de campo</h3>
    <table class="highlight">
        <thead>
        <tr>
            <th data-field="id">ID</th>
            <th data-field="nombre">Texto</th>
            <th data-field="nombre">Values</th>
            <th data-field="nombre">Requerido</th>
        </tr>
        </thead>

        <tbody>
        @if(count($resultados) > 0 )
            @foreach($resultados as $resultado)
                <tr>
                    <td>{{$resultado->id}}</td>
                    <td>{{$resultado->texto}}</td>
                    <td>{{$resultado->list_values}}</td>
                    @if($resultado->requerido == true)
                        <td>Si</td>
                        @else
                        <td>No</td>
                    @endif
                </tr>
            @endforeach

        @else
            <h3>No hay secciones de campo</h3>
        @endif
        </tbody>
    </table>
@endsection