<?php
require_once '../../_config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $statement = $conn->prepare("DELETE from  list_binatang where id=:id");
    $statement->bindParam(':id', $id);
    $id = $_POST['id'];
    $statement->execute();
    $alert = ['type' => 'success', 'message' => 'Data berhasil dihapus'];
    header('Location: /pages/list-binatang/index.php?alert=' . json_encode($alert));
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $pageTitle = 'Hapus Item';
    $page = 'list-binatang';
    $content = $dir . '/views/list-binatang/delete.php';
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * from list_binatang where id=:id limit 1");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $res = $stmt->fetchObject();
    include $dir . '/layout.php';
}
$conn = null;
