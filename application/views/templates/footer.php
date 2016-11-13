<footer>
      <div class="pull-right">
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</div>


<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<!-- bootstrap-daterangepicker -->
<script src="<?php echo  base_url(); ?>assets/js/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datepicker/daterangepicker.js"></script>
<!-- jQuery Sparklines -->
<script src="<?php echo base_url(); ?>assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- Flot -->
<script src="<?php echo base_url() ?>assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<!-- Flot plugins -->


<!-- Custom Theme Scripts -->
<script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>

<script>
  $(document).ready(function() {
    $('#single_cal1').daterangepicker({
      singleDatePicker: true,
        showDropdowns: true,
      calender_style: "picker_1"
    });
    $('#single_cal2').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      calender_style: "picker_2"
    });
    $('#single_cal3').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      calender_style: "picker_3"
    });
    $('#single_cal4').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      showWeekNumbers: true,
      calender_style: "picker_4"
    });
  });
</script>

</body>
</html>
