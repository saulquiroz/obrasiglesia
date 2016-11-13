<link rel="stylesheet" href="<?php echo base_url(); ?>assets/inicio/pagina/css/w3.css">
<!--<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/inicio/pagina/css/font-awesome.min.css">

<div class="clearfix"></div><br><br><br><br><br><br>
<div align="center">
<div class="w3-content w3-margin-top"  style="max-width:1400px;">

  <!-- The Grid -->

  <div class="w3-row-padding" >
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-card-4">
        <div class="w3-display-container">  

          <div align="center">
          <br>
          <h2 align="center"><strong><?php echo strtoupper($result->tipo) ?></strong> </h2>
          <img src="<?php echo base_url(); ?>assets/imagenes/<?php echo $result->foto; ?>"  alt="Avatar">
          </div>
        </div>
        <div class="w3-container" align="justify"><br>
            <h4 align="center"><strong><?php echo $result->nombre.' '.$result->apellido ?></strong></h4><br>
         <i class="fa fa-calendar fa-fw w3-margin-right w3-large "></i><strong>Fecha Nacimiento:</strong> <?php echo $result->fecha_nacimiento ?><br>
         <i class="fa fa-home fa-fw w3-margin-right w3-large "></i><strong>Ubicacion:</strong> <?php echo $result->ubicacion ?><br>
         <i class="fa fa-envelope fa-fw w3-margin-right w3-large "></i><strong>Email:</strong> <?php echo $result->email; ?><br>
         <i class="fa fa-phone fa-fw w3-margin-right w3-large "></i><strong>Telefono:</strong><?php echo $result->telefono; ?><br>
         <i class="fa fa-fax fa-fw w3-margin-right w3-large "></i><strong>Fax:</strong><?php echo $result->fax; ?><br>
          
          <hr>
        <a href="<?php echo base_url(); ?>#work" onclick="history.back()"  class="btn btn-danger btn-group-justified" align="right"><i class="fa fa-mail-reply"></i> Atras</a>
         <br>
          <br>
        </div>
      </div><br>
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
       <!-- <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Informacion</h2>-->
        <div class="w3-container">
          <h3 class=""><strong>BIOGRAFIA</strong></h3><br>
         <h6 align="justify"><?php echo $result->bibliografia ?></h6>
          <hr>
        </div>
        <div class="w3-container">
          <h3 class=""><strong>Ordenacion Sacerdotal</strong></h3>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $result->ordenacionSacerdotal ?></h6>
         
          <hr>
        </div>
        <div class="w3-container">
          <h3 class=""><strong>Ordenacion Episcopal</strong></h3>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $result->ordenacionEpiscopal ?></h6>
          <br><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
 </div> 
  <!-- End Page Container -->
</div>

