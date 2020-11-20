<?php
session_start();
require 'db.php';
if($_GET["var"] == "register") {

    $uname = addslashes($_POST["username"]);
    $upass = addslashes(md5($_POST["password"]));
    $rpass = addslashes(md5($_POST["rpassword"]));

    if ($upass == $rpass){
	    $sqlRegis = "INSERT INTO user(Username, Password, Status, LoginTime) VALUES('".$uname."','".$upass."', NULL, NULL)";
	    $resultRegis = mysqli_query($link, $sqlRegis);

	    if ($resultRegis) {
	    	header("Location: ../front-end/login.html");
	    }
    }
    else{
    	header("Location: ../front-end/register.html");
    }
}
?>