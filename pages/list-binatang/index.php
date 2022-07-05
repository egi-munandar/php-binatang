<?php
require_once('../../_config.php');
$pageTitle = 'List Binatang';
$page = 'list-binatang';

$sql = "select * from list_binatang";
$statement = $conn->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ);
$res = $statement->fetchAll();
var_dump($res);

$content = $dir . '/views/list-binatang/list-binatang.php';
include $dir . '/layout.php';
$conn = null;
