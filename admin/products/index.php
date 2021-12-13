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
$stmt = $pdo->prepare('SELECT `products`.`id` as productId, `products`.`name` as productName,`products`.`price`,`products`.`view`,`products`.`discount`,`categories`.`name` as categoryName,`brands`.`name`as brandName
                       FROM `products` INNER JOIN `categories` ON `products`.`category_id` = `categories`.`id` INNER JOIN `brands` on `brands`.`id` = `products`.`brand_id`');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
?>

<div class="card-body">
 <h4 class="card-title">DANH SÁCH SẢN PHẨM</h4>
 <a class="btn btn-primary" style = "margin-bottom:10px;" href="create.php">Thêm</a>
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Số thứ tự</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượt xem</th>      
        <th>Giảm giá</th>
        <th>Loại sản phẩm</th>
        <th>Nhãn hiệu</th>
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
        <td><?php echo $row['productName'] ?></td> 
        <td><?php echo $row['price'] ?></td> 
        <td><?php echo $row['view'] ?></td> 
        <td><?php echo $row['discount'] ?>%</td> 
        <td><?php echo $row['categoryName'] ?></td> 
        <td><?php echo $row['brandName'] ?></td> 
        <td><a class="btn btn-primary" href="edit.php?productId=<?php echo $row['productId']?>">Sửa</a></td> 
        <td><a class="btn btn-primary" href="index.php?productId=<?php echo $row['productId']?>">Xóa</a></td>     
      </tr>    
      <?php }?>
    </tbody>
  </table>
</div>
  
</body>
</html>