<?php

include("config.php");

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $kontrak = $_POST['kontrak'];
    $jabatan = $_POST['jabatan'];

    $sql = "UPDATE `pegawai` SET `name` = '$name', `jabatan` = '$jabatan', `kontrak` = '$kontrak' WHERE `pegawai`.`id` = $id;";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: ../Kepegawaian');
    } else {
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>