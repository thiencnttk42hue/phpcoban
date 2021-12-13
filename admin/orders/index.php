<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/icheck/skins/all.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">
</head>
<body>

<?php
include '../../dbconnect.php';
$stmt = $pdo->prepare('SELECT `orders`.`id` AS orderId, `orders`.`name` AS orderName, `orders`.`desc` AS orderDesc, `orders`.`created_at` AS orderCreate_at,
                       `orders`.`status` AS orderStatus , `customers`.`fullname` AS customerName 
                       FROM `orders` INNER JOIN `customers` ON `orders`.`customer_id` = `customers`.`id`');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
?>

<div class="card-body">
 <h4 class="card-title">DANH SÁCH ĐƠN HÀNG</h4>
 <a class="btn btn-primary" style = "margin-bottom:10px;" href="create.php">Thêm</a>
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Số thứ tự</th>
        <th>Tên đơn hàng</th>
        <th>Mô tả đơn hàng</th>
        <th>Ngày lập</th>
        <th>Trạng thái</th>
        <th>Tên Khách hàng</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;  
        while($row = $stmt->fetch()){ 
            ?>
      <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $row['orderName'] ?></td> 
        <td><?php echo $row['orderDesc'] ?></td> 
        <td><?php echo $row['orderCreate_at'] ?></td> 
        <td><?php if($row['orderStatus'] == 1){echo 'Đã duyệt';}else echo 'Chưa duyệt'; ?></td> 
        <td><?php echo $row['customerName'] ?></td> 
        <td><a class="btn btn-primary" href="edit.php?orderId=<?php echo $row['orderId']?>">Sửa</a></td> 
        <td><a class="btn btn-primary" href="index.php?orderId=<?php echo $row['orderId']?>">Xóa</a></td>
        <td><a class="btn btn-primary" href="">Xem chi tiết</a></td>     
      </tr>    
      <?php }?>
    </tbody>
  </table>
</div>
  
</body>
</html>