<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: index.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM pegawai WHERE id=$id";
$query = mysqli_query($db, $sql);
$pegawai = mysqli_fetch_assoc($query);

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
    <input type="hidden" name="id" value="<?php echo $pegawai['id'] ?>" />

        <p>
            <label for="nama">Nama pegawai: </label>
            <input type="text" name="name" placeholder="Nama pegawai" value="<?php echo $pegawai['name'] ?>" />
        </p>
        <p>
        <label>Jabatan : </label>
            <select name="jabatan">
                <?php
                include("config.php");
                $sql = "SELECT * FROM jabatan";
                $query = mysqli_query($db, $sql);
                while($jabatan = mysqli_fetch_array($query)){
                    
                        echo "<option value=".$jabatan['id'].">".$jabatan['name']."</option>";
                    }
                ?>
            </select>

        </p>
        <p>
            <label>Kontrak : </label>
            <select name="kontrak">
                <?php
                include("config.php");
                $sql = "SELECT * FROM kontrak";
                $query = mysqli_query($db, $sql);
                while($kontrak = mysqli_fetch_array($query)){
                        echo "<option value=".$kontrak['id'].">".$kontrak['name']."</option>";
                    }
                ?>
            </select>
        </p>
        <p>
            <input type="submit" value="Submit" name="update" />
        </p>

    </form>

</body>

</html>