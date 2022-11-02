<?php 

require 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($conn_log, "DELETE FROM `playlist` WHERE `id` = '".$id."'");

    if($hapus){
        echo '<script language = "javascript">
            alert("Hapus Berhasil"); document.location = "admin_lihat.php";</script>' ;
    }
}