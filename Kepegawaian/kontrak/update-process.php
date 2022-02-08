<?php

include("config.php");

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $name = $_POST['name'];

    $sql = "UPDATE `kontrak` SET `name` = '$name' WHERE `kontrak`.`id` = $id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: ../kontrak');
    } else {
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>