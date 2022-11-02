<?php
    require('koneksi.php');
?>

<?php
    date_default_timezone_set("Asia/Makassar");
    if(isset($_POST['submit'])){
        $artis = $_POST['artis'];
        $judul = $_POST['judul'];
        $link = $_POST['link'];
        $gambar = $_POST['foto'];
        $tanggal= date('Y:m:d');
        
        $format_file = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        $size = $_FILES['foto']['size'];
        $tipe = explode('.',$format_file);
        $tipe2 = $tipe[1];
        $rename = time() . '.' . $tipe2;
        $format_yang_diizinkan = array('jpg','png','jpeg');
        $max_size = 1000000;
        
        if(in_array($tipe2, $format_yang_diizinkan) === true){
            if($size < $max_size){
                move_uploaded_file($tmp_name, './file-foto/' . $rename);
                $sql_upload = mysqli_query($conn_log,"INSERT INTO `playlist`(`Penyanyi`, `Lagu`, `Link`,`Gambar`,`Tanggal`) VALUES ('".$artis."','".$judul."','".$link."','".$rename."','".$tanggal."')");
                if($sql_upload){
                    echo '<script language = "javascript">
                    alert("Data Berhasil Di Input") </script>';    
                }
                else{
                    echo '<script language = "javascript">
                    alert("Data Gagal Di Input") </script>' ;    
                }
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style_admin.css?v6">
        
</head>
<body >
    <nav class="Navigator">
        <div class="Brand">
            <div id="Depan" onclick="ubahheader()">Sing</div>
            <div id="Belakang" onclick="ubahheader1()">It</div>
        </div>
        <ul >
            <li><a href="admin.php">Home</a></li>
            <li><a href="admin_lihat.php">Edit Playlist</a></li>
            <li><a href="index.php">Logout</a></li>
            
            <li ><input class="btn" onclick="mode()" type="checkbox"></li>
        </ul>
        <div class="List-Nav-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </nav>
    <div class= "bungkus">
        <div class="containerplay">
            <h2>Add Your Playlist</h2>
            <div class="play">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class = "form">
                        <label for="">Artis</label>
                        <input type="text" name="artis" required>   
                        <label for="">Judul</label>
                        <input type="text" name="judul" required>
                        <label for="">Link</label>
                        <input type="text" name="link" required>
                        <label for="">Gambar</label>
                        <input type="file" name="foto" require>
                    </div>
                    <div class = "form">
                    <button type="submit" name="submit"><b>Submit</b></button>
                    </div>
                    
                    
                    
                </form>
            </div>
        </div>
    </div>
    <p>Copyright. Yanuar Gideon Simalango</p>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>