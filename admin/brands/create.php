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
    if(isset($_POST['name']) || isset($_POST['desc'])){
        echo 'spam';
        die();
    }   
?>
<?php 
    if(isset($_POST['btnThem'])){
        $nameBrand = $_POST['name'];    
        $descBrand = $_POST['desc'];
        if(!empty($nameBrand) && !empty($descBrand)){
            $stmt = $pdo->prepare('INSERT INTO brands (`name`, `desc`) values (:name, :desc)');
            $stmt->bindParam(':name', $nameBrand, PDO::PARAM_STR);
            $stmt->bindParam(':desc', $descBrand, PDO::PARAM_STR);
            $stmt->execute();
        }
        header("Location: index.php");
    } 
?>
<div class="card-body" style = " width:1000px; margin: 0 auto;">
    <h1 class="card-title">Thêm mới nhãn hiệu</h1>   
    <form class="forms-sample" action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên nhãn hiệu</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name ="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mô tả nhãn hiệu</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="desc">
        </div>
        <button type="submit" class="btn btn-success mr-2" name="btnThem">Submit</button>
        <a href ="index.php" class="btn btn-light">Cancel</a>
    </form>
</div>
</body>
