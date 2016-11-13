<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Obras de la Iglesia</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">

    <!--CALENDAR-->

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>inicio" class="site_title"><i class="fa fa-university"></i> <span>OBRAS  </span></a>
            </div>
            <?php foreach ($usuario as $key ) {
                  $key->cod_usuario;
                  $key->nombre;
                  $key->apellido;
                  $key->foto;
                #  $key->direccion;
                  #$key->telefono;
            } ?>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/imagenes/<?php echo $key->foto; ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2><?php echo $key->nombre.' '.$key->apellido; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section"><br>
                <h3>MENU</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>inicio"><i class="fa fa-home"></i> Inicio</a>

                  </li>
                  <li><a><i class="fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>usuario">Registrar Usuarios</a></li>
                      <li><a href="<?php echo base_url(); ?>editar">Lista Usuario</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-university"></i> Obispos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>obispo">Registrar Obispo</a></li>

                      <li><a href="<?php echo base_url(); ?>obispo/lista_obispo">Lista Obispo</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-puzzle-piece"></i> Obras de la Iglesia <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a><i class="fa fa-puzzle-piece"></i> Parroquia <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url(); ?>parroquia">Registrar Parroquia</a></li>
                        <li><a href="<?php echo base_url(); ?>obras/lista_parroquia">Lista Parroquia</a></li>
                      </ul> 
                      <li><a><i class="fa fa-puzzle-piece"></i> Casa de Encuentros <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu"> 
                        <li><a href="<?php echo base_url(); ?>encuentros">Registrar Encuentro</a></li>
                        <li><a href="<?php echo base_url(); ?>obras/lista_encuentros">Lista Encuentros</a></li>
                      </ul> 
                      <li><a><i class="fa fa-puzzle-piece"></i> Casa Religiosa <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url(); ?>religiosa">Registrar Religiosa</a></li>
                        <li><a href="<?php echo base_url(); ?>obras/lista_religiosa">Lista Religiosa</a></li>
                      </ul> 
                      <li><a><i class="fa fa-puzzle-piece"></i> Obra Administrativa <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url(); ?>administrativa">Registrar Administrativa</a></li>
                        <li><a href="<?php echo base_url(); ?>obras/lista_administrativa">Lista Administrativa</a></li>
                      </ul> 
                      <li><a><i class="fa fa-puzzle-piece"></i> Obra de Educacion <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url(); ?>educacion">Registrar Educacion</a></li>
                        <li><a href="<?php echo base_url(); ?>obras/lista_educacion">Lista Educacion</a></li>
                      </ul> 
                      <li><a><i class="fa fa-puzzle-piece"></i> Obra de Salud <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url(); ?>salud">Registrar Salud</a></li>
                        <li><a href="<?php echo base_url(); ?>obras/lista_salud">Lista Salud</a></li>
                      </ul> 
                      <li><a><i class="fa fa-puzzle-piece"></i> Obra de Proteccion Social <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url(); ?>proteccion">Registrar Proteccion Social</a></li>
                        <li><a href="<?php echo base_url(); ?>obras/lista_proteccion">Lista Proteccion Social</a></li>
                      </ul> 
                      <li><a><i class="fa fa-puzzle-piece"></i> Obra de Comunicacion Social <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url(); ?>comunicacion">Registrar Comunicacion Social</a></li>
                        <li><a href="<?php echo base_url(); ?>obras/lista_comunicacion">Lista Comunicacion Social</a></li>
                      </ul> 
                      <li><a><i class="fa fa-puzzle-piece"></i>Obra de Movilidad Humana <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url(); ?>movilidad">Registrar Movilidad Humana</a></li>
                        <li><a href="<?php echo base_url(); ?>obras/lista_movilidad">Lista Movilidad Humana</a></li>
                      </ul> 
                      <li><a><i class="fa fa-puzzle-piece"></i>Obra Productiva <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url(); ?>productiva">Registrar Productiva</a></li>
                        <li><a href="<?php echo base_url(); ?>obras/lista_productiva">Lista Productiva</a></li>
                      </ul> 
                      <li><a><i class="fa fa-puzzle-piece"></i>Obra Penitenciaria<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url(); ?>penitenciaria">Registrar Penitenciaria</a></li>
                        <li><a href="<?php echo base_url(); ?>obras/lista_penitenciaria">Lista Penitenciaria</a></li>
                      </ul> 
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Jurisdicciones <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo  base_url(); ?>jurisdiccion">Registrar jurisdiccion</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Estadísticas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>buscar/obras_inicio">Buscar Obras</a></li>
                      <li><a href="<?php echo base_url(); ?>buscar">Buscar Obispo</a></li>
                      <li><a href="<?php echo base_url(); ?>buscar/jurisdiccion_inicio">Buscar Jurisdiccion</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <!-- /menu footer buttons -->
          </div>
        </div>
        <div class="top_nav">
                 <div class="nav_menu">
                   <nav>
                     <div class="nav toggle">
                       <a id="menu_toggle"><i class="fa fa-bars" width="300px"><h2></h2></i></a>
                     </div>
                     <ul class="nav navbar-nav navbar-right">
                       <li class="">
                         <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                           <img src="<?php echo base_url(); ?>assets/imagenes/<?php echo $key->foto; ?>" alt=""><?php echo $key->nombre.' '.$key->apellido; ?>
                           <span class=" fa fa-angle-down"></span>
                         </a>
                         <ul class="dropdown-menu dropdown-usermenu pull-right">
                           <li><?php echo '<a href="'.base_url().'usuario/visualizar/'.$key->cod_usuario.'""><i class="fa fa-sign-out pull-right"></i> Perfil </a>'; ?></li>
                           <li><a href="<?php echo base_url(); ?>inicio/logout"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                         </ul>
                       </li>
                     </ul>
                   </nav>
                 </div>
         </div>
