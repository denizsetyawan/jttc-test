<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Kepegawaian</title>
</head>

<body>
    <header>
        <h3>Kepegawaian</h3>
    </header>

    <nav>
        <a href="create.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Kontrak</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $sql = "SELECT pegawai.id, pegawai.name, jabatan.name AS jabatan, kontrak.name AS kontrak
        FROM pegawai
        INNER JOIN jabatan
        ON pegawai.jabatan=jabatan.id
        INNER JOIN kontrak
        ON pegawai.jabatan=kontrak.id";
        $query = mysqli_query($db, $sql);

        $no=1;
        while($pegawai = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$no++."</td>";
            echo "<td>".$pegawai['name']."</td>";
            echo "<td>".$pegawai['jabatan']."</td>";
            echo "<td>".$pegawai['kontrak']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$pegawai['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$pegawai['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

        </tbody>
    </table>

    <hr>
    <ul>
        <li>
            <a href="jabatan">Jabatan</a>
        </li>
        <li>
            <a href="kontrak">Kontrak</a>
        </li>

    </ul>

</body>

</html>