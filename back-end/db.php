<?php
$link = mysqli_connect("127.0.0.1", "root", "", "soal_test");
if(mysqli_connect_errno()) {
    //echo "Connect error".mysqli_connect_error();
    //exit();
    die("Connect error".  mysqli_connect_error());
}
?>
