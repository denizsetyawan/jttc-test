<?php

include("config.php");

if(isset($_POST['submit'])){

    $nama = $_POST['name'];

    // buat query
    $sql = "INSERT INTO `jabatan` (`name`) VALUES ('$nama')";
    
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: ../jabatan?status=sukses');
    } else {
        header('Location: ../jabatan?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>