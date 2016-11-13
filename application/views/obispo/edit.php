<?php echo form_open('obispo/update', 'role="form"'); ?>

<div class="right_col" role="main">
                 <div class="">
                   <div class="page-title">
                 
                   </div>
                   <div class="clearfix"></div>
                   <div class="row">
                     <div class="col-md-10 col-xs-12 col-md-offset-1 ">
                       <div class="x_panel">
                           <h2 align="center">Editar Datos de Obispo</h2>

                           <?php if($custom_error == true){ ?>
                                       <div class="col-md-12 alert alert-danger" id="divInfo" style="padding: 1%;"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Ingrese los datos correctamente </div>
                                   <?php } ?>
                                   <?=@$error?>
                                   <span><?php #echo validation_errors('<div class="col-md-12 alert alert-danger" id="divInfo" style="padding: 1%;"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> ','</div>'); ?></span>

                           <div class="x_title"></div>
                         
                        <div class="x_content" align="center">

                           <form class=" form-label-left input_mask" align="center" action="<?php echo base_url();?>usuario/edit" method="POST" enctype="multipart/form-data" >
                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">Biografia: </label>
                             <div class="ccol-md-7 col-sm-7 col-xs-12  form-group has-feedback">

                              <textarea class="form-control has-feedback-right" rows="5" type="text" id="bibliografia" name="bibliografia" value="<?php echo $bibliografia ?>">

                              </textarea>
                               <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                             <?php echo form_error('bibliografia')?>
                             </div><div class="clearfix"></div>




                                
                                     
                              
                                   
                             


                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">Fax: </label>
                             <div class="col-md-7 col-sm-7col-xs-12 form-group has-feedback">
                              <input class="form-control" type="text" id="fax" name="fax" value="<?php echo $fax ?>">
                              
                               <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <?php echo form_error('fax')?>
                             </div><div class="clearfix"></div>

                           

                               <label class="control-label col-md-1 col-md-offset-2  " for="first-name">Ubicacion:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <input class="form-control" type="text" id="ubicacion" name="ubicacion" value="<?php echo $ubicacion ?>">
                               <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                               <?php echo form_error('ubicacion')?>
                             </div><div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">lugarNacimiento: </label>
                             <div class="col-md-7 col-sm-7col-xs-12 form-group has-feedback">
                              <input class="form-control" type="text" id="lugarNacimiento" name="lugarNacimiento" value="<?php echo $lugarNacimiento ?>">
                              
                               <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <?php echo form_error('lugarNacimiento')?>
                             </div><div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Ordenacion Sacerdotal:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <fieldset>
                                   <div class="controls">
                                    <input class="form-control has-feedback-right" type="text" id="ordenacionSacerdotal" name="ordenacionSacerdotal" value="<?php echo $ordenacionSacerdotal ?>">
                                       <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                       <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                   </div>
                               </fieldset>
                             </div> <div class="clearfix"></div>



                             <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Ordenacion Episcopal:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <fieldset>
                                   <div class="controls">
                                    <input class="form-control has-feedback-right" type="text" id="ordenacionEpiscopal" name="ordenacionEpiscopal" value="<?php echo $ordenacionEpiscopal ?>">
                                       <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                       <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                   </div>
                               </fieldset>
                             </div> <div class="clearfix"></div>

                             

                               





                                 <br>

                             <div class="form-group">
                               <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-1">
                               <input type="hidden" name="cod_obispo" value="<?php echo $cod_obispo ?>" />
                                <input type="submit" name="mit" class="btn btn-primary" value="Guardar">
                                <button type="button" onclick="location.href='<?php echo site_url('lista_obispo') ?>'" class="btn btn-success">Atras</button>

                  
                                 
                               </div>
                             </div>

                           </form>
                         </div>
                       </div>
            <?php echo form_close(); ?>