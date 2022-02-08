<!DOCTYPE html>
<html>

<head>
    <title>halaman create</title>
</head>

<body>
    <header>
        <h3>halaman create</h3>
    </header>

    <form action="create-process.php" method="POST">

        <p>
            <label for="nama">Nama pegawai: </label>
            <input type="text" name="name" placeholder="Nama pegawai" />
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
            <input type="submit" value="Submit" name="submit" />
        </p>

    </form>

</body>

</html>