

  <br><br>

  <div class="x_content">


<link rel="stylesheet" href="<?php echo base_url(); ?>assets/inicio/pagina/css/w3.css">
<!--<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/inicio/pagina/css/font-awesome.min.css">

<div class="clearfix"></div><br><br><br><br><br>
<div class="w3-content w3-margin-top" >

  <!-- The Grid -->
  <div class="w3-row-padding">
  <h1 align="center"><strong><?php echo $result->nombre ?></strong></h1><br>
    <!-- Left Column -->
    
    <div class="w3-quarter">
      <div class="w3-white w3-card-4">
        <div class="w3-container" align="justify"><br>
        <h2 class=" "><strong>DATOS GEOGRAFICOS</strong></h2><br>
        <h6 align="justify"><strong>Departamento: </strong><?php echo $result->departamento; ?></h6>
          <hr>
         <h6 align="justify"><strong>Provincia: </strong><?php echo $result->provincia; ?></h6>
         <hr>
         <h6 align="justify"><strong>Municipio: </strong><?php echo $result->municipio; ?></h6>
         <hr>
         <h6 align="justify"><strong>Localidad / Comunidad: </strong><?php echo $result->localidadComunidad; ?></h6>
         <hr>
          <h6 align="justify"><strong>Direccion: </strong><?php echo $result->direccion; ?></h6>
         <hr>
         <h6 align="justify"><strong>Telefono: </strong><?php echo $result->telefono_a; ?></h6>
          <hr>
        </div>
      </div><br>
      <div class="w3-white w3-card-4">
        <div class="w3-container" align="justify"><br>
        <h2 class=" "><strong>INFORMACION JURISDICCION</strong></h2><br>
        <h6 align="justify"><strong>Jurisdiccion: </strong><?php echo $result->cod_jurisdiccion; ?></h6>
          <hr>
         <h6 align="justify"><strong>Vicaria: </strong><?php echo $result->vicariaZonaPastoral; ?></h6>
         <hr>
         <h6 align="justify"><strong>Parroquia: </strong><?php echo $result->parroquia; ?></h6>
         <hr>
      </div>
      </div><br>
    </div>

    <!-- Right Column -->
    <div class="w3-half">
    
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
       <!-- <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Informacion</h2>-->
        <div class="w3-container">
          <h2 class=" "><strong>INFORMACION GENERAL</strong></h2><br>
         <h6 align="justify"><strong>Nombre: </strong><?php echo $result->nombre; ?></h6>
          <hr>
         <h6 align="justify"><strong>Sigla: </strong><?php echo $result->sigla; ?></h6>
         <hr>
         <h6 align="justify"><strong>Congregacion: </strong><?php echo $result->congregacion; ?></h6>
         <hr>
         <h6 align="justify"><strong>Poblacion Meta: </strong><?php echo $result->poblacionMeta; ?></h6>
         <hr>
        </div>
       
      </div>

    <!-- End Right Column -->
    </div>

    <div class="w3-quarter">
      
      <div class="w3-white w3-card-4">
        <div class="w3-container" align="justify"><br>
        <h2 class=" "><strong>RESPONSABLE OBRA</strong></h2><br>
        <h6 align="justify"><strong>Nombre: </strong><?php echo $result->nombre_obra; ?></h6>
          <hr>
         <h6 align="justify"><strong>Cargo: </strong><?php echo $result->cargo_obra; ?></h6>
         <hr>
         <h6 align="justify"><strong>Profesion: </strong><?php echo $result->profesion_obra; ?></h6>
         <hr>
         <h6 align="justify"><strong>Fecha: </strong><?php echo $result->fecha_obra; ?></h6>
         <hr>
         <h6 align="justify"><strong>Email: </strong><?php echo $result->email_obra; ?></h6>
         <hr>
         <h6 align="justify"><strong>Telefono: </strong><?php echo $result->telefono_obra; ?></h6>
         <hr>
      </div>
      </div><br>
    </div>
  <!-- End Grid -->
  </div>
  <a href="<?php echo base_url(); ?>#team" class="btn btn-danger btn-group-justified" align="right"><i class="fa fa-mail-reply"></i> Atras</a>
  <!-- End Page Container -->
</div>

