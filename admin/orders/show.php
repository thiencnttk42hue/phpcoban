<?php
include '../../dbconnect.php';
if(!isset($_GET['productId'])){
    echo 'spam';
    die();
}
// đổ dữ liệu
$orderId = $_GET['productId'];
$stmt = $pdo->prepare('SELECT `orders`.`id` AS orderId, `orders`.`name` AS orderName, `orders`.`desc` AS orderDesc, `orders`.`created_at` AS orderCreate_at, `orders`.`status` AS orderStatus , `customers`.`fullname` AS customerName 
                       FROM `orders` INNER JOIN `customers` ON `orders`.`customer_id` = `customers`.`id`
                       WHERE orderId = :orderId');    
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute(array('productId' => $orderId));
?>