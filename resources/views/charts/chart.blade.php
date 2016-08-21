@extends('templates.partials.main')


@section('container')
    <div class="input-field col s12">
        <select id="select1">
            <option value="" disabled selected>Año inicial</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
        </select>
        <label>Año inicial</label>

    </div>

    <div class="input-field col s12">
        <select id="select2">
            <option value="" disabled selected>Año terminal</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
        </select>
        <label>Año terminal</label>

    </div>


@endsection
@section('js')



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'SEJUVE', 'Retro emprendedor', 'Prosoft'],
                ['2014', 1000, 400, 200],
                ['2015', 1170, 460, 250],
                ['2016', 660, 1120, 300],
                ['2017', 1030, 540, 350]
            ]);

            var options = {
                chart: {
                    title: 'Número de participantes por convocatoria al año',
                    subtitle: 'Grafica de barras: 2014-2017',
                },
                bars: 'vertical' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, options);
        }


        $(document).ready(function() {
            $('select').material_select();

        });

    </script>


    <div id="barchart_material" style="width: 900px; height: 500px;"></div>


@endsection