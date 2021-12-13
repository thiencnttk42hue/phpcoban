<?php
include '../../dbconnect.php';
if(!isset($_GET['id'])){
    echo 'spam';
    die();
}
// đổ dữ liệu
$customerId = $_GET['id'];
$stmt = $pdo->prepare('SELECT * from customers where id = :id');    
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute(array('id' => $customerId));
?>