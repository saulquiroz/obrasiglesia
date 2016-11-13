
       <!-- page content
          /*  foreach ($usuario as $key ) {
                  $key->cod_usuario;
                  $key->nombre;
                  $key->apellido;
                  $key->fecha_nacimiento;
                  $key->telefono;
                  $key->email;
                  $key->tipo;
                  $key->username;
            }*/
          -->

       <div class="right_col" role="main">
                 <div class="">
                   <div class="page-title">
                     <!--<div class="title_left">
                       <h3>Registro Usuario</h3>
                     </div>-->

                   </div>
                   <div class="clearfix"></div>
                   <div class="row">
                     <div class="col-md-10 col-xs-12 col-md-offset-1 ">
                       <div class="x_panel">
                           <h2 align="center">Ingresar Nuevo Usuario </h2>

                           <?php if($custom_error == true){ ?>
                                       <div class="col-md-12 alert alert-danger" id="divInfo" style="padding: 1%;"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Ingrese los datos correctamente </div>
                                   <?php } ?>
                                   <?=@$error?>
                                   <span><?php #echo validation_errors('<div class="col-md-12 alert alert-danger" id="divInfo" style="padding: 1%;"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> ','</div>'); ?></span>

                           <div class="x_title"></div>
                           <ul class="nav navbar-right panel_toolbox">
                             <li><a class="collapse-link">Ocultar<i class="fa fa-chevron-up"></i></a>
                             </li>
                           </ul>
                        <div class="x_content" align="center">

                           <form class=" form-label-left input_mask" align="center" action="<?php echo base_url();?>usuario/do_upload" method="POST" enctype="multipart/form-data" >
                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">Nombre: </label>
                             <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                               <input type="text" name="nombre" class="form-control has-feedback-right"  placeholder=" Ingrese su Nombre" value="<?php echo set_value('nombre');?>">
                               <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                             <?php echo form_error('nombre')?>
                             </div><div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">Apellido: </label>
                             <div class="col-md-7 col-sm-7col-xs-12 form-group has-feedback">
                               <input type="text" name="apellido" class="form-control" placeholder="Ingrese su Apellido" value="<?php echo set_value('apellido');?>">
                               <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <?php echo form_error('apellido')?>
                             </div><div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">Carnet de Identidad: </label>
                             <div class="col-md-7 col-sm-7col-xs-12 form-group has-feedback">
                               <input type="number" name="ci" class="form-control" placeholder="Ingrese su Carnet" value="<?php echo set_value('ci');?>">
                               <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <?php echo form_error('ci')?>
                             </div><div class="clearfix"></div>

                               <label class="control-label col-md-1 col-md-offset-2  " for="first-name">Email:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <input type="email" name="email" class="form-control has-feedback-right" placeholder="Email" value="<?php echo set_value('email');?>">
                               <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                               <?php echo form_error('email')?>
                             </div><div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2  " for="first-name">Telefono:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <input type="number" name="telefono" class="form-control" placeholder="Telefono" value="<?php echo set_value('telefono');?>">
                               <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                             </div><div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Fecha Nacimiento:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <fieldset>
                                   <div class="controls">
                                       <input type="text" name="fecha_nac" class="form-control has-feedback-right" id="single_cal1" placeholder="Fecha Nacimiento" aria-describedby="inputSuccess2Status" value="<?php echo set_value('fecha_nac');?>">
                                       <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                       <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                   </div>
                               </fieldset>
                             </div> <div class="clearfix"></div>

                               <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Foto:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                   <input required="required" type="file" name="foto" class="form-control has-feedback-right" placeholder="foto">
                                   <span class="fa fa-image form-control-feedback right" aria-hidden="true"></span>
                                 </div><div class="clearfix"></div>

                               <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Username:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                   <input required="required" type="text" name="username" class="form-control has-feedback-right" id="inputSuccess2" placeholder="username" value="<?php echo set_value('username');?>">
                                   <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                   <?php echo form_error('username')?>
                                 </div><div class="clearfix"></div>

                                 <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Contraseña:</label>
                                  <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                     <input required="required" type="password" name="password" class="form-control has-feedback-right" id="inputSuccess2" placeholder="contraseña" value="<?php echo set_value('password');?>">
                                     <span class="fa fa-lock form-control-feedback right" aria-hidden="true"></span>
                                    <?php echo form_error('password')?>
                                 </div><div class="clearfix"></div>

                                 <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Tipo Usuario:</label>
                                  <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                     <!--<input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->
                                   <span class="fa fa-cog form-control-feedback right" aria-hidden="true"></span>
                                     <select id="tipo" name="tipo" class="form-control" required>
                                       <option value="<?php echo set_value('tipo');?>"></option>
                                       <option value="administrador">administrador</option>
                                       <option value="obispo">obispo</option>
                                       <option value="encargado">encargado de Jurisdiccion </option>
                                     </select>
                                     <?php echo form_error('tipo')?>
                                   </div><div class="clearfix"></div><br>
                                          <!--JOEL-->
                                   <div class="form-group">
                                     <div class="cold-md-12 col-sm-12 col-xs-12">
                                      <a class="btn btn-danger" href="<?php echo base_url(); ?>inicio"><i class="fa fa-mail-reply "></i> Anterior</a>
                                     <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Aceptar</button>
                                     </div>
                                   </div>
                                            <!--JOEL-->
                           </form>
                         </div>
                       </div>
