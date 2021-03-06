<?php include '../functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Quản Lý Orders</title>
<?php ec_enqueue_css() ?>
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
<!--hàm xóa -->
  <div class="container-scroller">
    <!-- begin header -->
    <?php include '../inc/header.php' ?>
      <!-- end header -->
    <div class="container-fluid page-body-wrapper">
      <!-- begin sidebar -->
    <?php include '../inc/sidebar.php' ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
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
              </div>
            </div>       
          </div>
        </div>
        <?php include_once '../inc/footer.php' ?>   
      </div>     
    </div>
  </div> 
  <?php ec_enqueue_js() ?>  
  </body>
</html>