<?php

include("config.php");

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $name = $_POST['name'];

    $sql = "UPDATE `jabatan` SET `name` = '$name' WHERE `jabatan`.`id` = $id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: ../jabatan');
    } else {
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>