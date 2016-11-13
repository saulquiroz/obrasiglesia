<?php echo form_open('usuario/update', 'role="form"'); ?>

<div class="right_col" role="main">
                 <div class="">
                   <div class="page-title">

                   </div>
                   <div class="clearfix"></div>
                   <div class="row">
                     <div class="col-md-10 col-xs-12 col-md-offset-1 ">
                       <div class="x_panel">
                           <h2 align="center">Editar Datos de Usuario</h2>

                           <?php if($custom_error == true){ ?>
                                       <div class="col-md-12 alert alert-danger" id="divInfo" style="padding: 1%;"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Ingrese los datos correctamente </div>
                                   <?php } ?>
                                   <?=@$error?>
                                   <span><?php #echo validation_errors('<div class="col-md-12 alert alert-danger" id="divInfo" style="padding: 1%;"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> ','</div>'); ?></span>

                           <div class="x_title"></div>

                        <div class="x_content" align="center">

                           <form class=" form-label-left input_mask" align="center" action="<?php echo base_url();?>usuario/edit" method="POST" enctype="multipart/form-data" >
                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">Nombre: </label>
                             <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">

                              <input class="form-control has-feedback-right" type="text" id="nombre" name="nombre" value="<?php echo $nombre ?>">


                               <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                             <?php echo form_error('nombre')?>
                             </div><div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">Apellido: </label>
                             <div class="col-md-7 col-sm-7col-xs-12 form-group has-feedback">
                              <input class="form-control" type="text" id="apellido" name="apellido" value="<?php echo $apellido ?>">

                               <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <?php echo form_error('apellido')?>
                             </div><div class="clearfix"></div>



                               <label class="control-label col-md-1 col-md-offset-2  " for="first-name">Email:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <input class="form-control" type="text" id="email" name="email" value="<?php echo $email ?>">
                               <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                               <?php echo form_error('email')?>
                             </div><div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2  " for="first-name">Telefono:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <input class="form-control" type="text" id="telefono" name="telefono" value="<?php echo $telefono ?>">
                               <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                             </div><div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Fecha Nacimiento:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <fieldset>
                                   <div class="controls">
                                    <input class="form-control has-feedback-right" type="text" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento ?>">
                                       <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                       <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                   </div>
                               </fieldset>
                             </div> <div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Foto:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                   <input required="required" type="file" name="foto" class="form-control has-feedback-right" id="foto" value="<?php echo $foto ?>"><?php echo $foto ?></input>

                                   <span class="fa fa-image form-control-feedback right" aria-hidden="true"></span>
                                 </div><div class="clearfix"></div>

                               <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Username:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input required="required" type="text" name="username" class="form-control has-feedback-right" id="username" value="<?php echo $username ?>">

                                   <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                   <?php echo form_error('username')?>
                                 </div><div class="clearfix"></div>

                                 <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Contraseña:</label>
                                  <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                     <input required="required" type="text" name="password" class="form-control has-feedback-right" id="upassword" value="<?php echo $password ?>">
                                     <span class="fa fa-lock form-control-feedback right" aria-hidden="true"></span>
                                    <?php echo form_error('password')?>
                                 </div><div class="clearfix"></div>


                                 <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Tipo Usuario:</label>
                                  <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                     <!--<input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->
                                   <span class="fa fa-cog form-control-feedback right" aria-hidden="true"></span>
                                     <select id="tipo" name="tipo" class="form-control" required="required">
                                       <option value="<?php echo $tipo ?>"><?php echo $tipo ?></option>
                                       <option value="administrador">administrador</option>
                                       <option value="obispo">obispo</option>
                                       <option value="encargado">encargado de Jurisdiccion </option>
                                     </select>
                                     <?php echo form_error('tipo')?>
                                   </div><div class="clearfix"></div><br>

                             <div class="form-group">
                               <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-1">
                               <input type="hidden" name="cod_usuario" value="<?php echo $cod_usuario ?>" />
                                <input type="submit" name="mit" class="btn btn-primary" value="Guardar">
                                <button type="button" onclick="location.href='<?php echo site_url('editar') ?>'" class="btn btn-danger">Volver Atras</button>



                               </div>
                             </div>

                           </form>
                         </div>
                       </div>
            <?php echo form_close(); ?>
