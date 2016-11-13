

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Perfil de Obispos</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="<?php echo base_url(); ?>assets/imagenes/<?php echo $result->foto; ?>" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?php echo $result->nombre ?></h3>
                      <h3><?php echo $result->apellido ?></h3>

                      <ul class="list-unstyled user_data"><li><i class="fa fa-calendar user-profile-icon"></i><?php echo $result->fecha_nacimiento ?>
                        </li>

                        <li>
                          <i class="fa fa-phone user-profile-icon"></i> <?php echo $result->telefono ?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i> <?php echo $result->email ?>

                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-fax user-profile-icon"></i> <?php echo $result->fax ?>

                        </li>
                         <li class="m-top-xs">
                          <i class="fa fa-map-marker user-profile-icon"></i> <?php echo $result->ubicacion ?>

                        </li>

                      </ul>
                      <a href="<?php echo base_url(); ?>inicio" class="btn btn-danger" align="right"><i class="fa fa-mail-reply"></i> Atras</a>
                      <?php echo '<a href="'.base_url().'obispo/edit/'.$result->cod_obispo.'" class="btn btn-danger"><i class="fa fa-edit"></i> Editar Perfil </a>'; ?>
                    <a href="<?php echo base_url(); ?>obispo/pdf" class="btn btn-primary" align="right"><i class="fa fa-file-pdf-o"></i> Exportar a PDF</a>
                      <br />



                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <li class="m-top-xs">
                        <b>Ordenacion Sacerdotal  :</b>
                          <i class="fa fa-calendar user-profile-icon"></i> <?php echo $result->ordenacionSacerdotal ?>

                        </li>
                        <li class="m-top-xs">
                        <b>Ordenacion Episcopal  :</b>
                          <i class="fa fa-calendar user-profile-icon"></i> <?php echo $result->ordenacionEpiscopal ?>

                        </li>
                        <li class="m-top-xs">
                        <b>Lugar de Nacimiento   :</b>
                          <i class="fa fa-map-marker user-profile-icon"></i> <?php echo $result->lugarNacimiento ?>

                        </li>
                        <li class="m-top-xs">

                          <i class="fa fa-map-marker user-profile-icon"></i> <b>Biografia  :</b><?php echo $result->bibliografia ?>

                        </li>




                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
