<?php
require_once '../../_config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $sql = "INSERT INTO list_binatang(nama_binatang, deskripsi) values('" . $_POST['nama'] . "', '" . $_POST['deskripsi'] . "')";
    // $conn->exec($sql);
    $statement = $conn->prepare("INSERT INTO list_binatang(nama_binatang, deskripsi) values(:nb, :desk)");
    $statement->bindParam(':nb', $nama_binatang);
    $statement->bindParam(':desk', $deskripsi);
    $nama_binatang = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $statement->execute();
    $alert = ['type' => 'success', 'message' => 'Data berhasil disimpan'];
    header('Location: /pages/list-binatang/index.php?alert=' . json_encode($alert));
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $pageTitle = 'Tambah Item';
    $page = 'list-binatang';
    $content = $dir . '/views/list-binatang/create.php';
    include $dir . '/layout.php';
}
$conn = null;
