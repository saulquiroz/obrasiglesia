<div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1"><br><br>
  <div class="x_panel"><br><br>
    <h2 align="center"><strong>RESULTADO DE LA BUSQUEDA DE OBRAS MOVILIDAD HUMANA</strong></h2>
      <div class="clearfix"></div>
        <div class="x_content" align="center">
                    <form class="form-label-left input_mask" align="center" action="<?php echo base_url();?>pag_busqueda/busquedamovilidad" method="POST"  id="formObis"><br>
                      <label class="col-md-4 col-md-offset-2" align="left">Jurisdicciones Eclesiastica:</label><label class="col-md-3" align="left">Ciudad:</label><div class="clearfix"></div>
                       <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-2 form-group has-feedback">
                          <!--<input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->

                          <select id="jurisdiccion" name="jurisdiccion" class="form-control" required>
                            <option value="0">Todas las jurisdicciones</option>
                            <option value="1">ARQUIDIÓCESIS DE COCHABAMBA</option>
                            <option value="2">ARQUIDIÓCESIS DE LA PAZ </option>
                            <option value="3">ARQUIDIÓCESIS DE SANTA CRUZ DE LA SIERRA </option>
                            <option value="4">ARQUIDIÓCESIS DE SUCRE </option>
                            <option value="5">OBISPADO CASTRENSE DE BOLIVIA </option>
                            <option value="6">DIOCESIS DE COROICO</option>
                            <option value="7">DIOCESIS DE EL ALTO</option>
                            <option value="8">DIOCESIS DE ORURO</option>
                            <option value="9">DIOCESIS DE POTOSI</option>
                            <option value="10">DIOCESIS DE SAN IGNACION DE VELASCO</option>
                            <option value="11">DIOCESIS DE TARIJA</option>
                            <option value="12">PRELATURA DE AIQUILE</option>
                            <option value="13">PRELATURA DE COROICO</option>
                            <option value="14">VICARIATO DEL BENI</option>
                            <option value="15">VICARIATO APOSTOLICO DE CAMIRI</option>
                            <option value="16">VICARIATO APOSTÓLICO DE ÑUFLO CHAVEZ</option>
                            <option value="17">VICARIATO APOSTOLICO DE PANDO</option>
                            <option value="18">VICARIATO APOSTOLICO DE REYES</option>

                          </select>
                        </div>

                         <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback">
                            <!--<input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->
                            <select id="ciudad" name="ciudad" class="form-control" required>
                              <option value="0">Todos los Departamento</option>
                              <option value="LA PAZ">La Paz</option>
                              <option value="ORURO">Oruro </option>
                              <option value="CHUQUISACA">Chuquisaca</option>
                              <option value="COCHABAMBA">Cochambamba</option>
                              <option value="POTOSI">Potosi</option>
                              <option value="PANDO">Pando</option>
                              <option value="BENI">Beni</option>
                              <option value="TARIJA">Tarija</option>
                              <option value="SANTA CRUZ">Santa Cruz</option>
                            </select>
                          </div><div class="clearfix"></div><br>

                      <!--  <label class="control-label col-md-4 col-md-offset-2" align="left">Tipo de Obra:</label><label class="control-label col-md-3" align="left">Texto a Buscar:</label><div class="clearfix"></div>
                         <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-2 form-group has-feedback">
                            <input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">
                            <select  name="obra" class="form-control" required>
                              <option value="0">Todas las Obras de la Iglesia</option>
                              <option value="1">Parroquia</option>
                              <option value="2">Casa Religiosa </option>
                              <option value="3">Obra de Educacion </option>
                              <option value="4">Obra de Salud </option>
                              <option value="5">Obra de Proteccion Social </option>
                              <option value="6">Obra de Comunicacion Social</option>
                              <option value="7">Casa de Encuentros</option>
                              <option value="8">Obra de Administrativa</option>
                              <option value="9">Obra de Movilidad Humana</option>
                              <option value="10">Obra Productiva</option>
                              <option value="11">Obra Penitenciaria</option>
                            </select>
                          </div>
                          <div class="ccol-md-3 col-sm-3 col-xs-3 form-group ">
                            <input type="text" name="texto" class="form-control has-feedback-right" value="<?php echo set_value('texto');?>">
                          <?php echo form_error('texto')?>
                        </div><div class="clearfix">-->
                        <input id="obra" class="col-md-12" type="hidden" name="obra" value="9"  />
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 col-md-offset-3">
                         <a class="btn btn-danger" href="<?php echo base_url(); ?>#home"><i class="fa fa-mail-reply "></i> Anterior</a>
                       </div>
                       <div class="cold-md-4 col-sm-4 col-xs-4">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar Obra</button>
                        </div>
                      </div><div class="clearfix"></div>
                    </form>
                    <br>
