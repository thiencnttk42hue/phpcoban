
<?php
include '../../dbconnect.php';
if(!isset($_GET['productId'])){
    echo 'spam';
    die();
}
// đổ dữ liệu
$productId = $_GET['productId'];
$stmt = $pdo->prepare('SELECT `product`.`id`, `products`.`name`,`products`.`price`,`products`.`view`,`products`.`discount`,`categories`.`name`,`brands`.`name`
                       FROM `products` INNER JOIN `categories` ON `products`.`category_id` = `categories`.`id` INNER JOIN `brands` on `brands`.`id` = `products`.`brand_id`
                       WHERE `products`.`id` as productId = :productId');    
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute(array('productId' => $productId));
?>