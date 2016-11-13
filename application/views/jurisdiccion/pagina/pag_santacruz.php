

  <br><br>

  <div class="x_content">

    <?php foreach ($jurisdiccion as $key) {
        $key->sede;
        $key->mapa;
        $key->historia;
        $key->ereccion;       
        $key->territorio;
        $key->administracion;
        $key->curia;
        
    } ?>


<link rel="stylesheet" href="<?php echo base_url(); ?>assets/inicio/pagina/css/w3.css">
<!--<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/inicio/pagina/css/font-awesome.min.css">

<div class="clearfix"></div><br><br><br><br><br>
<div class="w3-content w3-margin-top" >

  <!-- The Grid -->
  <div class="w3-row-padding">
  <h1 align="center"><strong><?php echo $key->sede ?></strong></h1><br>
    <!-- Left Column -->
    
    <div class="w3-quarter">
      
      <?php foreach ($jurisdiccion as $obispos) {?>
      <div class="w3-white w3-card-4">
        <div class="w3-display-container">  
          <div align="center">
          <br>
          <span class="w3-tag w3-bonito"><h4 align="center"><strong><?php echo strtoupper($obispos->descripcion) ?></strong> </h4></span><br><br>
          <img src="<?php echo base_url(); ?>assets/imagenes/<?php echo $obispos->foto; ?>"  alt="Avatar">
          </div>
        </div>
        <div class="w3-container" align="justify"><br>
            <h4 align="center"><strong><?php echo $obispos->nombre.' '.$obispos->apellido ?></strong></h4><br>
         <i class="fa fa-calendar fa-fw w3-margin-right w3-large "></i><strong>Fecha Nacimiento:</strong> <?php echo $obispos->fecha_nacimiento ?><br>
         <i class="fa fa-home fa-fw w3-margin-right w3-large "></i><strong>Ubicacion:</strong> <?php echo $obispos->ubicacion ?><br>
         <i class="fa fa-envelope fa-fw w3-margin-right w3-large "></i><strong>Email:</strong> <?php echo $obispos->email; ?><br>
         <i class="fa fa-phone fa-fw w3-margin-right w3-large "></i><strong>Telefono:</strong><?php echo $obispos->telefono; ?><br>
         <i class="fa fa-fax fa-fw w3-margin-right w3-large "></i><strong>Fax:</strong><?php echo $obispos->fax; ?><br>
          
          <hr>
     
        </div>
      </div><br>
      <?php  } ?>
    </div>

    <!-- Right Column -->
    <div class="w3-half">
    
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
       <!-- <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Informacion</h2>-->
        <div class="w3-container">
          <h3 class=""><strong>HISTORIA</strong></h3><br>
         <h6 align="justify"><?php echo $key->historia; ?></h6>
          <hr>
        </div>
        <div class="w3-container">
          <h3 class=""><strong>ERECCION</strong></h3><br>
         <h6 align="justify"><?php echo $key->ereccion; ?></h6>
          <hr>
        </div>
        <div class="w3-container">
          <h3 class=""><strong>TERRITORIO</strong></h3><br>
         <h6 align="justify"><?php echo $key->territorio; ?></h6>
          <hr>
        </div>
      </div>

    <!-- End Right Column -->
    </div>

    <div class="w3-quarter">
              
      <div class="w3-white w3-card-4">
        <div class="w3-display-container">  
          <div align="center">
          <br>
          <span class="w3-tag w3-bonito"><h4 align="center"><strong><?php echo "MAPA" ?></strong> </h4></span><br>
          <img src="<?php echo base_url(); ?>assets/imagenes/<?php echo $key->mapa; ?>" alt="Avatar"><br><br>
          </div>
        </div>
      </div><br><br>
      <div class="w3-white w3-card-4">
        <div class="w3-display-container">  
          <div align="center">
          <br>
          <span class="w3-tag w3-bonito"><h4 align="center"><strong><?php echo "CURIA" ?></strong> </h4></span><br>
          <h6 align="center"><?php echo $key->curia; ?></h6><br>
          </div>
        </div>
      </div>
    </div>
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

