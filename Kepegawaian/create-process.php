<?php

include("config.php");

if(isset($_POST['submit'])){

    $nama = $_POST['name'];
    $jabatan = $_POST['jabatan'];
    $kontrak = $_POST['kontrak'];

    $sql = "INSERT INTO `pegawai` (`name`, `jabatan`, `kontrak`) VALUES ('$nama', '$kontrak', '$jabatan')";
    
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: ../kepegawaian?status=sukses');
    } else {
        header('Location: ../kepegawaian?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>