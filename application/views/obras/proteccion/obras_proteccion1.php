
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>

       <!-- page content -->
     <div class="right_col" role="main">
          <div class="">
            <div class="col-md-10 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><i class="fa fa-spinner"></i> Registro Nuevo <small>Obra de Proteccion Social</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">


                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Informacion General</a>
                      </li>
                      <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Responsables</a>
                      </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Informacion Economica</a>
                      </li>
                    </ul>
                <form class=" form-label-left input_mask" align="center" action="<?php base_url();?>proteccion/registrar" method="POST">
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <div class="x_panel">
                          <div class="x_tittle"><h2 align="left"><i class="fa fa-spinner"></i> Informacion General</h2></div><div class="clearfix"></div><br>
                            <label class="control-label col-md-2 " for="first-name">Nombre:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input   type="text" name="nombre" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>

                            <label class="control-label col-md-2 " for="first-name">Sigla:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input   type="text" name="sigla" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>

                            <label class="control-label col-md-2 " for="first-name">Congregacion:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input   type="text" name="congregacion" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>

                            <label class="control-label col-md-2 " for="first-name">Fecha Creacion:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <fieldset>
                                  <div class="controls">
                                      <input type="text" name="fecha_creacion" class="form-control has-feedback-right" id="single_cal1" placeholder="" aria-describedby="inputSuccess2Status">
                                      <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                  </div>
                              </fieldset>
                            </div> <div class="clearfix"></div>
                            <label class="control-label col-md-2 " for="first-name">Nit:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input   type="text" name="nit" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2 " for="first-name">Area de Accion:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <!--<input   type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->
                              <span class="fa fa-cog form-control-feedback right" aria-hidden="true"></span>
                                <select id="tipo" name="tipo_area" class="form-control" >
                                  <option value="">Elija una Opcion...</option>
                                  <option value="urbana">Area Urbana</option>
                                  <option value="rural">Area Rural</option>
                                  <option value="ambas">Ambas Areas</option>
                                </select>
                              </div><div class="clearfix"></div>
                              <label class="control-label col-md-2" for="first-name">Hora Atencion:</label>
                               <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <span class="fa fa-cog form-control-feedback right" aria-hidden="true"></span>
                                  <select id="tipo" name="tipo_hora" class="form-control">
                                    <option value="">Elija una Opcion...</option>
                                    <option value="manana">Mañana</option>
                                    <option value="tarde">Tarde</option>
                                    <option value="noche">Noche</option>
                                  </select>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Poblacion Meta:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input   type="text" name="poblacion_meta" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                            <div class="x_tittle"><h2 align="left"><i class="fa fa-map-marker"></i> Datos Geograficos</h2></div><div class="clearfix"></div><br>
                              <label class="control-label col-md-2" for="first-name">Departamento:</label>
                               <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <span class="fa fa-cog form-control-feedback right" aria-hidden="true"></span>
                                  <select id="tipo" name="tipo_departamento" class="form-control"  >
                                    <option value="">Elija una Opcion...</option>
                                    <option value="lapaz">La Paz</option>
                                    <option value="oruro">Oruro</option>
                                    <option value="chuquisaca">Chuquisaca</option>
                                    <option value="cochabamba">Cochabamba</option>
                                    <option value="potosi">Potosi</option>
                                    <option value="pando">Pando</option>
                                    <option value="beni">Beni</option>
                                    <option value="tarija">Tarija</option>
                                    <option value="santacruz">Santa Cruz</option>
                                  </select>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Provincia:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input   type="text" name="provincia" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Municipio:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input   type="text" name="municipio" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Comunidad/Zona/Urbana:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input   type="text" name="comunidadzu" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Direccion:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input   type="text" name="direccion" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Telefono:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input   type="text" name="telefono_geo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Fax:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input   type="text" name="fax_geo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Casilla:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input   type="text" name="casilla_geo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Pagina Web:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input   type="text" name="paginaweb_geo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Correo Electronico:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input   type="text" name="email_geo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        <div class="x_panel">
                          <div class="x_tittle"><h2 align="left"><i class="fa fa-university"></i> Informacion Jurisdiccion</h2></div><div class="clearfix"></div><br>
                              <label class="control-label col-md-2 " for="first-name">Jurisdiccion:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                              <input id="jurisdiccion" required="required" type="text" name="jurisdiccion" class="form-control has-feedback-right"  placeholder="Ingrese la jurisdiccion" value="">
                              <input id="jurisdiccion_id" class="col-md-12" type="hidden" name="jurisdiccion_id" value=""  />
                            </div><div class="clearfix"></div>
                              <label class="control-label col-md-2 " for="first-name">Vicaria o zona pastoral:</label>
                              <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <input   type="text" name="vicaria" class="form-control" placeholder="">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                              </div><div class="clearfix"></div>
                              <label class="control-label col-md-2 " for="first-name">Parroquia:</label>
                              <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <input   type="text" name="parroquia" class="form-control" placeholder="">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                              </div><div class="clearfix"></div>
                          <div class="x_tittle"><h2 align="left"><i class="fa fa-male"></i> Informacion del responsable de la obra</h2></div><div class="clearfix"></div><br>
                              <label class="control-label col-md-2 " for="first-name">Nombre:</label>
                              <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <input   type="text" name="nombre_obra" class="form-control" placeholder="">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                              </div><div class="clearfix"></div>
                              <label class="control-label col-md-2 " for="first-name">Cargo:</label>
                              <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <input   type="text" name="cargo_obra" class="form-control" placeholder="">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                              </div><div class="clearfix"></div>
                              <label class="control-label col-md-2 " for="first-name">Profesion:</label>
                              <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <input   type="text" name="profesion_obra" class="form-control" placeholder="">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2 " for="first-name">Fecha Nombramiento:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <fieldset>
                                  <div class="controls">
                                      <input type="text" name="fechanombramiento_obra" class="form-control has-feedback-right" id="single_cal2" placeholder="" aria-describedby="inputSuccess2Status">
                                      <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                  </div>
                              </fieldset>
                            </div> <div class="clearfix"></div>
                            <label class="control-label col-md-2 " for="first-name">Correo Electronico:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input   type="text" name="email_obra" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                          </div><div class="clearfix"></div>
                          <label class="control-label col-md-2 " for="first-name">Telefono:</label>
                          <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                            <input   type="text" name="telefono_obra" class="form-control" placeholder="">
                            <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                          </div><div class="clearfix"></div>
                            <div class="x_tittle"><h2 align="left"><i class="fa fa-bullhorn"></i> Informacion del Representante legal de la Obra</h2></div><div class="clearfix"></div><br>
                            <label class="control-label col-md-2 " for="first-name">Nombre:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input   type="text" name="nombre_legal" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2 " for="first-name">Profesion:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input   type="text" name="prefesion_legal" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                          </div><div class="clearfix"></div>
                          <label class="control-label col-md-2 " for="first-name">Correo Electronico:</label>
                          <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                            <input   type="text" name="email_legal" class="form-control" placeholder="">
                            <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                        </div><div class="clearfix"></div>
                        <label class="control-label col-md-2 " for="first-name">Telefono:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                          <input   type="text" name="telefono_legal" class="form-control" placeholder="">
                          <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                        </div><div class="clearfix"></div>
                        <label class="control-label col-md-2 " for="first-name">Numero de testimonio de poder general y administrativo:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                          <input   type="text" name="testimonio_legal" class="form-control" placeholder="">
                          <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                        </div><div class="clearfix"></div>
                        </div>
                        </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <div class="x_panel">
                          <div class="x_tittle"><h2 align="left"><i class="fa fa-bullhorn"></i> Informacion economica - financiera (en bolivianos): </h2></div><div class="clearfix"></div><br>
                          <div class="x_tittle"><h4 align="left"><i class="fa fa-arrow-circle-right"></i> Ingresos y Gastos</h4></div><div class="clearfix"></div><br>
                          <label class="control-label col-md-2 " for="first-name">Monto invertido en la gestion:</label>
                           <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input  type="text" name="monto_economica" class="form-control has-feedback-right" placeholder="">
                              <span class="fa fa-image form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>
                           <label class="control-label col-md-2" for="first-name">Ingresos por servicios propios: </label>
                           <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                             <input     type="text" name="ingresos_economica" class="form-control has-feedback-right"  placeholder="" value="">

                           </div><div class="clearfix"></div>
                           <label class="control-label col-md-2" for="first-name">Monto total de gasto: </label>
                           <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                             <input    type="text" name="gasto_economica" class="form-control has-feedback-right"  placeholder="" value="">

                           </div><div class="clearfix"></div>
                      <div class="x_tittle"><h4 align="left"><i class="fa fa-arrow-circle-right"></i> Gastos en servicios basicos</h4></div><div class="clearfix"></div><br>
                           <label class="control-label col-md-2 " for="first-name">Agua potable: </label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <input  type="text" name="agua_gastos" class="form-control has-feedback-right" placeholder="">
                               <span class="fa fa-image form-control-feedback right" aria-hidden="true"></span>
                             </div><div class="clearfix"></div>
                            <label class="control-label col-md-2" for="first-name">Energia electrica: </label>
                            <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                 <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <input     type="text" name="energia_gastos" class="form-control has-feedback-right"  placeholder="" value="">

                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2" for="first-name">Gas natural: </label>
                            <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                 <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <input    type="text" name="gasnatural_gastos" class="form-control has-feedback-right"  placeholder="" value="">

                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2" for="first-name">Gas licuado: </label>
                            <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                 <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <input    type="text" name="gaslicuado_gastos" class="form-control has-feedback-right"  placeholder="" value="">

                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2" for="first-name">Telefono: </label>
                            <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                 <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <input    type="text" name="telefono_gastos" class="form-control has-feedback-right"  placeholder="" value="">

                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2" for="first-name">Internet: </label>
                            <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                 <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <input    type="text" name="internet_gastos" class="form-control has-feedback-right"  placeholder="" value="">

                            </div><div class="clearfix"></div>
                            <div class="x_tittle"><h4 align="left"><i class="fa fa-arrow-circle-right"></i> Datos Adicionales del Formulario</h4></div><div class="clearfix"></div><br>
                                     <label class="control-label col-md-2 " for="first-name">Numero de Formulario: </label>
                                      <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                         <input  type="text" name="numeroform" class="form-control has-feedback-right" placeholder="">
                                         <span class="fa fa-image form-control-feedback right" aria-hidden="true"></span>
                                       </div><div class="clearfix"></div>
                                      <label class="control-label col-md-2" for="first-name">Nombre del Responsable de la Obra: </label>
                                      <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                           <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                                        <input     type="text" name="nombre_responsable" class="form-control has-feedback-right"  placeholder="" value="">

                                      </div><div class="clearfix"></div>
                                      <label class="control-label col-md-2" for="first-name">Nombre del Empadronador: </label>
                                      <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                           <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                                        <input    type="text" name="nombre_empadronador" class="form-control has-feedback-right"  placeholder="" value="">

                                      </div><div class="clearfix"></div>
                                      <label class="control-label col-md-2 " for="first-name">Fecha de Llenado:</label>
                                      <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                        <fieldset>
                                            <div class="controls">
                                                <input type="text" name="fecha_llenado" class="form-control has-feedback-right" id="single_cal3" placeholder="" aria-describedby="inputSuccess2Status">
                                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                            </div>
                                        </fieldset>
                                      </div> <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
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
<script type="text/javascript">
        $(document).ready(function(){

              $("#jurisdiccion").autocomplete({
                  source: "<?php echo base_url(); ?>obispo/buscarSede",
                  minLength: 1,
                  select: function( event, ui ) {
                      $("#jurisdiccion_id").val(ui.item.id);
                   }
              });
              $("#oficial").autocomplete({
                    source: "<?php echo base_url(); ?>jurisdiccion/buscarObispoNombre",
                    minLength: 1,
                    select: function( event, ui ) {
                         $("#oficial_id").val(ui.item.id);
                    }
              });
              $("#auxiliar1").autocomplete({
                    source: "<?php echo base_url(); ?>jurisdiccion/buscarObispoNombre",
                    minLength: 1,

                    select: function( event, ui ) {
                         $("#auxiliar1_id").val(ui.item.id);
                    }
              });
              $("#auxiliar2").autocomplete({
                    source: "<?php echo base_url(); ?>jurisdiccion/buscarObispoNombre",
                    minLength: 1,

                    select: function( event, ui ) {
                         $("#auxiliar2_id").val(ui.item.id);
                    }
              });
              $("#auxiliar3").autocomplete({
                    source: "<?php echo base_url(); ?>jurisdiccion/buscarObispoNombre",
                    minLength: 1,

                    select: function( event, ui ) {
                         $("#auxiliar3_id").val(ui.item.id);
                    }
              });
              $("#auxiliar4").autocomplete({
                    source: "<?php echo base_url(); ?>jurisdiccion/buscarObispoNombre",
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
        });
</script>
