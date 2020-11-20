<?php
session_start();
$var = $_GET["act"];
switch ($var) {
	case 'cekstatus':
	require 'db.php';
		$username = "citra";
		$sqlCekStatus = "SELECT * 
						 FROM `user`
						 WHERE Username = '".$username."'";
		$result = mysqli_query($link,$sqlCekStatus);
		if($result){
			$row = json_encode(mysqli_fetch_all($result));
		}
		else{
			echo "gagal";
		}
		break;
}
?>