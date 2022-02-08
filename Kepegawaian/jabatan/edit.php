<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: jabatan.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM jabatan WHERE id=$id";
$query = mysqli_query($db, $sql);
$jabatan = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>halaman edit</title>
</head>

<body>
    <header>
        <h3>halaman edit</h3>
    </header>

    <form action="update-process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $jabatan['id'] ?>" />

        <p>
            <label for="nama">Nama Jabatan: </label>
            <input type="text" name="name" placeholder="Nama Jabatan" value="<?php echo $jabatan['name'] ?>" />
        </p>
        <p>
            <input type="submit" value="Submit" name="update" />
        </p>

    </form>

    </body>
</html>