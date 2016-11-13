

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Perfil de Usuario</h3>
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

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i><?php echo $result->fecha_nacimiento ?>
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $result->telefono ?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i> <?php echo $result->email ?>

                        </li>
                      </ul>
                      <?php echo '<a href="'.base_url().'usuario/edit/'.$result->cod_usuario.'" class="btn btn-danger"><i class="fa fa-edit"></i> Editar Perfil </a>'; ?>

                    <a href="<?php echo base_url(); ?>usuario/pdf" class="btn btn-primary" align="right"><i class="fa fa-file-pdf-o"></i> Expotar a PDF</a>

                      <br />



                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <h1 align="center"><strong>ACTIVIDAD DEL USUARIO</strong></h1><br><br>

                      <ul class="list-unstyled user_data">
                        <li>
                          <p><strong>TIEMPO DE CONEXION</strong></p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                        <li>
                          <p><strong>OBRAS REGISTRADAS</strong></p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                          </div>
                        </li>
                        <li>
                          <p><strong>OBRAS ACTUALIZADAS</strong></p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                          </div>
                        </li>
                        <li>
                          <p><strong>OBRAS ELIMINADAS</strong></p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="400"></div>
                          </div>
                        </li>
                      </ul>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
