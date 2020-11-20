<?php 
session_start();
require 'db.php';
if(isset($_SESSION["loguser"])) {
	$userAktif = $_SESSION["loguser"];
	header("Location: ../front-end/index.html");
}
// 
?>