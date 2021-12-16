<?php include_once '../functions.php' ?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
    <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
        <div class="profile-image">
            <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
            <div class="dot-indicator bg-success"></div>
        </div>   
        </a>
    </li>
    <li class="nav-item nav-category">Menu</li>
    <li class="nav-item">
        <a class="nav-link" href=" <?php echo get_admin_url("brands/index.php") ?>">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Brands</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo get_admin_url("categories/index.php")?>">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Categories</span>        
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo get_admin_url("customers/index.php")?>">
        <i class="menu-icon typcn typcn-shopping-bag"></i>
        <span class="menu-title">Customers</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo get_admin_url("products/index.php")?>">
        <i class="menu-icon typcn typcn-th-large-outline"></i>
        <span class="menu-title">Products</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo get_admin_url("orders/index.php")?>">
        <i class="menu-icon typcn typcn-bell"></i>
        <span class="menu-title">Orders</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo get_admin_url("medias/index.php")?>">
        <i class="menu-icon typcn typcn-document-add"></i>
        <span class="menu-title">Medias</span>
        </a>    
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo get_admin_url("users/index.php")?>">
        <i class="menu-icon typcn typcn-document-add"></i>
        <span class="menu-title">Users</span>
        </a>    
    </li>
    </ul>
</nav>