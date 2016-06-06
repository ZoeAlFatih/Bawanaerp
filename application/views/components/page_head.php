<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo $metatitle; ?></title>

		<meta name="description" content="<?php echo $metatitle; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/4.6.3/css/font-awesome.min.css');?>" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url('assets/fonts/fonts.googleapis.com.css');?>" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/ace.min.css');?>" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url('assets/css/ace-part2.min.css');?>" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/ace-rtl.min.css');?>" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url('assets/css/ace-ie.min.css');?>" />
		<![endif]-->
		
		<!-- ace settings handler -->
		<script src="<?php echo base_url('assets/js/ace-extra.min.js');?>"></script>
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="<?php echo base_url('assets/js/html5shiv.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/respond.min.js');?>"></script>
		<![endif]-->
<?php $url = $this->uri->segment(2); if ($url=='edit'||$url=='view'||$url=='profile'||$url=='editprofile'||$url=='changepassword'){ ?>
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.custom.min.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.gritter.min.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/select2.min.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/datepicker.min.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-editable.min.css');?>" />
		<link href="<?php echo base_url('assets/validator/bootstrapValidator.css');?>" rel="stylesheet">
<?php } ?>
	</head>