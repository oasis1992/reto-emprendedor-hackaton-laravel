@extends('templates.partials.main')


@section('container')

<table>
        <thead>
          <tr>
              <th data-field="id">Nombre del Proyecto</th>
              <th data-field="id">Evaluar</th>
          </tr>
        </thead>
        <tbody>
          @if(count($org))
          @for($i=0;$i < count($org);$i++)
          <tr>
            <td>{{$org[$i]->proyectos_evaluadores[$i]->proyecto->nombre}}</td>
            <td><a href="{{ route('evaluar_proyect', ['id' => 1]) }}">Evaluar!!</a></td>
          </tr>
          @endfor
          @endif
        </tbody>
      </table>

@endsection
