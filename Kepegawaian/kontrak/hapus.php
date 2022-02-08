<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM kontrak WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: ../kontrak');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>