<?php
function add_metatitle($string){
	$CI =& get_instance();
	$CI->data['metatitle'] = e($string). ' - ' . $CI->data['metatitle'];
}

function e($string){
	return htmlentities($string);
}

function success($message){
	return '<div class="alert alert-success" id="alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>'.$message.'</div>';
}

function failed($message){
	return '<div class="alert alert-danger" id="alert-failed"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>'.$message.'</div>';
}

function error_login($message){
	return '<div class="alert alert-danger" id="alert-failed"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>'.$message.'</div>';
}

function rupiah($angka)
{
	if($angka==null)
	{
		return "Kosong";
	}
	else
	{
		$jumlah_desimal="0";
		$pemisah_desimal=",";
		$pemisah_ribuan=".";
		return  $rupiah="Rp. ".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan).",-";
	}
}

function age($date_of_birth){
	$change = date_format(date_create($date_of_birth), 'Y');
	$year_now = date('Y');
	return $usia = $year_now - $change;
}