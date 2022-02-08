<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Kontrak Pegawai</title>
</head>

<body>
    <header>
        <h3>Kontrak Pegawai</h3>
    </header>

    <nav>
        <a href="create.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kontrak</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM kontrak";
        $query = mysqli_query($db, $sql);

        $no=1;
        while($kontrak = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$no++."</td>";
            echo "<td>".$kontrak['name']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$kontrak['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$kontrak['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    </body>
</html>