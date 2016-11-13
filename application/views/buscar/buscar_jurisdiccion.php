
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
                    <h2 align="center">BUSCAR OBISPOS</h2>
                    <div class="x_title"></div>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link">Ocultar<i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                  <div class="x_content" align="center">
                    <form class="form-label-left input_mask" align="center" action="<?php echo base_url();?>buscar/jurisdiccion" method="POST"  id="formObis">
                      <label class="control-label col-md-2 col-md-offset-1 " for="first-name">jurisdicciones Eclesiastica:</label>
                       <div class="col-md-5 col-sm-7 col-xs-12 form-group has-feedback">
                          <!--<input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->

                          <select id="tipo" name="jurisdiccion" class="form-control" required>
                            <option value="<?php echo set_value('jurisdiccion'); ?>">Seleccione la jurisdiccion</option>
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
                        </div><div class="clearfix"></div><br>

                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-1">
                          <button type="submit" class="btn btn-danger">Cancelar</button>
                          <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                      </div>
                    </form>
