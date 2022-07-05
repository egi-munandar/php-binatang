<?php
require_once '../../_config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $statement = $conn->prepare("UPDATE list_binatang set nama_binatang=:nb, deskripsi=:desk where id=:id");
    $statement->bindParam(':id', $id);
    $statement->bindParam(':nb', $nama_binatang);
    $statement->bindParam(':desk', $deskripsi);
    $id = $_POST['id'];
    $nama_binatang = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $statement->execute();
    $alert = ['type' => 'success', 'message' => 'Data berhasil dirubah'];
    header('Location: /pages/list-binatang/index.php?alert=' . json_encode($alert));
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $pageTitle = 'Edit Item';
    $page = 'list-binatang';
    $content = $dir . '/views/list-binatang/edit.php';
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * from list_binatang where id=:id limit 1");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $res = $stmt->fetchObject();
    include $dir . '/layout.php';
}
$conn = null;
