<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Jabatan Pegawai</title>
</head>

<body>
    <header>
        <h3>Jabatan Pegawai</h3>
    </header>

    <nav>
        <a href="create.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Jabatan</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM jabatan";
        $query = mysqli_query($db, $sql);

        $no=1;
        while($jabatan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$no++."</td>";
            echo "<td>".$jabatan['name']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$jabatan['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$jabatan['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    </body>
</html>