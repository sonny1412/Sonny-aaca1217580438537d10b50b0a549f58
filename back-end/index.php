<?php 
session_start();
require 'db.php';

$username = $_GET["id"];
header("Location: ../front-end/index.html");
?>