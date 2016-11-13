
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <!--<div class="title_left">
                <h3>Registro Usuario</h3>
              </div>-->


            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-xs-12 ">
                <div class="x_panel">
                    <h2 align="center">BUSCAR OBISPOS</h2>
                    <div class="x_title"></div>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link">Ocultar<i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                  <div class="x_content" align="center">
                    <form class="form-label-left input_mask" align="center" action="<?php echo base_url();?>buscar/obispo" method="POST"  id="formObis">
                      <label class="control-label col-md-2 col-md-offset-1 " for="first-name">Tipo de Obispos:</label>
                       <div class="col-md-5 col-sm-7 col-xs-12 form-group has-feedback">
                          <!--<input required="required" type="text" class="form-control has-feedback-right" id="inputSuccess2" placeholder="Ingrese Tipo">-->

                          <select id="tipo" name="tipo" class="form-control" required>
                            <option value="<?php echo set_value('tipo'); ?>">Seleccione el tipo de obispo</option>
                            <option value="1">Cardenal</option>
                            <option value="2">Nuncio Apostolico </option>
                            <option value="3">Obispos Titulares </option>
                            <option value="5">Obispos Auxiliares </option>
                            <option value="6">Obispos Emeritos </option>
                            <option value="7">En la Casa del Padre</option>
                          </select>
                        </div><div class="clearfix"></div><br>

                        <div class="form-group">
                          <div class="col-md-11 col-sm-11 col-xs-11">
                           <a class="btn btn-danger" href="<?php echo base_url(); ?>inicio"><i class="fa fa-mail-reply "></i> Anterior</a>
                          <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Aceptar</button>
                          </div>
                        </div>
                    </form>
