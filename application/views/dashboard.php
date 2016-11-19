<script src="<?php echo base_url(); ?>assets/dashboards/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboards/data.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboards/drilldown.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboards/exporting.js"></script>
<div class="right_col" role="main">
 <?php foreach ($cantidadObras as $key) {
   $key['Cantidad'];
 }?>

    <div id="container" style="min-width: 500px; max-width: auto; height: 700px; margin: 0 auto"></div>

</div>
      <script>
        $(function () {
    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'OBRAS REGISTRADAS POR JURISDICCION'
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}: {point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> del total<br/>'
        },
        series: [{
            name: 'OBRAS' ,
            colorByPoint: true,
            data: [
            <?php foreach ($cantidadObras as $obras): ?> 
              { name : '<?php echo $obras['sede'].'| OBRAS : '. $obras['Cantidad']?> Porcentaje ',
                y: <?php echo (($obras['Cantidad']*100)/$total) ?>,
                drilldown: '<?php echo $obras['sede'] ?>'
              },
            <?php endforeach ?>
           
            ]
        }],
        drilldown: {
            series: [
              <?php foreach ($cantidadObras as $obras ):?>
              {
                name: '<?php echo $obras['sede']. ' OBRAS :'. $obras['Cantidad'] ?>',
                id: '<?php echo $obras['sede'] ?>',
                data: [
                    ['Obra de Educacion', 24.13],
                    ['Obra de Comunicacion', 17.2],
                    ['Obra de Administrativa', 8.11],
                    ['Obra de Movilidad', 5.33],
                    ['Obra Parroquia', 1.06],
                    ['Obra Penitenciaria', 0.5],
                    ['Obra Productiva', 0.5],
                    ['Obra de Proteccion', 0.5],
                    ['Obra Religiosa', 0.5],
                    ['Obra de Salud', 0.5],
                    
                    
                ]
              },
              <?php endforeach ?>
           ]
        }
    });
});

      </script>      
 