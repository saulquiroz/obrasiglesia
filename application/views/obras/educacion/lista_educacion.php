<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <!--<div class="title_left">
                <h3>Registro Usuario</h3>
              </div>-->
            </div>
            <div class="clearfix"></div>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">

      <h2 align="center"><strong>Lista de obras de Educacion</strong></h2>
      <div class="clearfix"></div>

    <div class="x_content">

      <table id="datatable" class="table table-striped table-bordered">
        <thead>
          <tr align="center">
            <th>Fecha Creacion</th>
            <th>Sede Episcopal</th>
            <th>Nombre de la Obra</th>
            <th>Tipo de Obra</th>
            <th>Departamento</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($resultado as $r) {
              //$dataVenda = date(('d/m/Y'),strtotime($r->dataVenda));
              //if($r->faturado == 1){$faturado = 'Sim';} else{ $faturado = 'Não';}
              echo '<tr>';
            echo '<td >'.$r->fechaCreacion.'</td>';
              echo '<td>'.$r->sede.'</td>';
              echo '<td>'.$r->nombre.'</td>';
              echo '<td>'.$r->obras.'</td>';
              echo '<td>'.$r->departamento.'</td>';
            echo '<td>';
          //  if($this->permission->checkPermission($this->session->userdata('permissao'),'vVenda')){
          //  if($this->permission->checkPermission($this->session->userdata('permissao'),'eVenda')){
          //      echo '<a style="margin-right: 1%" href="'.base_url().'index.php/vendas/editar/'.$r->numero_factura.'" class="btn btn-info tip-top" title="Editar la venta"><i class="icon-pencil icon-white"></i></a>';
          //  }
          //  if($this->permission->checkPermission($this->session->userdata('permissao'),'dVenda')){
              echo '<a href="'.base_url().'obras/visualizar_educacion/'.$r->cod_obrasdatos.'" class="btn btn-primary btn-xs"><i class="fa fa-mail-forward"></i> Detalle </a>';
        //    }
              echo '<a href="'.base_url().'obras/delete_edu/'.$r->cod_obrasdatos.'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>';
  #            echo '<td align="center">';
              #echo '<a href="'.base_url().'usuario/editar/'.$r->cod_usuario.'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> borrar </a>';
              echo '</td>';
              echo '</tr>';

          }?>
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
