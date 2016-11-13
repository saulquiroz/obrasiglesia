<br><br>

<div class="x_content">
  <?php #print_r($resultadoJurisdiccion); ?>
  <?php foreach ($resultadoJurisdiccion as $key) {
      $key->sede;
      $key->mapa;
      $key->historia;
      $key->territorio;
      $key->administracion;
  } ?>

  <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2><?php echo $key->sede;  ?></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="col-md-4 col-sm-7 col-xs-12">
                        <div class="product-image">
                          <img src="<?php echo base_url(); ?>assets/imagenes/<?php echo $key->mapa; ?>" alt="...">
                        </div>
                      </div>
                      <div class="col-md-7 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                        <h3 class="prod_title">HISTORIA</h3>

                        <p><?php echo $key->historia; ?></p>
                        <br>

                        <!--<h3 class="prod_title">TERRITORIO</h3>

                        <p><?php #echo $key->territorio; ?></p>
                        <br>
                        <h3 class="prod_title">administracion</h3>

                        <p><?php #echo $key->administracion; ?></p>
                        <br>-->


                        <br>
                      </div>
                    </div>


                    <?php foreach ($resultadoJurisdiccion as $obispos) {?>
                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i><?php echo $obispos->descripcion ?></i></h4>
                            <div class="left col-xs-7">
                              <h2><?php echo $obispos->nombre ?></h2>
                              <p><strong>Biografia: </strong><?php #echo $obispos->bibliografia; ?></p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> Direccion: <?php echo $obispos->ubicacion; ?></li>
                                <li><i class="fa fa-phone"></i> Telefono #: <?php echo $obispos->telefono; ?> </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="<?php echo base_url(); ?>assets/imagenes/<?php echo $obispos->foto; ?>" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-12 emphasis">
                              <a href="<?php echo base_url(); ?>obispo/visualizar/<?php echo $key->cod_usuario; ?>" class="btn btn-primary btn-xs"><i class="fa fa-user"></i> Ver Obispo </a>;
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php  } ?>
                </div>


                        <div class="product_social">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-envelope-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-rss-square"></i></a>
                            </li>
                          </ul>
                        </div>

                      </div>

                    </div>
                  </div>
                </div>
              </div>

</div>

</div>
</div>
</div>
</div>
</div>
</div>
