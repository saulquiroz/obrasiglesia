

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>OBRA IGLESIA </h3>
              </div>


            </div>

            <div class="clearfix"></div>
      
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      
                      <h3>Informacion General</h3>
                      <h3></h3>

                      <ul class="list-unstyled user_data">
                        <li><b>Nombre  :</b>
                            <i class="fa fa-map-marker user-profile-icon"></i> <?php echo $result->nombre ?>
                        </li>
                        
                        <li><b>Sigla  :</b>
                            <i class="fa fa-header user-profile-icon"></i> <?php echo $result->sigla ?>
                        </li>

                        <li><b>Congregacion  :</b>

                          <i class="fa fa-home user-profile-icon"></i> <?php echo $result->congregacion ?>
                        </li>
                        <li><b>Fecha de creacion  :</b>
                            <i class="fa fa-calendar user-profile-icon"></i> <?php echo $result->fechaCreacion ?>
                        </li>

                        <li class="m-top-xs"><b>NIT  :</b>

                          <i class="fa fa-cubes user-profile-icon"></i> <?php echo $result->NIT ?>

                        </li>

                        <li class="m-top-xs"><b>Area de Accion  :</b>

                          <i class="fa fa-crosshairs user-profile-icon"></i> <?php echo $result->areaDeAccion ?>

                        </li>
                        <li class="m-top-xs"><b>Horario de atencion  :</b>

                          <i class="fa fa-clock-o user-profile-icon"></i> <?php echo $result->horarioAtencion ?>

                        </li>
                        <li class="m-top-xs"><b>Poblacion Meta  :</b>

                          <i class="fa fa-users user-profile-icon"></i> <?php echo $result->poblacionMeta ?>

                        </li>

                        <hr>


                        <h3>Datos Geograficos</h3>



                        <li class="m-top-xs"><b>Departametno  :</b>

                          <i class="fa fa-map-marker user-profile-icon"></i> <?php echo $result->departamento ?>

                        </li>
                        <li class="m-top-xs"><b>Provincia  :</b>

                          <i class="fa fa-map-marker user-profile-icon"></i> <?php echo $result->provincia ?>

                        </li>
                        <li class="m-top-xs"><b>Municipio  :</b>

                          <i class="fa fa-map-marker user-profile-icon"></i> <?php echo $result->municipio ?>

                        </li>
                        <li class="m-top-xs"><b>Comunidad/Zona/Urbana  :</b>

                          <i class="fa fa-map-marker user-profile-icon"></i> <?php echo $result->localidadComunidad ?>

                        </li>
                        <li class="m-top-xs"><b>Direccion  :</b>

                          <i class="fa fa-map-marker user-profile-icon"></i> <?php echo $result->direccion ?>

                        </li>
                        <li class="m-top-xs"><b>Telefono  :</b>

                          <i class="fa fa-phone user-profile-icon"></i> <?php echo $result->telefono_a ?>

                        </li>
                        <li class="m-top-xs"><b>Fax  :</b>

                          <i class="fa fa-fax user-profile-icon"></i> <?php echo $result->fax ?>

                        </li>
                        <li class="m-top-xs"><b>Casilla  :</b>

                          <i class="fa fa-fax user-profile-icon"></i> <?php echo $result->casilla ?>

                        </li>
                        <li class="m-top-xs"><b>Pagina Web  :</b>

                          <i class="fa fa-external-link user-profile-icon"></i> <?php echo $result->paginaWeb ?>

                        </li>
                        <li class="m-top-xs"><b>Correo electronico  :</b>

                          <i class="fa fa-at user-profile-icon"></i> <?php echo $result->email ?>

                        </li>
                        <hr>


                        <h3>Informacion Jurisdiccion</h3>




                        <li class="m-top-xs"><b>Vicaria o Zona Pastoral  :</b>

                          <i class="fa fa-home user-profile-icon"></i> <?php echo $result->vicariaZonaPastoral ?>

                        </li>
                        <li class="m-top-xs"><b>Parroquia  :</b>

                          <i class="fa fa-home user-profile-icon"></i> <?php echo $result->parroquia ?>

                        </li>



                        


                        


                        


                      </ul>



                      <hr><hr>
                      <?php echo '<a href="'.base_url().'proteccion/edit/'.$result->cod_obrasdatos.'" class="btn btn-danger"><i class="fa fa-edit"></i> Editar Perfil </a>'; ?>

                    <a href="<?php echo base_url(); ?>usuario/pdf" class="btn btn-primary" align="right"><i class="fa fa-file-pdf-o"></i> Expotar a PDF</a>

                      <br />



                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      
                      <h3>Informacion Responasble de la obra</h3>





                        <li class="m-top-xs"><b>Nombre del Responsable  :</b>

                          <i class="fa fa-user user-profile-icon"></i> <?php echo $result->nombre_obra ?>

                        </li>
                        <li class="m-top-xs"><b>Cargo en la Obra  :</b>

                          <i class="fa fa-gears user-profile-icon"></i> <?php echo $result->cargo_obra ?>

                        </li>
                        <li class="m-top-xs"><b>Profesion  :</b>

                          <i class="fa fa-fire user-profile-icon"></i> <?php echo $result->profesion_obra ?>

                        </li>
                        <li class="m-top-xs"><b>Fecha de Nombramiento  :</b>

                          <i class="fa fa-calendar user-profile-icon"></i> <?php echo $result->fecha_obra ?>

                        </li>
                        <li class="m-top-xs"><b>Correo Electronico  :</b>

                          <i class="fa fa-at user-profile-icon"></i> <?php echo $result->email_obra ?>

                        </li>
                        <li class="m-top-xs"><b>Telefono  :</b>

                          <i class="fa fa-phone user-profile-icon"></i> <?php echo $result->telefono_obra ?>

                        </li>
                        <hr>




                      <h3>Informacion del Representante legal de la obra</h3>



                        <li class="m-top-xs"><b>Nombre del Representante  :</b>

                          <i class="fa fa-user user-profile-icon"></i> <?php echo $result->nombre_legal ?>

                        </li>
                        <li class="m-top-xs"><b>Profesion :</b>

                          <i class="fa fa-fire user-profile-icon"></i> <?php echo $result->profesion_legal ?>

                        </li>
                        <li class="m-top-xs"><b>Correo electronico  :</b>

                          <i class="fa fa-at user-profile-icon"></i> <?php echo $result->email_legal ?>

                        </li>
                        <li class="m-top-xs"><b>Telefono  :</b>

                          <i class="fa fa-phone user-profile-icon"></i> <?php echo $result->telefono_legal ?>

                        </li>
                        <li class="m-top-xs"><b>Numero de tetimonios de poder general y administrativo  :</b>

                          <i class="fa fa-paste user-profile-icon"></i> <?php echo $result->numtestimonios_legal ?>

                        </li>
                        <hr>


                        <h3>Informacion Economica-Financiera </h3>



                        <li class="m-top-xs">
                          <b>Monto invertido  :</b>

                          <i class="fa fa-dollar user-profile-icon"></i> <?php echo $result->monto_invertido ?>

                        </li>
                        <li class="m-top-xs">
                          <b>Ingresos  :</b>

                          <i class="fa fa-dollar user-profile-icon"></i> <?php echo $result->ingresos ?>

                        </li>

                      <hr>
                      <h3>Gastos en Servicios Basicos</h3>
                     <li class="m-top-xs">
                      <b>Gasto  :</b>

                          <i class="fa fa-external-link user-profile-icon"></i> <?php echo $result->gasto ?>

                        </li>
                        <li class="m-top-xs">
                          <b>Gasto en agua  :</b>

                          <i class="fa fa-tint user-profile-icon"></i> <?php echo $result->agua ?>

                        </li>
                        <li class="m-top-xs">
                          <b>Gasto en electricidad  :</b>

                          <i class="fa fa-bolt user-profile-icon"></i> <?php echo $result->electricidad ?>

                        </li>
                        <li class="m-top-xs">
                          <b>Gasto en gas natural  :</b>

                          <i class="fa fa-filter user-profile-icon"></i> <?php echo $result->gas_natural ?>

                        </li>
                         <li class="m-top-xs">
                          <b>Gasto en gas licuado  :</b>

                          <i class="fa fa-filter user-profile-icon"></i> <?php echo $result->gas_licuado ?>

                        </li>
                         <li class="m-top-xs">
                          <b>Gasto en telefono  :</b>

                          <i class="fa fa-phone user-profile-icon"></i> <?php echo $result->telefono_b ?>

                        </li>
                         <li class="m-top-xs">
                          <b>Gasto de internet  :</b>

                          <i class="fa fa-laptop user-profile-icon"></i> <?php echo $result->internet ?>
                        </li>

                        <hr>



                          <h3>Datos Adicionales</h3>
                        

                        
                         <li class="m-top-xs">
                          <b>Numero de Formulario :</b>

                          <i class="fa fa-paste user-profile-icon"></i> <?php echo $result->numero_formulario ?>

                        </li>
                         <li class="m-top-xs">
                          <b>Nombre del Formulario  :</b>

                          <i class="fa fa-paste user-profile-icon"></i> <?php echo $result->nombre_formulario ?>

                        </li>
                         <li class="m-top-xs">
                          <b>Nombre del empadronador  :</b>

                          <i class="fa fa-user user-profile-icon"></i> <?php echo $result->nombre_empadronador ?>

                        </li>
                         <li class="m-top-xs">
                          <b>Fecha de llenado  :</b>

                          <i class="fa fa-calendar user-profile-icon"></i> <?php echo $result->fecha_llenado ?>

                        </li>

                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
