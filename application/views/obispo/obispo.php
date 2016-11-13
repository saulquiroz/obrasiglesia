


<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>

       <!-- page content -->
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
                           <h2 align="center">REGISTRAR OBISPO</h2>
                           <div class="x_title"></div>
                           <ul class="nav navbar-right panel_toolbox">
                             <li><a class="collapse-link">Ocultar<i class="fa fa-chevron-up"></i></a>
                             </li>
                           </ul>
                         <div class="x_content" align="center">
                           <small>Completar todos los campos</h3><br> <br>


                           <form class="form-label-left input_mask" align="center" action="<?php base_url();?>obispo/guardar" method="POST"  id="formObis">
                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">Buscar Nombre : </label>
                             <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                  <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                               <input id="nombre" required="required" type="text" name="nombre" class="form-control has-feedback-right"  placeholder="Ingrese su nombre " value="">
                               <input id="nombre_id" class="col-md-12" type="hidden" name="nombre_id" value=""  />
                             </div><div class="clearfix"></div>


                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">Ordenacion Sacerdotal: </label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <fieldset>
                                   <div class="controls">
                                       <input type="text" name="ordenacion_sacerdotal" class="form-control has-feedback-right" id="single_cal1" placeholder="Ingrese su Ordenacion Sacerdotal" aria-describedby="inputSuccess2Status">
                                       <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                       <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                   </div>
                               </fieldset>
                             </div> <div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">Ordenacion Episcopal: </label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <fieldset>
                                   <div class="controls">
                                       <input type="text" name="ordenacion_episcopal" class="form-control has-feedback-right" id="single_cal2" placeholder="Ingrese su Ordenacion Episcopal" aria-describedby="inputSuccess2Status">
                                       <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                       <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                   </div>
                               </fieldset>
                             </div> <div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2  " for="first-name">Lugar de Nacimiento:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <input required="required" id="lugar_nacimiento" type="text" name="lugar_nacimiento" class="form-control" placeholder="Ingrese su Lugar de Nacimiento">
                               <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                             </div><div class="clearfix"></div>


                               <label class="control-label col-md-1 col-md-offset-2  " for="first-name">Buscar Sede Episcopal:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                               <input id="sede" required="required" type="text" name="sede" class="form-control has-feedback-right"  placeholder="Ingrese las primeras palabras de su Sede Episcopal" value="">
                               <input id="sede_id" class="col-md-12" type="hidden" name="sede_id" value=""  />
                             </div><div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2  " for="first-name">Fax:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <input required="required" type="number" name="fax" class="form-control" placeholder="Ingrese su Fax">
                               <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                             </div><div class="clearfix"></div>

                             <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Ubicacion:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <input required="required" type="text" name="ubicacion" class="form-control" placeholder="Ingrese su Ubicacion">
                               <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                             </div><div class="clearfix"></div>


                               <label class="control-label col-md-1 col-md-offset-2" for="first-name">Buscar Tipo - Cargo: </label>
                               <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                    <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                                 <input id="tipo_cargo" required="required" type="text" name="tipo_cargo" class="form-control has-feedback-right"  placeholder=" Ingrese las primeras palabras de su cargo" value="">
                                 <input id="tipo_cargo_id" class="col-md-12" type="hidden" name="tipo_cargo_id" value=""  />
                               </div><div class="clearfix"></div>

                                 <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Bibliografia:</label>
                                  <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                     <!--<input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->
                                   <textarea  type="text" class="form-control" rows="5" name="bibliografia" placeholder="Text input">
                                   </textarea>
                                   </div><div class="clearfix"></div><br>

                             <div class="form-group">
                               <div class="cold-md-12 col-sm-12 col-xs-12">
                                <a class="btn btn-danger" href="<?php echo base_url(); ?>inicio"><i class="fa fa-mail-reply "></i> Anterior</a>
                               <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Aceptar</button>
                               </div>
                             </div>
                           </form>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
      $("#nombre").autocomplete({
            source: "<?php echo base_url(); ?>obispo/buscarObispoNombre",
            minLength: 1,
            select: function( event, ui ) {
                 $("#nombre_id").val(ui.item.id);
            }
      });
    /*  $("#ci").autocomplete({
            source: "<?php echo base_url(); ?>obispo/buscarCi",
            minLength: 1,

            select: function( event, ui ) {
                 $("#ci_id").val(ui.item.id);
            }
      });*/

      $("#sede").autocomplete({
            source: "<?php echo base_url(); ?>obispo/buscarSede",
            minLength: 1,
            select: function( event, ui ) {
                 $("#sede_id").val(ui.item.id);
            }
      });

      $("#tipo_cargo").autocomplete({
            source: "<?php echo base_url(); ?>obispo/buscarTipoCargo",
            minLength: 1,
            select: function( event, ui ) {
                 $("#tipo_cargo_id").val(ui.item.id);
            }
      });
});

</script>
