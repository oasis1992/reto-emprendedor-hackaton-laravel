@extends('templates.partials.main')


@section('container')


<center>
  <div class="container">
        <div class="z-depth-1  grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
          <h2> ! Registrar Organizadores !</h2>

          {!! Form::open(['route'=>'store_org','method'=>'POST','name'=>'form_modal','class'=>'col s12' , 'id'=>'form-id', 'role' => 'form'])!!}
            <div class="row">
                <div class="input-field col s12">
                    <input  required name="org_name" id="org_name" type="text" class="validate"> <label for="first_name">Nombre de las Organizaciones</label>
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



@endsection
