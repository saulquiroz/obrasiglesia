<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div class="right_col" role="main">
<?php 
foreach ($enero as $ene) {
	$ene['tipo'];
	$ene['c'];
} 
foreach ($febrero as $feb) {
	$feb['tipo'];
	$feb['c'];
} 
foreach ($marzo as $mar) {
	$mar['tipo'];
	$mar['c'];
} 
foreach ($abril as $abri) {
	$abri['tipo'];
	$abri['c'];
} 
foreach ($mayo as $may) {
	$may['tipo'];
	$may['c'];
} 
foreach ($junio as $jun) {
	$jun['tipo'];
	$jun['c'];
} 
foreach ($julio as $jul) {
	$jul['tipo'];
	$jul['c'];
} 
foreach ($agosto as $ago) {
	$ago['tipo'];
	$ago['c'];
} 
foreach ($septiembre as $sep) {
	$sep['tipo'];
	$sep['c'];
} 
foreach ($octubre as $oct) {
	$oct['tipo'];
	$oct['c'];
} 
foreach ($noviembre as $nov) {
	$nov['tipo'];
	$nov['c'];
} 
foreach ($diciembre as $dic) {
	$dic['tipo'];
	$dic['c'];
} 

?>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
</div>
<!--
, {
            name: 'New York',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Berlin',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, {
            name: 'London',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }
-->
<script>
	$(function () {
    Highcharts.chart('container', {
        title: {
            text: 'Cantidad de obras.',
            x: -20 //center
        },
        subtitle: {
            text: 'Mostrar el año, mes',
            x: -20
        },
        xAxis: {
            categories: ['<b>Enero<b> <?php echo '<br>'.$ene['tipo'] ?>', '<b>Febrero <?php echo '<br>'.$feb['tipo'] ?> ', '<b>Marzo <?php echo '<br>'.$mar['tipo'] ?>', '<b>Abril <?php echo '<br>'.$abri['tipo'] ?>', '<b>Mayo <?php echo '<br>'.$may['tipo'] ?>', '<b>Junio <?php echo '<br>'.$jun['tipo'] ?>',
                '<b>Julio <?php echo '<br>'.$jul['tipo'] ?>', 'Agosto <?php echo '<br>'.$ago['tipo'] ?>', '<b>Septiembre <?php echo '<br>'.$sep['tipo'] ?>', '<b>Octubre <?php echo '<br>'.$oct['tipo'] ?>', '<b>Noviembre <?php echo '<br>'.$nov['tipo'] ?>', '<b>Diciembre <?php echo '<br>'.$dic['tipo'] ?>']
        },
        yAxis: {
            title: {
                text: 'Total'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '  , Año <?php echo date('Y') ?>'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0,
            id: 'asdasd'
        },
        series: [{
            name: '<b>Cantidad ',
            data: [
            <?php 
            	 id: 'asd';
          			 foreach ($enero as $ene ){		            	    
		            	    echo $ene['c'].',';
		            	    
		            }	
		            foreach ($febrero as $feb ) {
		            	    
		            	    echo $feb['c'].',';
		            	    
		            }
		            foreach ($marzo as $mar ) {
		            	    
		            	    echo $mar['c'].',';
		            	    
		            }
		            foreach ($abril as $abri ) {
		            	     
		            	    echo $abri['c'].',';
		            	    
		            }
		            foreach ($mayo as $may ) {
		            	    
		            	    echo $may['c'].',';
		            	    
		            }
		            foreach ($junio as $jun ) {
		            	    
		            	    echo $jun['c'].',';
		            	    
		            }
		            foreach ($julio as $jul ) {
		            	    
		            	    echo $jul['c'].',';
		            	    
		            }
		            foreach ($agosto as $ago ) {
		            	    
		            	    echo $ago['c'].',';
		            	    
		            }
		            foreach ($septiembre as $sep ) {
		            	#    
		            	    echo $sep['c'].',';
		            	#    
		            }
		            foreach ($octubre as $oct ) {
		            	 #   
		            	    echo $oct['c'].',';
		            	 #   
		            }
		            foreach ($noviembre as $nov ) {
		            	 #   
		            	    echo $nov['c'].',';
		            	 #   
		            }
		            foreach ($diciembre as $dic ) {
		            	 #   
		            	    echo $dic['c'].',';
		            	 #   
		            }		   
             ?>

            ]
        }]
    });
});
</script>