<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <!--<div class="title_left">
                <h3>Registro Usuario</h3>
              </div>-->
            </div>
            <?php #print_r($a); ?>
            <?php
              foreach ($a as $key ) {
                    $key->historia;
                    $key->administracion;
                    $key->cargo;
                    $key->curia;
                    $key->mapa;
                    $key->nombre;
                    $key->foto;
                    $key->ubicacion;
                    $key->email;
                    $key->bibliografia;
                    $key->telefono;
              }  ?>


            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-10 col-xs-12 col-md-offset-1 ">
                <div class="x_panel">

                  <div class="x_content" align="center">
                        <div class="bs-example" data-example-id="simple-jumbotron">

                          <div class="jumbotron">
                            <h3 align="center"><b>VICARIATO DE PANDO</b></h3>
                            <h3 align="left"><b>HISTORIA</b></h3>
                            <h4 align="justify"><?php echo $key->historia; ?></h4>
                            <h3 align="left"><b>ADMINISTRACION</b></h3
                            <h4 align="justify"><?php echo $key->administracion; ?></h4><br>

                            <div class="col-md-4 col-xs-12">

                                  <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="<?php echo base_url(); ?>assets/imagenes/<?php echo $key->mapa; ?>" alt="Avatar" title="Change the avatar">
                                  </div>
                                <h2><b><br></b></h2>
                                <h2><b>VICARIATO DE PANDO</b></h2>

                                </ul>
                              </div>
                                <div align="col-md-4 col-xs-12">
                                      <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive avatar-view" src="<?php echo base_url(); ?>assets/imagenes/<?php echo $key->foto; ?>" alt="Avatar" title="Change the avatar">
                                      </div>
                                    <h2><b><?php echo $key->nombre; ?></b><br>
                                    <?php echo $key->cargo; ?></h2>

                                    <br><br>
                                        <br><br>
                                </div>
                        <!-- end of skills -->
                      </div><a href="<?php echo base_url(); ?>buscar/pdf" class="btn btn-success" align="right"><i class="fa fa-edit m-right-xs"></i>EXPORTAR A PDF</a>

                    </div>
                </div><br>
