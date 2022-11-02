<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'sing_it';

    $conn_log = mysqli_connect($hostname, $username, $password, $database);

    if(!$conn_log){
        die("gagal konek".mysqli_connect_error());
    }
?>