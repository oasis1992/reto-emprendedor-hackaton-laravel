@extends('templates.partials.main')

@section('container')
    <h3 class="text-center"> Crear sección de convocatoria</h3>

    <div class="row">
        <div class="col s12 m5 cent-card" >
            <div class="card-panel teal" style="background-color: white !important;">
                <div class="row">
                    <form class="col s12" action="{{ route('convocatoria_metrica_categoria_store')}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="convocatoria__categoriaid" value="{{ $convocatoria_categoria_id }}">
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="nombre" id="first_name" type="text" class="validate">
                                <label for="first_name">Nombre</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input name="porcentaje" id="first_name" type="number" class="validate">
                                <label for="first_name">Porcentaje</label>
                            </div>

                        </div>

                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

@section('js')
    <script>

        var picker = new Pikaday({
            field: document.getElementById('f-i'),
            format: 'YYYY-MM-DD',
            minDate: new Date('2015-11-14'),
            maxDate: new Date('2015-12-07'),
            defaultDate: new Date('2015-11-14'),
            i18n: {
                previousMonth : 'Previous Month',
                nextMonth     : 'Next Month',
                months        : ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                weekdays      : ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
                weekdaysShort : ['Do','Lu','Ma','Mi','Ju','Vi','Sa']
            },
            onSelect: function() {
                var date2= moment().toDate();
                var date = moment.utc(picker.getDate()).format("YYYY-MM-DD");
                var input_text =  document.getElementById('f-i');
                input_text.value= date;
                console.log(date2);
                document.date_form.submit()

            }
        });

        var picker2 = new Pikaday({
            field: document.getElementById('f-t'),
            format: 'YYYY-MM-DD',
            minDate: new Date('2015-11-14'),
            maxDate: new Date('2015-12-07'),
            defaultDate: new Date('2015-11-14'),
            i18n: {
                previousMonth : 'Previous Month',
                nextMonth     : 'Next Month',
                months        : ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                weekdays      : ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
                weekdaysShort : ['Do','Lu','Ma','Mi','Ju','Vi','Sa']
            },
            onSelect: function() {
                var date2= moment().toDate();
                var date = moment.utc(picker.getDate()).format("YYYY-MM-DD");
                var input_text =  document.getElementById('f-t');
                input_text.value= date;
                console.log(date2);
                document.date_form.submit()

            }
        });
    </script>
@endsection
@endsection