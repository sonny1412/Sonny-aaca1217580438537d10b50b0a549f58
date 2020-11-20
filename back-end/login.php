<?php
date_default_timezone_set('Asia/Jakarta');
session_start();
require 'db.php';
if ($_GET["var"] == "login") {
    $uname = addslashes($_POST["username"]);
    $upass = addslashes(md5($_POST["password"]));
    $sql = "SELECT * FROM user WHERE username = '".$uname."'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result)){
    	$row = mysqli_fetch_object($result);
	    	if (trim($row->Password) == $upass) {
	    	$date = date('Y-m-d H:i:s');
	    	$sqlUpdateStatusLogin = "UPDATE user SET Status = ". 1 .", 	loginTime = '".$date. "'
	    							WHERE username = '".$uname."'";
	    	$result = mysqli_query($link,$sqlUpdateStatusLogin);
	    	if ($result) {
	    		header("Location: ../back-end/index.php?id=".$uname);
	    		}
    		}
    		else{
    			header("Location: ../front-end/login.html");
    		}

    }
}
?>