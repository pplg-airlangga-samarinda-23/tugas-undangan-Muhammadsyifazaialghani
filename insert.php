<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "undangan";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    echo "Koneksi gagal :(";
}

if (isset($_POST)) {

    $nama = @$_POST['nama'];
    $ucapan = @$_POST['ucapan'];
    $keterangan = @$_POST['keterangan'];

    if ($nama != "" && $ucapan != "" && $keterangan != "") {
        var_dump($_POST);
        $sql = "INSERT INTO bukutamu (nama, ucapan, keterangan) VALUES ('$nama', '$ucapan', '$keterangan')";
        $connection->query($sql);
    }

    header("Location: http://localhost/tugas/tugas-undangan-ghani/tugas-undangan-Muhammadsyifazaialghani/index.php");
}