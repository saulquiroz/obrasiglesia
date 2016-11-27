<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div class="right_col" role="main">

	<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
</div>


	<script>
		$(function () {
		    Highcharts.chart('container', {
		        chart: {
		            type: 'line'
		        },
		        title: {
		            text: 'Porcentaje de obras por areas rurales y urbanas'
		        },
		        subtitle: {
		            text: 'Obras Iglesia'
		        },
		        xAxis: {
		            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
		        },
		        yAxis: {
		            title: {
		                text: 'Porcentaje',
		            }
		        },
		        plotOptions: {
		            line: {
		                dataLabels: {
		                    enabled: true
		                },
		                enableMouseTracking: false
		            }
		        },
		        series: [{
		            name: 'Urbana',
		            data: [		            
		            <?php 
		            foreach ($enero as $ene ){
		            	  if ($ene['areaDeAccion']==0){   
		            	    echo $ene['Cantidad'].',';
		            	  }   
		            }	
		            foreach ($febrero as $feb ) {
		            	  if ($feb['areaDeAccion']==0){   
		            	    echo $feb['Cantidad'].',';
		            	  }   
		            }
		            foreach ($marzo as $mar ) {
		            	  if ($mar['areaDeAccion']==0){   
		            	    echo $mar['Cantidad'].',';
		            	  }   
		            }
		            foreach ($abril as $abri ) {
		            	  if ($abri['areaDeAccion']==0){   
		            	    echo $abri['Cantidad'].',';
		            	  }   
		            }
		            foreach ($mayo as $may ) {
		            	  if ($may['areaDeAccion']==0){   
		            	    echo $may['Cantidad'].',';
		            	  }   
		            }
		            foreach ($junio as $jun ) {
		            	  if ($jun['areaDeAccion']==0){   
		            	    echo $jun['Cantidad'].',';
		            	  }   
		            }
		            foreach ($julio as $jul ) {
		            	  if ($jul['areaDeAccion']==0){   
		            	    echo $jul['Cantidad'].',';
		            	  }   
		            }
		            foreach ($agosto as $ago ) {
		            	  if ($ago['areaDeAccion']==0){   
		            	    echo $ago['Cantidad'].',';
		            	  }   
		            }
		            foreach ($septiembre as $sep ) {
		            	#  if ($sep['areaDeAccion']==0){   
		            	    echo $sep['Cantidad'].',';
		            	#  }   
		            }
		            foreach ($octubre as $oct ) {
		            	 # if ($oct['areaDeAccion']==0){   
		            	    echo $oct['Cantidad'].',';
		            	 # }   
		            }
		            foreach ($noviembre as $nov ) {
		            	 # if ($nov['areaDeAccion']==0){   
		            	    echo $nov['Cantidad'].',';
		            	 # }   
		            }
		            foreach ($diciembre as $dic ) {
		            	 # if ($dic['areaDeAccion']==0){   
		            	    echo $dic['Cantidad'].',';
		            	 # }   
		            }		             	           
		            ?>]
		        }, {
		            name: 'Rural',
		            data: [
		            <?php 
		            	 foreach ($enero as $ene ){
		            	  if ($ene['areaDeAccion']==1){   
		            	    echo $ene['Cantidad'].',';
		            	  }   
		            }	
		            foreach ($febrero as $feb ) {
		            	  if ($feb['areaDeAccion']==1){   
		            	    echo $feb['Cantidad'].',';
		            	  }   
		            }
		            foreach ($marzo as $mar ) {
		            	  if ($mar['areaDeAccion']==1){   
		            	    echo $mar['Cantidad'].',';
		            	  }   
		            }
		            foreach ($abril as $abri ) {
		            	  if ($abri['areaDeAccion']==1){   
		            	    echo $abri['Cantidad'].',';
		            	  }   
		            }
		            foreach ($mayo as $may ) {
		            	  if ($may['areaDeAccion']==1){   
		            	    echo $may['Cantidad'].',';
		            	  }   
		            }
		            foreach ($junio as $jun ) {
		            	  if ($jun['areaDeAccion']==1){   
		            	    echo $jun['Cantidad'].',';
		            	  }   
		            }
		            foreach ($julio as $jul ) {
		            	  if ($jul['areaDeAccion']==1){   
		            	    echo $jul['Cantidad'].',';
		            	  }   
		            }
		            foreach ($agosto as $ago ) {
		            	  if ($ago['areaDeAccion']==1){   
		            	    echo $ago['Cantidad'].',';
		            	  }   
		            }
		            foreach ($septiembre as $sep ) {
		            	  if ($sep['areaDeAccion']==1){   
		            	    echo $sep['Cantidad'].',';
		            	  }   
		            }
		            foreach ($octubre as $oct ) {
		            	  if ($oct['areaDeAccion']==1){   
		            	    echo $oct['Cantidad'].',';
		            	  }   
		            }
		            foreach ($noviembre as $nov ) {
		            	  if ($nov['areaDeAccion']==1){   
		            	    echo $nov['Cantidad'].',';
		            	  }   
		            }
		            foreach ($diciembre as $dic ) {
		            	  if ($dic['areaDeAccion']==1){   
		            	    echo $dic['Cantidad'].',';
		            	  }   
		            }
		            ?>
		            ]
		        }]
		    });
		});
		</script>
