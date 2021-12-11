<?php
include '../dbconnect.php';
include '../helpers/ramdom.php';
/**
 * Seed data for brand table
 */
$stmt = $pdo->prepare('INSERT INTO brands (`name`, `desc`) values (:name, :desc)');
$i = 1;
while($i<= 10){
    $nameValue= rand(0,4);
    $descValue= rand(0,4);
    $name= $nameBrand[$nameValue];
    $desc = $descBrand[$descValue];
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':desc', $desc, PDO::PARAM_STR);
    $stmt->execute();
    $i++;
}
/**
 * Seed data for categories table
 */
$stmt = $pdo->prepare('INSERT INTO categories (`name`) values (:name)');
$i = 1;
while($i<= 10){
    $nameValue= rand(0,4);   
    $name= $nameCategory[$nameValue];    
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->execute();
    $i++;
}
// /**
//  * Seed data for customers table
//  */
$stmt = $pdo->prepare('INSERT INTO customers (`fullname`, `email`, `pass`, `adress`, `phone`) values (:fullname, :email, :pass, :adress, :phone)');
$i = 1;
while($i<= 10){
    $fullNameValue= rand(0,4);
    $emailValue = rand(0,4);
    $passValue = rand(0, 4);
    $adressValue = rand(0, 4);
    $phoneValue = rand(0, 4); 
    $fullName= $fullNameCustomer[$fullNameValue];
    $email = $emailCustomer[$emailValue];
    $pass = $passCustomer[$passValue];
    $adress = $adressCustomer[$adressValue];
    $phone = $phoneCustomer[$phoneValue];    
    $stmt->bindParam(':fullname', $fullName, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
    $stmt->bindParam(':adress', $adress, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->execute();
    $i++;
}
// /**
//  * Seed data for users table
//  */
$stmt = $pdo->prepare('INSERT INTO users (`username`, `pass`, `role`) values (:username, :pass, :roles)');
$i = 1;
while($i<= 10){
    $userNameValue= rand(0,4);
    $passValue = rand(0,4);
    $roleValue = rand(0,4);

    $userName = $userNameUser[$userNameValue];
    $pass = $passUser[$passValue];
    $role = $roleUser[$roleValue];
    
    $stmt->bindParam(':username', $userName, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
    $stmt->bindParam(':roles', $role, PDO::PARAM_STR);   
    $stmt->execute();
    $i++;
}
// /**
//  * Seed data for products table
//  */
$stmt = $pdo->prepare('INSERT INTO products (`name`, `price`, `view`, `discount`, `brand_id`, `category_id`) values (:names, :price, :view, :discount, :brand_id, :category_id)');
$i = 1;
while($i <= 100){
    $namePValue = rand(0, 9);
    $pricePValue = rand(0, 7);
    $disCountPValue = rand(0, 9);
    
    
    $name = $nameProduct[$namePValue];
    $price = $priceProduct[$pricePValue];
    $view = rand(100, 10000000);
    $discount = $disCountProduct[$disCountPValue];
    $brand_id = rand(1, 10);
    $category_id = rand(1, 10);

    
    $stmt->bindParam(':names', $name, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_STR);
    $stmt->bindParam(':view', $view, PDO::PARAM_STR);
    $stmt->bindParam(':discount', $discount, PDO::PARAM_STR);
    $stmt->bindParam(':brand_id', $brand_id, PDO::PARAM_STR);
    $stmt->bindParam(':category_id', $category_id, PDO::PARAM_STR);
    $stmt->execute();
    $i++;
}
/**
* Seed data for medias table
*/
$stmt = $pdo->prepare('INSERT INTO medias (`name`, `desc`, `priority`, `product_id`) values (:names, :descs, :priority, :product_id)');
$i = 1;
while($i <= 20){
    $nameMValue = rand(0, 4);
    $descMValue = rand(0, 4);

    $name = $nameMedia[$nameMValue];
    $desc = $descMedia[$descMValue];
    $priority = rand(1, 5);
    $product_id = rand(1, 100);

    $stmt->bindParam(':names', $name, PDO::PARAM_STR);
    $stmt->bindParam(':descs', $desc, PDO::PARAM_STR);
    $stmt->bindParam(':priority', $priority, PDO::PARAM_STR);
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_STR);
    $stmt->execute();
    $i++;
}
/**
* Seed data for orders table
*/
$stmt = $pdo->prepare('INSERT INTO orders (`name`, `desc`, `created_at`, `status`, `customer_id`) values (:names, :descs, :created_at, :stutus ,:customer_id)');
$i = 1;
while($i <= 20){
    $nameOValue = rand(0, 4);
    $descOValue = rand(0, 4);
    $created_atValue = rand(0, 4);

    $name = $nameOrder[$nameOValue];
    $desc = $descOrder[$descOValue];
    $created_at = $created_atOrder[$created_atValue];
    $status = rand(0,1);
    $customer_id = rand(1, 10);
    $stmt->bindParam(':names', $name, PDO::PARAM_STR);
    $stmt->bindParam(':descs', $desc, PDO::PARAM_STR);
    $stmt->bindParam(':created_at',$created_at, PDO::PARAM_STR);
    $stmt->bindParam(':stutus', $status, PDO::PARAM_STR);
    $stmt->bindParam(':customer_id', $customer_id, PDO::PARAM_STR);
    $stmt->execute();
    $i++;
}
/**
* Seed data for order_details table
*/
$stmt = $pdo->prepare('INSERT INTO order_details (`product_id`, `quantity`, `order_id`) values (:product_id, :quantity, :order_id)');
$i = 1;
while($i <= 20){ 
    $product_id = rand(0,100);
    $quantity = rand(1, 10);
    $order_id = rand(1, 20);

    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_STR);
    $stmt->bindParam(':quantity', $quantity, PDO::PARAM_STR);
    $stmt->bindParam(':order_id',$order_id, PDO::PARAM_STR);
    
    $stmt->execute();
    $i++;
}
