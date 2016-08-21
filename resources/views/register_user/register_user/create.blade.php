@extends('templates.partials.main')


@section('container')

<center>
  <div class="container">
        <div class="z-depth-1  grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
          <h2> ! Registrar !</h2>
        {!! Form::open(['route'=>'save_user','method'=>'POST','name'=>'form_modal','class'=>'col s12' , 'id'=>'form-id', 'role' => 'form'])!!}
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" name="nombres" required id="nombres" type="text" class="validate"> <label for="first_name">Nombres</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" name="apellido" type="text" required class="validate"> <label for="last_name">Apellidos</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" name="email" type="email" required class="validate"> <label for="email">Email</label>
                </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
    <select name="tipo">
      <option value="" disabled selected>Seleccionar Tipo de Usuario</option>
      <option value="2">Evaluador</option>
      <option value="3">Organizador</option>
    </select>
  </div>
            </div>


            <div class="row">
                <div class="input-field col s12">
                    <input id="password" name="password" type="password" required class="validate"> <label for="password">Password</label>
                </div>
            </div>

            <div class="row">
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit" name="action">
                    Registrame! <i class="material-icons right">send</i>
                </button>
                </div>
            </div>
              {!! Form::close()!!}

        </div>
      </div>
<center>

  @section('js')
<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
  @endsection


  @endsection
