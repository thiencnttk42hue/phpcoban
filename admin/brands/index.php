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
$stmt = $pdo->prepare('SELECT * from brands');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
?>

<div class="card-body">
 <h4 class="card-title">DANH SÁCH NHÃN HÀNG</h4>
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Số thứ tự</th>
        <th>Tên nhãn hàng</th>
        <th>Mô tả Nhãn hàng</th>
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
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['desc'] ?></td> 
        <td><a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']?>">Sửa</a></td> 
        <td><a class="btn btn-primary" href="index.php?id=<?php echo $row['id']?>">Xóa</a></td>     
      </tr>    
      <?php }?>
    </tbody>
  </table>
  <a class="btn btn-primary" style = "margin-top:10px;" href="create.php">Thêm</a>
</div>
  
</body>
</html>