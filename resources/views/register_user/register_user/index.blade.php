@extends('templates.partials.main')


@section('container')

<a href="{{route('create_org')}}" class="waves-effect waves-light btn">Crear Nuevos Evaluadores </a>

<table>
        <thead>
          <tr>
              <th data-field="id">Nombre del Evaluador</th>
              <th data-field="id">Email</th>
              <th data-field="id">Password</th>
              <th data-field="price">Cargo</th>
              <th data-field="price">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @if(count($org))
          @foreach($org as $org1)
          <tr>
            <td>{{$org1->nombre}}</td>
            <td>{{$org1->email}}</td>
            <td>{{$org1->password}}</td>
            <td>{{$org1->tipo}}</td>
            <td>
              <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Acciones!</a>
              <!-- Dropdown Structure -->
              <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!">Editar</a></li>
                <li><a href="#!">Eliminar</a></li>
              </ul>
            </td>
          </tr>
          @endforeach
          @endif
        </tbody>
      </table>

@endsection
