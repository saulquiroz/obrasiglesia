<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<div class="col-md-12 col-sm-12 col-xs-12">
    <br><br>
  <div class="x_panel">

      <h2 align="center"><strong>RESULTADO DE LA BUSQUEDA DE OBRAS</strong></h2>
      <div class="clearfix"></div>

      
    <div class="x_content">

      <table id="datatable-responsive" class="table table-striped table-bordered">
        <thead>
          <tr>

            <th>Sede Episcopal</th>
            <th>Nombre de la Obra</th>
            <th>Tipo de Obra</th>
            <th>Departamento</th>
            <th>Opcion</th>
          </tr>
        </thead>
        <tbody>
          <?php  foreach ($resultadoQuery as $r) {
              //$dataVenda = date(('d/m/Y'),strtotime($r->dataVenda));
              //if($r->faturado == 1){$faturado = 'Sim';} else{ $faturado = 'Não';}
              echo '<tr align="center">';
              echo '<td>'.$r['sede'].'</td>';
              echo '<td>'.$r['nombre'].'</td>';
              echo '<td>'.$r['obras'].'</td>';
              echo '<td>'.$r['departamento'].'</td>';
              echo '<td>';
              echo '<a href="'.base_url().'buscar/visualizar_religiosa/'.$r['cod_obrasdatos'].'" class="btn btn-primary btn"><i class="fa fa-mail-forward"></i> Detalle </a>';
              echo '</td>';
              echo '</tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Datatables -->
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
