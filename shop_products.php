<?php
include("connect.php");
if(isset($_POST["add_to_cart"])){ 
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_image = $_POST["product_image"];
    $product_quantity = 1;
    //select cart data based on condition
    $select_cart = mysqli_query($conn, "Select * from `cart` where name='$product_name'");
    if(mysqli_num_rows($select_cart)>0){
        $display_message="Sản phẩm đã có trong giỏ hàng";
        // echo "Sản phẩm đã có trong giỏ hàng";
    }else{
    //insert cart data in cart table
    $insert_products = mysqli_query($conn,"insert into `cart`(name,price,image,quantity) values('$product_name','$product_price','$product_image',$product_quantity)");
    $display_message="Đã thêm sản phẩm vào giỏ hàng";
    // echo "Sản phẩm đã thêm vào giỏ hàng";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/products.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    .title-comm {
    color: #fff;
    font-size: 18px;
    position: relative;
    margin-top: 30px;
    margin-bottom: 30px;
    font-weight: 700;
    background-color: #fff;
    text-align: center;
}
 
h3.title-comm:before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    margin-top: 0;
    border-top: 2px solid #d0d2d3;
    z-index: 1;
    display: block;
}

.title-comm .title-holder {
    min-width: 350px;
    height: 45px;
    background-color: #D93E30;
    height: auto;
    line-height: 45px;
    padding: 0px 20px;
    position: relative;
    z-index: 2;
    text-align: center;
    display: inline-block;
    min-width: 280px;
}
 
.title-holder:before {
    content: "";
    position: absolute;
    right: -16px;
    border-width: 0.1px;
    bottom: 0.1px;
    border-style: solid;
    border-color: #5c9efe transparent;
    display: block;
    width: 0;
    height: 0;
    border-top: 23px solid transparent;
    border-bottom: 22px solid transparent;
    border-left: 16px solid #D93E30;
}
 
.title-holder:after {
    content: "";
    position: absolute;
    left: -15.1px;
    border-width: 0.1px;
    bottom: 0.1px;
    border-style: solid;
    border-color: #5c9efe transparent;
    display: block;
    width: 0;
    height: 0;
    border-top: 23px solid transparent;
    border-bottom: 22px solid transparent;
    border-right: 15px solid #D93E30;
}

    </style>

</head>
<body>
    <?php include 'ingredient/header-customer1.php'; include 'ingredient/title-small.php';?>
    <div class="container">
        <?php include 'products/products-noi-bac.php'; ?>
        <?php include 'products/products-ban-chay.php'; ?>
        <?php include 'products/products-nhiet-doi.php'; ?>
        <?php include 'products/products-nhap-khau.php'; ?>
        <?php include 'products/products-gio-qua-trai-cay.php'; ?>
    </div>
    <?php include 'ingredient/footer.php'; ?>
</body>
</html>