<?php include '../functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Quản Lý Brands</title>
<?php ec_enqueue_css() ?>
</head>
<body>
<?php
include '../../dbconnect.php';
$stmt = $pdo->prepare('SELECT * from brands');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
?>
<!--hàm xóa -->
<?php 
if(isset($_GET['id'])){   
  $stmt = $pdo->prepare("DELETE FROM `brands` WHERE id = :id");
  $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
  $stmt->setFetchMode(PDO::FETCH_ASSOC);  
  if($stmt->execute()){
    header('location: index.php');
  }
}
?>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <!-- begin header -->
    <?php include '../inc/header.php' ?>
      <!-- end header -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <!-- begin sidebar -->
    <?php include '../inc/sidebar.php' ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title">DANH SÁCH NHÃN HÀNG</h4>
                <a class="btn btn-primary" style = "margin-bottom:10px;" href="create.php">Thêm</a>
                  <table class="table table-striped">
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
                </div>
              </div>
            </div>       
          </div>
        </div>
      </div>      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    <?php include '../inc/footer.php' ?>
  </div> 
  <?php ec_enqueue_js()?>   
  </body>
</html>