<?php include './functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
  <?php ec_enqueue_css() ?>
</head>
<body>
  <div class="container-scroller">
    <!-- begin header -->
    <?php include './inc/header.php' ?>
      <!-- end header -->
    <div class="container-fluid page-body-wrapper">
      <!-- begin sidebar -->
      <?php include './inc/sidebar.php' ?>
      <!-- end sidebar -->
      <div class="main-panel">
        <?php include './inc/footer.php' ?>
      </div>

    </div>

  </div>
  <?php ec_enqueue_js() ?>
</body>
</html>