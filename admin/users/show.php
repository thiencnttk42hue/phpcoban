<?php
include '../../dbconnect.php';
if(!isset($_GET['id'])){
    echo 'spam';
    die();
}
// đổ dữ liệu
$userId = $_GET['id'];
$stmt = $pdo->prepare('SELECT * from users where id = :id');    
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute(array('id' => $userId));
?>