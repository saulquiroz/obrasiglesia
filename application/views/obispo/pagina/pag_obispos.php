<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
 <div align="center">
<section id="work" class="parallax-section">
      <br><br><br>
 
      <div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1"><br><br>
        <div class="x_panel">
          <h2 align="center"><strong>RESULTADO DE LA BUSQUEDA DE OBISPOS</strong></h2>
            <div class="clearfix"></div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr align="center">
                  <th>Nombre</th>
                  <th>Lugar Nacimiento</th>
                  <th>Telefono</th>
                  <th>Tipo de Obispo</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($resultadoObispoTipo as $r) {
                    //$dataVenda = date(('d/m/Y'),strtotime($r->dataVenda));
                    //if($r->faturado == 1){$faturado = 'Sim';} else{ $faturado = 'Não';}
                    echo '<tr>';
                      echo '<td>'.$r->nombre.' '.$r->apellido.'</td>';
                      echo '<td>'.$r->lugarNacimiento.'</td>';
                      echo '<td>'.$r->telefono.'</td>';
                      echo '<td>'.$r->tipo.'</td>';
                      echo '<td>';
                      echo '<a href="'.base_url().'pag_obispo/visualizar/'.$r->cod_usuario.'" class="btn btn-primary"><i class="fa fa-eye"></i> Observar </a>';
                      echo '</td>';
                      echo '</tr>';
                }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

  </section>
    </div>
  <!-- Datatables -->
  <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net/js/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/jszip/dist/jszip.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>
  <!-- Datatables -->


  <script>
    $(document).ready(function() {

      $('#datatable').dataTable();

      $('#datatable-keytable').DataTable({
        keys: true
      });

      $('#datatable-responsive').DataTable();

      $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
      });

      $('#datatable-fixed-header').DataTable({
        fixedHeader: true
      });

      var $datatable = $('#datatable-checkbox');

      $datatable.dataTable({
        'order': [[ 1, 'asc' ]],
        'columnDefs': [
          { orderable: false, targets: [0] }
        ]
      });
      $datatable.on('draw.dt', function() {
        $('input').iCheck({
          checkboxClass: 'icheckbox_flat-green'
        });
      });
    });
  </script>
