<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div class="right_col" role="main">
<?php print_r($monto) ?>
<div id="container"></div>
<button id="plain">Plain</button>
<button id="inverted">Inverted</button>
<button id="polar">Polar</button>
</div>
<script>
	$(function () {
    var chart = Highcharts.chart('container', {

        title: {
            text: 'Detalle de Montos Invertidos'
        },

        subtitle: {
            text: 'Plain'
        },

        xAxis: {
            categories: ['Parroquia', 'Religiosa', 'Educacion', 'Salud', 'Proteccion Social', 'Casa de Encuentros', 'Administrativa', 'Movilidad', 'Productiva', 'Penitenciaria']
        },

        series: [{
            type: 'column',
            colorByPoint: true,
            data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1],
            showInLegend: false
        }]

    });


    $('#plain').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: false
            },
            subtitle: {
                text: 'Plain'
            }
        });
    });

    $('#inverted').click(function () {
        chart.update({
            chart: {
                inverted: true,
                polar: false
            },
            subtitle: {
                text: 'Inverted'
            }
        });
    });

    $('#polar').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: true
            },
            subtitle: {
                text: 'Polar'
            }
        });
    });

});
</script>