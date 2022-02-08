<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: kontrak.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM kontrak WHERE id=$id";
$query = mysqli_query($db, $sql);
$kontrak = mysqli_fetch_assoc($query);

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
        <input type="hidden" name="id" value="<?php echo $kontrak['id'] ?>" />

        <p>
            <label for="nama">Nama Kontrak: </label>
            <input type="text" name="name" placeholder="Nama Kontrak" value="<?php echo $kontrak['name'] ?>" />
        </p>
        <p>
            <input type="submit" value="Submit" name="update" />
        </p>

    </form>

    </body>
</html>