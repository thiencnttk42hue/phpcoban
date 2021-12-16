<?php
include '../../dbconnect.php';
if(!isset($_GET['mediaId'])){
    echo 'spam';
    die();
}
// đổ dữ liệu
$mediaId = $_GET['mediaId'];
$stmt = $pdo->prepare('SELECT `medias`.`id` AS mediaId, `medias`.`name` AS mediaNames, `medias`.`desc` AS mediaDesc, `medias`.`priority` AS mediaPriority, `products`.`name` AS productName
                       FROM `medias` INNER JOIN `products` ON `medias`.`product_id` = `products`.`id`
                       WHERE `medias`.`id` AS mediaId = :mediaID');    
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute(array('mediaId' => $mediaId));
?>