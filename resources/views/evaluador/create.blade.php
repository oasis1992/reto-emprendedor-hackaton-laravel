@extends('templates.partials.main')


@section('container')


<center>
  <div class="container">
        <div class="z-depth-1  grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
          <h2> ! Datos del Proyecto !</h2>

          <div class="row">
                <div class="input-field col s12">
                    <input  required disabled name="org_name" id="org_name" type="text" value="{{$datos[0]->nombre}}" class="validate"> <label for="first_name">Nombre Proyecto</label>
                </div>

            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input  required disabled name="org_name" id="org_name" type="text" value="{{$datos[0]->descripcion}}" class="validate"> <label for="first_name">descrcipcion</label>
                </div>

            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input  required disabled name="org_name" id="org_name" type="text" value="{{$datos[0]->usuario->nombre}}" value="{{$datos[0]->descripcion}}" class="validate"> <label for="first_name">Lider del Proyecto</label>
                </div>

            </div>

            <table>
                    <thead>
                      <tr>
                          <th data-field="id">Nombre de Integrantes</th>
                          <th data-field="id">Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(count($datos))
                    @for($i=0;$i < count($datos[0]->proyectos_integrantes);$i++)
                      <tr>
                        <td>{{$datos[0]->proyectos_integrantes[$i]->nombre}}</td>
                        <td>{{$datos[0]->proyectos_integrantes[$i]->email}}</td>
                      </tr>
                      @endfor
                      @endif
                    </tbody>
                  </table>


                  <table>
                          <thead>
                            <tr>
                                <th data-field="id">nombre </th>
                                <th data-field="id">Porcentage</th>
                                <th data-field="id">Calificacion</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if(count($datos))
                          @for($i=0;$i < count($datos[0]->convocatoria_categoria->categorias_metricas);$i++)
                            <tr>
                              <td>{{$datos[0]->convocatoria_categoria->categorias_metricas[$i]->nombre}}</td>
                              <td>{{$datos[0]->convocatoria_categoria->categorias_metricas[$i]->porcentaje}}</td>
                              <td>
                                <input required type=number max="{{$datos[0]->convocatoria_categoria->categorias_metricas[0]->porcentaje}}">
                              </td>
                            </tr>
                            @endfor
                            @endif
                          </tbody>
                        </table>
                        <div class='row'>
                          <button type='submit'  name='btn_login' class='col s12 btn btn-large waves-effect orange darker-4'>Calificar !!</button>
                        </div>




            <!--div class="row">
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit" name="action">
                    Registrame! <i class="material-icons right">send</i>
                </button>
                </div>
            </div-->


        </div>
      </div>
<center>



@endsection
