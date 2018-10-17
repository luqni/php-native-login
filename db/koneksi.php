<?php


	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "surat";

	$link = mysqli_connect($db_host, $db_user, $db_password, $db_name)
	;

	if (!$link) {
		die("Gagal Terkoneksi".mysqli_connect_errono(). " - ".
			mysqli_connect_error() );
		exit();
	}else{
		echo "berhasil";
	}


?>