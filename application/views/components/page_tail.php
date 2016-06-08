		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url('assets/js/jquery.2.1.1.min.js');?>"></script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script src="<?php echo base_url('assets/js/jquery.1.11.1.min.js');?>"></script>
		<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url('assets/js/jquery.min.js');?>'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo base_url('assets/js/jquery1x.min.js');?>'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('assets/js/jquery.mobile.custom.min.js');?>'>"+"<"+"/script>");
		</script>
		
		<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="<?php echo base_url('assets/js/excanvas.min.js');?>"></script>
		<![endif]-->
		
<?php $url = $this->uri->segment(2); if ($url=='edit'||$url=='view'||$url=='profile'||$url=='editprofile'||$url=='changepassword'){ ?>
		<script src="<?php echo base_url('assets/js/jquery-ui.custom.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.ui.touch-punch.min.js');?>"></script>		
		<script src="<?php echo base_url('assets/js/jquery.gritter.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/bootbox.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.easypiechart.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.hotkeys.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap-wysiwyg.min.js');?>"></script>
		<script src="<?php echo base_url('assets/validator/bootstrapValidator.js');?>"></script>
    	<script src="<?php echo base_url('assets/validator/costumv.js');?>"></script>
		<script src="<?php echo base_url('assets/js/select2.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/fuelux.spinner.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap-editable.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/ace-editable.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.maskedinput.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/editpage.js');?>"></script>
<?php } else if ($url=='mail'){ ?>
		<script src="<?php echo base_url('assets/js/bootstrap-tag.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.hotkeys.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap-wysiwyg.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/mail.js');?>"></script>
<?php }else{ ?>
		<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.dataTables.bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/dataTables.tableTools.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/dataTables.colVis.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery-ui.custom.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.ui.touch-punch.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.easypiechart.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.sparkline.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.flot.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.flot.pie.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.flot.resize.min.js');?>"></script>
<?php } ?>		
		<!-- ace scripts -->
		<script src="<?php echo base_url('assets/js/ace-elements.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/ace.min.js');?>"></script>
		
<?php $url = $this->uri->segment(1); $urll = $this->uri->segment(2); if ($url==null||$url=='dashboard'||$urll=='login'){ ?>
		<script src="<?php echo base_url('assets/js/dashboard.js');?>"></script>
<?php }elseif ($url=='employees'&& $urll==null){ ?>
		<script src="<?php echo base_url('assets/js/datatables.js');?>"></script>
<?php }?>
	</body>
</html>