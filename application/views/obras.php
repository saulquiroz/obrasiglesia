
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
<div class="top_nav">
         <div class="nav_menu">
           <nav>
             <div class="nav toggle">
               <a id="menu_toggle"><i class="fa fa-bars"></i></a>
             </div>

             <ul class="nav navbar-nav navbar-right">
               <li class="">
                 <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   <img src="images/img.jpg" alt="">Juan Perez
                   <span class=" fa fa-angle-down"></span>
                 </a>
                 <ul class="dropdown-menu dropdown-usermenu pull-right">
                   <li><a href="javascript:;"> Profile</a></li>
                   <li>
                     <a href="javascript:;">
                       <span class="badge bg-red pull-right">50%</span>
                       <span>Settings</span>
                     </a>
                   </li>
                   <li><a href="javascript:;">Help</a></li>
                   <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                 </ul>
               </li>
             </ul>
           </nav>
         </div>
 </div>
       <!-- page content -->
     <div class="right_col" role="main">
          <div class="">
            <div class="col-md-10 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><i class="fa fa-spinner"></i> Registro Nuevo <small>Obra de Salud</small></h2>
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
                <form class=" form-label-left input_mask" align="center" action="<?php base_url();?>usuario/guardar" method="POST">
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <div class="x_panel">
                          <div class="x_tittle"><h2 align="left"><i class="fa fa-spinner"></i> Informacion General</h2></div><div class="clearfix"></div><br>
                            <label class="control-label col-md-2 " for="first-name">Nombre:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input required="required" type="text" name="nombre" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>

                            <label class="control-label col-md-2 " for="first-name">Sigla:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>

                            <label class="control-label col-md-2 " for="first-name">Congregacion:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>

                            <label class="control-label col-md-2 " for="first-name">Fecha Creacion:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <fieldset>
                                  <div class="controls">
                                      <input type="text" name="fecha_nac" class="form-control has-feedback-right" id="single_cal1" placeholder="" aria-describedby="inputSuccess2Status">
                                      <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                  </div>
                              </fieldset>
                            </div> <div class="clearfix"></div>
                            <label class="control-label col-md-2 " for="first-name">Nit:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2 " for="first-name">Area de Accion:</label>
                             <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <!--<input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->
                              <span class="fa fa-cog form-control-feedback right" aria-hidden="true"></span>
                                <select id="tipo" name="tipo" class="form-control" required>
                                  <option value="">Elija una Opcion...</option>
                                  <option value="urbana">Area Urbana</option>
                                  <option value="rural">Area Rural</option>
                                  <option value="ambas">Ambas Areas</option>
                                </select>
                              </div><div class="clearfix"></div>
                              <label class="control-label col-md-2" for="first-name">Hora Atencion:</label>
                               <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <span class="fa fa-cog form-control-feedback right" aria-hidden="true"></span>
                                  <select id="tipo" name="tipo" class="form-control" required>
                                    <option value="">Elija una Opcion...</option>
                                    <option value="manana">Mañana</option>
                                    <option value="tarde">Tarde</option>
                                    <option value="noche">Noche</option>
                                  </select>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Poblacion Meta:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                            <div class="x_tittle"><h2 align="left"><i class="fa fa-map-marker"></i> Datos Geograficos</h2></div><div class="clearfix"></div><br>
                              <label class="control-label col-md-2" for="first-name">Departamento:</label>
                               <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <span class="fa fa-cog form-control-feedback right" aria-hidden="true"></span>
                                  <select id="tipo" name="tipo" class="form-control" required="required">
                                    <option value="">Elija una Opcion...</option>
                                    <option value="manana">La Paz</option>
                                    <option value="tarde">Oruro</option>
                                    <option value="noche">Chuquisaca</option>
                                    <option value="tarde">Cochabamba</option>
                                    <option value="tarde">Potosi</option>
                                    <option value="tarde">Pando</option>
                                    <option value="tarde">Beni</option>
                                    <option value="tarde">Tarija</option>
                                    <option value="tarde">Santa Cruz</option>
                                  </select>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Provincia:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Municipio:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Comunidad/Zona/Urbana:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Direccion:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Telefono:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Fax:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Casilla:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Pagina Web:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                                <label class="control-label col-md-2 " for="first-name">Correo Electronico:</label>
                                <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                  <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                  <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                </div><div class="clearfix"></div>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        <div class="x_panel">
                          <div class="x_tittle"><h2 align="left"><i class="fa fa-university"></i> Informacion Jurisdiccion</h2></div><div class="clearfix"></div><br>
                              <label class="control-label col-md-2 " for="first-name">Jurisdiccion:</label>
                              <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                              </div><div class="clearfix"></div>
                              <label class="control-label col-md-2 " for="first-name">Vicaria o zona pastoral:</label>
                              <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                              </div><div class="clearfix"></div>
                              <label class="control-label col-md-2 " for="first-name">Parroquia:</label>
                              <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                              </div><div class="clearfix"></div>
                          <div class="x_tittle"><h2 align="left"><i class="fa fa-male"></i> Informacion del responsable de la obra</h2></div><div class="clearfix"></div><br>
                              <label class="control-label col-md-2 " for="first-name">Nombre:</label>
                              <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                              </div><div class="clearfix"></div>
                              <label class="control-label col-md-2 " for="first-name">Cargo:</label>
                              <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                              </div><div class="clearfix"></div>
                              <label class="control-label col-md-2 " for="first-name">Profesion:</label>
                              <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                                <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2 " for="first-name">Fecha Nombramiento:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <fieldset>
                                  <div class="controls">
                                      <input type="text" name="fecha_nac" class="form-control has-feedback-right" id="single_cal1" placeholder="" aria-describedby="inputSuccess2Status">
                                      <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                  </div>
                              </fieldset>
                            </div> <div class="clearfix"></div>
                            <label class="control-label col-md-2 " for="first-name">Correo Electronico:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                          </div><div class="clearfix"></div>
                          <label class="control-label col-md-2 " for="first-name">Telefono:</label>
                          <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                            <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                            <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                          </div><div class="clearfix"></div>
                            <div class="x_tittle"><h2 align="left"><i class="fa fa-bullhorn"></i> Informacion del Representante legal de la Obra</h2></div><div class="clearfix"></div><br>
                            <label class="control-label col-md-2 " for="first-name">Nombre:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2 " for="first-name">Profesion:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                              <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                              <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                          </div><div class="clearfix"></div>
                          <label class="control-label col-md-2 " for="first-name">Correo Electronico:</label>
                          <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                            <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                            <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                        </div><div class="clearfix"></div>
                        <label class="control-label col-md-2 " for="first-name">Telefono:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                          <input required="required" type="text" name="cargo" class="form-control" placeholder="">
                          <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                        </div><div class="clearfix"></div>
                        <label class="control-label col-md-2 " for="first-name">Numero de testimonio de poder general y administrativo:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                          <input required="required" type="text" name="cargo" class="form-control" placeholder="">
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
                              <input  type="text" name="foto" class="form-control has-feedback-right" placeholder="">
                              <span class="fa fa-image form-control-feedback right" aria-hidden="true"></span>
                            </div><div class="clearfix"></div>
                           <label class="control-label col-md-2" for="first-name">Ingresos por servicios propios: </label>
                           <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                             <input id="oficial" required="required" type="text" name="oficial" class="form-control has-feedback-right"  placeholder="" value="">
                             <input id="oficial_id" class="col-md-12" type="hidden" name="oficial_id" value=""  />
                           </div><div class="clearfix"></div>
                           <label class="control-label col-md-2" for="first-name">Monto total de gasto: </label>
                           <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                             <input id="auxiliar1" type="text" name="auxiliar1" class="form-control has-feedback-right"  placeholder="" value="">
                             <input id="auxiliar1_id" class="col-md-12" type="hidden" name="auxiliar1_id" value=""  />
                           </div><div class="clearfix"></div>
                      <div class="x_tittle"><h4 align="left"><i class="fa fa-arrow-circle-right"></i> Gastos en servicios basicos</h4></div><div class="clearfix"></div><br>
                           <label class="control-label col-md-2 " for="first-name">Agua potable: </label>
                            <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
                               <input  type="text" name="foto" class="form-control has-feedback-right" placeholder="">
                               <span class="fa fa-image form-control-feedback right" aria-hidden="true"></span>
                             </div><div class="clearfix"></div>
                            <label class="control-label col-md-2" for="first-name">Energia electrica: </label>
                            <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                 <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <input id="oficial" required="required" type="text" name="oficial" class="form-control has-feedback-right"  placeholder="" value="">
                              <input id="oficial_id" class="col-md-12" type="hidden" name="oficial_id" value=""  />
                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2" for="first-name">Gas natural: </label>
                            <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                 <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <input id="auxiliar1" type="text" name="auxiliar1" class="form-control has-feedback-right"  placeholder="" value="">
                              <input id="auxiliar1_id" class="col-md-12" type="hidden" name="auxiliar1_id" value=""  />
                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2" for="first-name">Gas licuado: </label>
                            <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                 <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <input id="auxiliar1" type="text" name="auxiliar1" class="form-control has-feedback-right"  placeholder="" value="">
                              <input id="auxiliar1_id" class="col-md-12" type="hidden" name="auxiliar1_id" value=""  />
                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2" for="first-name">Telefono: </label>
                            <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                 <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <input id="auxiliar1" type="text" name="auxiliar1" class="form-control has-feedback-right"  placeholder="" value="">
                              <input id="auxiliar1_id" class="col-md-12" type="hidden" name="auxiliar1_id" value=""  />
                            </div><div class="clearfix"></div>
                            <label class="control-label col-md-2" for="first-name">Internet: </label>
                            <div class="ccol-md-7 col-sm-7 col-xs-12  form-group ">
                                 <span class="fa fa-male form-control-feedback right" aria-hidden="true"></span>
                              <input id="auxiliar1" type="text" name="auxiliar1" class="form-control has-feedback-right"  placeholder="" value="">
                              <input id="auxiliar1_id" class="col-md-12" type="hidden" name="auxiliar1_id" value=""  />
                            </div><div class="clearfix"></div>
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

              $("#sede").autocomplete({
                  source: "<?php echo base_url(); ?>obispo/buscarSede",
                  minLength: 1,
                  select: function( event, ui ) {
                      $("#sede_id").val(ui.item.id);
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
