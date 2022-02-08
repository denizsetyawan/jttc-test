<?php

include("config.php");

if(isset($_POST['submit'])){

    $nama = $_POST['name'];

    $sql = "INSERT INTO `kontrak` (`name`) VALUES ('$nama')";
    
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: ../kontrak?status=sukses');
    } else {
        header('Location: ../kontrak?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>