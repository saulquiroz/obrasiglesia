<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboards/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div class="right_col" role="main">
<!--CANTIDAD DE OBRAS DE CADA LAS JURISDICCIONES-->
 <?php foreach ($cantidadObras as $key) {
   $key['Cantidad'];
 }?>
 <!--CANTIDAD DE TIPO DE OBRAS EN LA JURISDICCION DE COCHABAMBA-->
 <?php $total_cocha = 0;
    foreach ($obrasCocha as $cocha ) {
     $total_cocha = $total_cocha + $cocha['Cantidad']; }
     $total_lapaz = 0;
    foreach ($obrasLapaz as $lapaz ) {
     $total_lapaz = $total_lapaz + $lapaz['Cantidad']; }
     $total_santacruz = 0;
    foreach ($obrasSantacruz as $santacruz ) {
     $total_santacruz = $total_santacruz + $santacruz['Cantidad']; }
     $total_sucre = 0;
    foreach ($obrasSucre as $sucre ) {
     $total_sucre = $total_sucre + $sucre['Cantidad']; }
     $total_coroico = 0;
    foreach ($obrasCoroico as $coroico ) {
     $total_coroico = $total_coroico + $coroico['Cantidad']; }
     $total_elalto = 0;
    foreach ($obrasElalto as $elalto ) {
     $total_elalto = $total_elalto + $elalto['Cantidad']; }
     $total_oruro = 0;
    foreach ($obrasOruro as $oruro ) {
     $total_oruro = $total_oruro + $oruro['Cantidad']; }
     $total_potosi = 0;
    foreach ($obrasPotosi as $potosi ) {
     $total_potosi = $total_potosi + $potosi['Cantidad']; }
     $total_sanignacio = 0;
    foreach ($obrasSanignacio as $sanignacio ) {
     $total_sanignacio = $total_sanignacio + $sanignacio['Cantidad']; }
     $total_tarija = 0;
    foreach ($obrasTarija as $tarija ) {
     $total_tarija = $total_tarija + $tarija['Cantidad']; }
     $total_aiquile = 0;
    foreach ($obrasAiquile as $aiquile ) {
     $total_aiquile = $total_aiquile + $aiquile['Cantidad']; }
     $total_corocoro = 0;
    foreach ($obrasCorocoro as $corocoro ) {
     $total_corocoro = $total_corocoro + $corocoro['Cantidad']; }
     $total_beni = 0;
    foreach ($obrasBeni as $beni ) {
     $total_beni = $total_beni + $beni['Cantidad']; }
     $total_camiri = 0;
    foreach ($obrasCamiri as $camiri ) {
     $total_camiri = $total_camiri + $camiri['Cantidad']; }
     $total_chavez = 0;
    foreach ($obrasChavez as $chavez ) {
     $total_chavez = $total_chavez + $chavez['Cantidad']; }
     $total_pando = 0;
    foreach ($obrasPando as $pando ) {
     $total_pando = $total_pando + $pando['Cantidad']; }
     $total_reyes = 0;
    foreach ($obrasReyes as $reyes ) {
     $total_reyes = $total_reyes + $reyes['Cantidad']; }
 ?>

 
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
              { name : '<?php echo 'Total: '.$obras['Cantidad'].' '. $obras['sede'] ?> ',
                y: <?php echo (($obras['Cantidad']*100)/$total) ?>,
                drilldown: '<?php echo $obras['sede'] ?>'
              },
            <?php endforeach ?>
           
            ]
        }],
        drilldown: {
            series: [{
                name: 'ARQUIDIÓCESIS DE COCHABAMBA',
                id: 'ARQUIDIÓCESIS DE COCHABAMBA',
                data: [
                <?php foreach($obrasCocha as $cochabamba): ?>
                    ['<?php echo $cochabamba['Cantidad'].' '.$cochabamba['obras'] ?>', <?php echo ($cochabamba['Cantidad']/$total_cocha) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'ARQUIDIÓCESIS DE LA PAZ',
                id: 'ARQUIDIÓCESIS DE LA PAZ',
                data: [
                <?php foreach($obrasLapaz as $lapaz): ?>
                    ['<?php echo $lapaz['Cantidad'].' '.$lapaz['obras'] ?>', <?php echo ($lapaz['Cantidad']/$total_lapaz) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'ARQUIDIÓCESIS DE SANTA CRUZ DE LA SIERRA',
                id: 'ARQUIDIÓCESIS DE SANTA CRUZ DE LA SIERRA',
                data: [
                <?php foreach($obrasSantacruz as $santacruz): ?>
                    ['<?php echo $santacruz['Cantidad'].' '.$santacruz['obras'] ?>', <?php echo ($santacruz['Cantidad']/$total_santacruz) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'ARQUIDIÓCESIS DE SUCRE',
                id: 'ARQUIDIÓCESIS DE SUCRE',
                data: [
                <?php foreach($obrasSucre as $sucre): ?>
                    ['<?php echo $sucre['Cantidad'].' '.$sucre['obras'] ?>', <?php echo ($sucre['Cantidad']/$total_sucre) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'DIÓCESIS DE COROICO',
                id: 'DIÓCESIS DE COROICO',
                data: [
                <?php foreach($obrasCoroico as $coroico): ?>
                    ['<?php echo $coroico['Cantidad'].' '.$coroico['obras'] ?>', <?php echo ($coroico['Cantidad']/$total_coroico) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'DIÓCESIS DE EL  ALTO',
                id: 'DIÓCESIS DE EL  ALTO',
                data: [
                <?php foreach($obrasElalto as $elalto): ?>
                    ['<?php echo $elalto['Cantidad'].' '.$elalto['obras'] ?>', <?php echo ($elalto['Cantidad']/$total_elalto) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'DIOCESIS DE ORURO',
                id: 'DIOCESIS DE ORURO',
                data: [
                <?php foreach($obrasOruro as $oruro): ?>
                    ['<?php echo $oruro['Cantidad'].' '.$oruro['obras'] ?>', <?php echo ($oruro['Cantidad']/$total_oruro) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'DIOCESIS DE POTOSÍ',
                id: 'DIOCESIS DE POTOSÍ',
                data: [
                <?php foreach($obrasPotosi as $potosi): ?>
                    ['<?php echo $potosi['Cantidad'].' '.$potosi['obras'] ?>', <?php echo ($potosi['Cantidad']/$total_potosi) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'DIÓCESIS DE SAN IGNACIO DE VELASCO',
                id: 'DIÓCESIS DE SAN IGNACIO DE VELASCO',
                data: [
                <?php foreach($obrasSanignacio as $sanignacio): ?>
                    ['<?php echo $sanignacio['Cantidad'].' '.$sanignacio['obras'] ?>', <?php echo ($sanignacio['Cantidad']/$total_sanignacio) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'DIÓCESIS DE TARIJA',
                id: 'DIÓCESIS DE TARIJA',
                data: [
                <?php foreach($obrasTarija as $tarija): ?>
                    ['<?php echo $tarija['Cantidad'].' '.$tarija['obras'] ?>', <?php echo ($tarija['Cantidad']/$total_tarija) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'PRELATURA DE AIQUILE',
                id: 'PRELATURA DE AIQUILE',
                data: [
                <?php foreach($obrasAiquile as $aiquile): ?>
                    ['<?php echo $aiquile['Cantidad'].' '.$aiquile['obras'] ?>', <?php echo ($aiquile['Cantidad']/$total_aiquile) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'PRELATURA DE COROCORO',
                id: 'PRELATURA DE COROCORO',
                data: [
                <?php foreach($obrasCorocoro as $corocoro): ?>
                    ['<?php echo $corocoro['Cantidad'].' '.$corocoro['obras'] ?>', <?php echo ($corocoro['Cantidad']/$total_corocoro) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'VICARIATO DEL BENI',
                id: 'VICARIATO DEL BENI',
                data: [
                <?php foreach($obrasBeni as $beni): ?>
                    ['<?php echo $beni['Cantidad'].' '.$beni['obras'] ?>', <?php echo ($beni['Cantidad']/$total_beni) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'VICARIATO APOSTÓLICO DE CAMIRI',
                id: 'VICARIATO APOSTÓLICO DE CAMIRI',
                data: [
                <?php foreach($obrasCamiri as $camiri): ?>
                    ['<?php echo $camiri['Cantidad'].' '.$camiri['obras'] ?>', <?php echo ($camiri['Cantidad']/$total_camiri) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'VICARIATO APOSTÓLICO DE ÑUFLO CHAVEZ',
                id: 'VICARIATO APOSTÓLICO DE ÑUFLO CHAVEZ',
                data: [
                <?php foreach($obrasChavez as $chavez): ?>
                    ['<?php echo $chavez['Cantidad'].' '.$chavez['obras'] ?>', <?php echo ($chavez['Cantidad']/$total_chavez) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'VICARIATO APOSTÓLICO DE PANDO',
                id: 'VICARIATO APOSTÓLICO DE PANDO',
                data: [
                <?php foreach($obrasPando as $pando): ?>
                    ['<?php echo $pando['Cantidad'].' '.$pando['obras'] ?>', <?php echo ($pando['Cantidad']/$total_pando) ?>],
                <?php endforeach ?>
                ]
                },{
                name: 'VICARIATO APOSTÓLICO DE REYES',
                id: 'VICARIATO APOSTÓLICO DE REYES',
                data: [
                <?php foreach($obrasReyes as $reyes): ?>
                    ['<?php echo $reyes['Cantidad'].' '.$reyes['obras'] ?>', <?php echo ($reyes['Cantidad']/$total_reyes) ?>],
                <?php endforeach ?>
                ]
                }
           ]
        }
    });
});

</script>      
 