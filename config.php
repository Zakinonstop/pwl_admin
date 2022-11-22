<?php
    $config = mysqli_connect("localhost","root","","diskusi_2481");
    if(!$config){
        die('Gagal terhubung ke MySQLi :'.mysqli_connect_error());
    }
?>