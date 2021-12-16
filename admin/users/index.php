<?php include '../functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Quản Lý Users</title>
<?php ec_enqueue_css() ?>
</head>
<body>

<?php
include '../../dbconnect.php';
$stmt = $pdo->prepare('SELECT * from users');
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
                <h4 class="card-title">DANH SÁCH USERS</h4>
                <a class="btn btn-primary" style = "margin-bottom:10px;" href="create.php">Thêm</a>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Số thứ tự</th>
                        <th>Tên đăng nhập</th>
                        <th>Password</th>
                        <th>Quyền</th>      
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
                        <td><?php echo $row['username'] ?></td> 
                        <td><?php echo $row['pass'] ?></td> 
                        <td><?php echo $row['role'] ?></td>  
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
        <?php include_once '../inc/footer.php' ?>   
      </div>     
    </div>
  </div> 
  <?php ec_enqueue_js() ?>  
  </body>
</html>