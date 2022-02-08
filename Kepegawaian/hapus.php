<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM pegawai WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: ../Kepegawaian');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>