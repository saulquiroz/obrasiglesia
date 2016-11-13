
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
                           <h2 align="center">REGISTRAR JURISDICCION</h2>
                           <?php if($custom_error == true){ ?>
                                       <div class="col-md-12 alert alert-danger" id="divInfo" style="padding: 1%;"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Ingrese los datos correctamente </div>
                                   <?php } ?>
                           <div class="x_title"></div>
                           <ul class="nav navbar-right panel_toolbox">
                             <li><a class="collapse-link">Ocultar<i class="fa fa-chevron-up"></i></a>
                             </li>
                           </ul>
                         <div class="x_content" align="center">
                           <small>Completar todos los campos</h3><br> <br>


                             <form class=" form-label-left input_mask" align="center" action="<?php echo base_url();?>jurisdiccion/guardar" method="POST" enctype="multipart/form-data" >

                             <label class="control-label col-md-2 col-md-offset-1  " for="first-name">Buscar Sede Episcopal:</label>
                              <div class="col-md-8 col-sm-7 col-xs-12 form-group has-feedback">
                                <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                                <input id="sede" required="required" type="text" name="sede" class="form-control has-feedback-right"  placeholder="Ingrese las primeras palabras de su Sede Episcopal" value="">
                                <input id="sede_id" class="col-md-12" type="hidden" name="sede_id" value=""  />
                                <?php echo form_error('sede_id')?>
                              </div><div class="clearfix"></div>
                              <label class="control-label col-md-2 col-md-offset-1 " for="first-name">Cargo:</label>
                              <div class="col-md-8 col-sm-7 col-xs-12 form-group has-feedback">
                                <input required="required" type="text" name="cargo" class="form-control" placeholder="Ingrese el Cargo">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                <?php echo form_error('cargo')?>
                              </div><div class="clearfix"></div>
                              <label class="control-label col-md-2 col-md-offset-1 " for="first-name">Foto:</label>
                               <div class="col-md-8 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input required="required" type="file" name="foto" class="form-control has-feedback-right" placeholder="foto">
                                  <span class="fa fa-image form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                               <label class="control-label col-md-2 col-md-offset-1" for="first-name">Buscar Obispo Oficial: </label>
                                   <div class="col-md-5 col-sm-7 col-xs-12  form-group ">
                                     <input id="oficial" required="required" type="text" name="oficial" class="form-control has-feedback-right"  placeholder="Ingrese el nombre del Obispo" value="">
                                     <input id="oficial_id" class="col-md-12" type="hidden" name="obispoa[]" />
                                     <?php echo form_error('oficial_id')?>
                                   </div>
                                    <div class="col-md-3 col-sm-7 col-xs-12 form-group has-feedback">
                                       <!--<input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->
                                       <select id="tipo" required="required" name="obispoa[]" class="form-control" >
                                         <option value="<?php echo set_value('tipo'); ?>"> <?php echo set_value('tipo'); ?></option>
                                         <option value="oficial">Obispo Oficial</option>
                                         <option value="auxiliar">Obispo Auxiliar</option>
                                         <option value="emerito">Obispo Emerito</option>
                                       </select>
                                       <?php echo form_error('tipo_obispo')?>
                                     </div><div class="clearfix"></div><br>

                                     <label class="control-label col-md-2 col-md-offset-1" for="first-name">Buscar Obispo: </label>
                                         <div class="col-md-5 col-sm-7 col-xs-12  form-group ">

                                           <input id="auxiliar2"  type="text" name="auxiliar2" class="form-control has-feedback-right"  placeholder="Ingrese el nombre del Obispo" value="">
                                           <input id="auxiliar2_id" class="col-md-12" type="hidden" name="obispoa[]" value=""  />
                                           <?php echo form_error('auxiliar2')?>
                                         </div>
                                          <div class="col-md-3 col-sm-7 col-xs-12 form-group has-feedback">
                                             <!--<input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->
                                             <select id="tipo"  name="obispoa[]" class="form-control" >
                                               <option value="<?php echo set_value('tipo'); ?>"> <?php echo set_value('tipo'); ?></option>
                                               <option value="auxiliar">Obispo Auxiliar</option>
                                               <option value="emerito">Obispo Emerito</option>
                                             </select>
                                             <?php echo form_error('tipo_obispo')?>
                                           </div><div class="clearfix"></div><br>
                                           <label class="control-label col-md-2 col-md-offset-1" for="first-name">Buscar Obispo: </label>
                                               <div class="col-md-5 col-sm-7 col-xs-12  form-group ">

                                                 <input id="auxiliar1"  type="text" name="auxiliar1" class="form-control has-feedback-right"  placeholder="Ingrese el nombre del Obispo" value="">
                                                 <input id="auxiliar1_id" class="col-md-12" type="hidden" name="obispoa[]" value=""  />
                                                 <?php echo form_error('auxiliar1')?>
                                               </div>
                                                <div class="col-md-3 col-sm-7 col-xs-12 form-group has-feedback">
                                                   <!--<input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->
                                                 <select id="tipo" name="obispoa[]" class="form-control" >
                                                     <option value="<?php echo set_value('tipo'); ?>"> <?php echo set_value('tipo'); ?></option>
                                                     <option value="auxiliar">Obispo Auxiliar</option>
                                                     <option value="emerito">Obispo Emerito</option>
                                                   </select>
                                                   <?php echo form_error('tipo_obispo')?>
                                                 </div><div class="clearfix"></div><br>
                                                 <label class="control-label col-md-2 col-md-offset-1" for="first-name">Buscar Obispo : </label>
                                                     <div class="col-md-5 col-sm-7 col-xs-12  form-group ">

                                                       <input id="auxiliar3" type="text" name="auxiliar3" class="form-control has-feedback-right"  placeholder="Ingrese el nombre del Obispo" value="">
                                                       <input id="auxiliar3_id" class="col-md-12" type="hidden" name="obispoa[]" value=""  />
                                                       <?php echo form_error('auxiliar3_id')?>
                                                     </div>
                                                      <div class="col-md-3 col-sm-7 col-xs-12 form-group has-feedback">
                                                         <!--<input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->
                                                         <select id="tipo" name="obispoa[]" class="form-control" >
                                                           <option value="<?php echo set_value('tipo'); ?>"> <?php echo set_value('tipo'); ?></option>
                                                           <option value="auxiliar">Obispo Auxiliar</option>
                                                           <option value="emerito">Obispo Emerito</option>
                                                         </select>
                                                         <?php echo form_error('tipo_obispo')?>
                                                       </div><div class="clearfix"></div><br>

                             <!--<label class="control-label col-md-2 col-md-offset-1" for="first-name">Buscar Obispo Auxiliar: </label>
                             <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                  <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                               <input id="auxiliar1" type="text" name="auxiliar1" class="form-control has-feedback-right"  placeholder="Ingrese el nombre del Obispo" value="">
                               <input id="auxiliar1_id" class="col-md-12" type="hidden" name="auxiliar1_id" value=""  />
                             </div><div class="clearfix"></div>
                             <label class="control-label col-md-2 col-md-offset-1" for="first-name">Buscar Obispo Auxiliar: </label>
                             <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                  <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                               <input id="auxiliar2" type="text" name="auxiliar2" class="form-control has-feedback-right"  placeholder="Ingrese el nombre del Obispo" value="">
                               <input id="auxiliar2_id" class="col-md-12" type="hidden" name="auxiliar2_id" value=""  />
                             </div><div class="clearfix"></div>
                             <label class="control-label col-md-2 col-md-offset-1" for="first-name">Buscar Obispo Auxiliar: </label>
                             <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                  <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                               <input id="auxiliar3" type="text" name="auxiliar3" class="form-control has-feedback-right"  placeholder="Ingrese el nombre del Obispo" value="">
                               <input id="auxiliar3_id" class="col-md-12" type="hidden" name="auxiliar3_id" value=""  />
                             </div><div class="clearfix"></div>
                             <label class="control-label col-md-2 col-md-offset-1" for="first-name">Buscar Obispo Auxiliar: </label>
                             <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                  <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                               <input id="auxiliar4" type="text" name="auxiliar4" class="form-control has-feedback-right"  placeholder="Ingrese el nombre del Obispo" value="">
                               <input id="auxiliar4_id" class="col-md-12" type="hidden" name="auxiliar4_id" value=""  />
                             </div><div class="clearfix"></div>
                             <!--<label class="control-label col-md-1 col-md-offset-2" for="first-name">Buscar Obispo Emerito 1: </label>
                             <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                  <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                               <input id="oficial" required="required" type="text" name="oficial" class="form-control has-feedback-right"  placeholder="Ingrese el nombre del Obispo" value="">
                               <input id="oficial_id" class="col-md-12" type="hidden" name="oficial_id" value=""  />
                             </div><div class="clearfix"></div>
                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">Buscar Obispo Emerito 2: </label>
                             <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                  <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                               <input id="oficial" required="required" type="text" name="oficial" class="form-control has-feedback-right"  placeholder="Ingrese el nombre del Obispo" value="">
                               <input id="oficial_id" class="col-md-12" type="hidden" name="oficial_id" value=""  />
                             </div><div class="clearfix"></div>
                             <label class="control-label col-md-1 col-md-offset-2" for="first-name">Buscar Obispo Emerito 3: </label>
                             <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                  <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                               <input id="oficial" required="required" type="text" name="oficial" class="form-control has-feedback-right"  placeholder="Ingrese el nombre del Obispo" value="">
                               <input id="oficial_id" class="col-md-12" type="hidden" name="oficial_id" value=""  />
                             </div><div class="clearfix"></div><div class="clearfix"></div>-->


                             <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Historia:</label>
                              <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">

                               <textarea  type="text" class="form-control" rows="5" name="historia" placeholder="Text input">
                               </textarea>
                              </div><div class="clearfix"></div><br>
                              <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Ereccion:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                 <textarea  type="text" class="form-control" rows="5" name="ereccion" placeholder="Text input">
                                 </textarea>
                              </div><div class="clearfix"></div><br>
                              <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Territorio:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                 <textarea  type="text" class="form-control" rows="5" name="territorio" placeholder="Text input">
                                 </textarea>
                              </div><div class="clearfix"></div><br>
                              <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Administracion:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                 <textarea  type="text" class="form-control" rows="5" name="administracion" placeholder="Text input">
                                 </textarea>
                              </div><div class="clearfix"></div><br>
                              <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Curia:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                 <textarea  type="text" class="form-control" rows="5" name="curia" placeholder="Text input">
                                 </textarea>
                              </div><div class="clearfix"></div><br>
                              <label class="control-label col-md-1 col-md-offset-2 " for="first-name">Comisiones:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                 <textarea  type="text" class="form-control" rows="5" name="comisiones" placeholder="Text input">
                                 </textarea>
                              </div><div class="clearfix"></div><br>
                              <label class="control-label col-md-1 col-md-offset-2 " for="first-name">instituciones:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                 <textarea  type="text" class="form-control" rows="5" name="instituciones" placeholder="Text input">
                                 </textarea>
                              </div><div class="clearfix"></div><br>
                <!--<label class="control-label col-md-1 col-md-offset-2 " for="first-name">Comisiones:</label>
                  <div class="x_content">
                      <div id="alerts"></div>
                      <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                        <div class="btn-group">
                          <a class="btn dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                          <ul class="dropdown-menu">
                          <li><a data-edit="fontName Serif" style="font-family:'Serif'">Serif</a></li><li><a data-edit="fontName Sans" style="font-family:'Sans'">Sans</a></li><li><a data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li><li><a data-edit="fontName Arial Black" style="font-family:'Arial Black'">Arial Black</a></li><li><a data-edit="fontName Courier" style="font-family:'Courier'">Courier</a></li><li><a data-edit="fontName Courier New" style="font-family:'Courier New'">Courier New</a></li><li><a data-edit="fontName Comic Sans MS" style="font-family:'Comic Sans MS'">Comic Sans MS</a></li><li><a data-edit="fontName Helvetica" style="font-family:'Helvetica'">Helvetica</a></li><li><a data-edit="fontName Impact" style="font-family:'Impact'">Impact</a></li><li><a data-edit="fontName Lucida Grande" style="font-family:'Lucida Grande'">Lucida Grande</a></li><li><a data-edit="fontName Lucida Sans" style="font-family:'Lucida Sans'">Lucida Sans</a></li><li><a data-edit="fontName Tahoma" style="font-family:'Tahoma'">Tahoma</a></li><li><a data-edit="fontName Times" style="font-family:'Times'">Times</a></li><li><a data-edit="fontName Times New Roman" style="font-family:'Times New Roman'">Times New Roman</a></li><li><a data-edit="fontName Verdana" style="font-family:'Verdana'">Verdana</a></li></ul>
                        </div>

                        <div class="btn-group">
                          <a class="btn dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li>
                              <a data-edit="fontSize 5">
                                <p style="font-size:17px">Huge</p>
                              </a>
                            </li>
                            <li>
                              <a data-edit="fontSize 3">
                                <p style="font-size:14px">Normal</p>
                              </a>
                            </li>
                            <li>
                              <a data-edit="fontSize 1">
                                <p style="font-size:11px">Small</p>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="btn-group">
                          <a class="btn" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                          <a class="btn" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                          <a class="btn" data-edit="strikethrough" title="" data-original-title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                          <a class="btn" data-edit="underline" title="" data-original-title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                        </div>
                        <div class="btn-group">
                          <a class="btn" data-edit="insertunorderedlist" title="" data-original-title="Bullet list"><i class="fa fa-list-ul"></i></a>
                          <a class="btn" data-edit="insertorderedlist" title="" data-original-title="Number list"><i class="fa fa-list-ol"></i></a>
                          <a class="btn" data-edit="outdent" title="" data-original-title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                          <a class="btn" data-edit="indent" title="" data-original-title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                        </div>
                        <div class="btn-group">
                          <a class="btn" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                          <a class="btn" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                          <a class="btn" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                          <a class="btn" data-edit="justifyfull" title="" data-original-title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                        </div>
                        <div class="btn-group">
                          <a class="btn dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink"><i class="fa fa-link"></i></a>
                          <div class="dropdown-menu input-append">
                            <input class="span2" placeholder="URL" type="text" data-edit="createLink">
                            <button class="btn" type="button">Add</button>
                          </div>
                          <a class="btn" data-edit="unlink" title="" data-original-title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                        </div>
                        <div class="btn-group">
                          <a class="btn" title="" id="pictureBtn" data-original-title="Insert picture (or just drag &amp; drop)"><i class="fa fa-picture-o"></i></a>
                          <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" style="opacity: 0; position: absolute; top: 0px; left: 0px; width: 37px; height: 34px;">
                        </div>

                        <div class="btn-group">
                          <a class="btn" data-edit="undo" title="" data-original-title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                          <a class="btn" data-edit="redo" title="" data-original-title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                        </div>
                      </div>
                      <div id="editor" class="editor-wrapper placeholderText" contenteditable="true"></div>
                      <textarea type="text" name="comisiones" class="form-control" id="comisiones" style="display:none;" ></textarea>
                      <br>
                    </div>-->


                             <div class="form-group">
                               <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-1">
                                 <button type="submit" class="btn btn-danger">Cancelar</button>
                                 <button type="submit" class="btn btn-success">Aceptar</button>
                               </div>
                             </div>

                           </form>
                     </div>
                 </div>
            </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/google-code-prettify/src/prettify.js"></script>
<script type="text/javascript">
$(document).ready(function(){

      $("#sede").autocomplete({
          source: "<?php echo base_url(); ?>obispo/buscarSede",
          minLength: 1,
          select: function( event, ui ) {
              $("#sede_id").val(ui.item.id);
           }
      });
      $("#oficial").autocomplete({
            source: "<?php echo base_url(); ?>jurisdiccion/buscarObispoNombre2",
            minLength: 1,
            select: function( event, ui ) {
                 $("#oficial_id").val(ui.item.id);
            }
      });
      $("#auxiliar1").autocomplete({
            source: "<?php echo base_url(); ?>jurisdiccion/buscarObispoNombre2",
            minLength: 1,

            select: function( event, ui ) {
                 $("#auxiliar1_id").val(ui.item.id);
            }
      });
      $("#auxiliar2").autocomplete({
            source: "<?php echo base_url(); ?>jurisdiccion/buscarObispoNombre2",
            minLength: 1,

            select: function( event, ui ) {
                 $("#auxiliar2_id ").val(ui.item.id);
            }
      });
      $("#auxiliar3").autocomplete({
            source: "<?php echo base_url(); ?>jurisdiccion/buscarObispoNombre2",
            minLength: 1,

            select: function( event, ui ) {
                 $("#auxiliar3_id").val(ui.item.id);
            }
      });
      $("#auxiliar4").autocomplete({
            source: "<?php echo base_url(); ?>jurisdiccion/buscarObispoNombre2",
            minLength: 1,

            select: function( event, ui ) {
                 $("#auxiliar4_id").val(ui.item.id);
            }
      });




      $("#tipo_cargo").autocomplete({
            source: "<?php echo base_url(); ?>obispo/buscarTipoCargo",
            minLength: 1,
            select: function( event, ui ) {
                 $("#tipo_cargo_id").val(ui.item.id);
            }
      });

      function initToolbarBootstrapBindings() {
        var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'
          ],
          fontTarget = $('[title=Font]').siblings('.dropdown-menu');
        $.each(fonts, function(idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
        });
        $('a[title]').tooltip({
          container: 'body'
        });
        $('.dropdown-menu input').click(function() {
            return false;
          })
          .change(function() {
            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
          })
          .keydown('esc', function() {
            this.value = '';
            $(this).change();
          });

        $('[data-role=magic-overlay]').each(function() {
          var overlay = $(this),
            target = $(overlay.data('target'));
          overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
        });

        if ("onwebkitspeechchange" in document.createElement("input")) {
          var editorOffset = $('#editor').offset();

          $('.voiceBtn').css('position', 'absolute').offset({
            top: editorOffset.top,
            left: editorOffset.left + $('#editor').innerWidth() - 35
          });
        } else {
          $('.voiceBtn').hide();
        }
      }

      function showErrorAlert(reason, detail) {
        var msg = '';
        if (reason === 'unsupported-file-type') {
          msg = "Unsupported format " + detail;
        } else {
          console.log("error uploading file", reason, detail);
        }
        $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
          '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
      }

      initToolbarBootstrapBindings();

      $('#editor').wysiwyg({
        fileUploadError: showErrorAlert
      });

      window.prettyPrint;
      prettyPrint();
});

</script>
