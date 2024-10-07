<?php
session_start();
include "connect.php";
if(isset($_POST["add_to_cart"])){ 
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_image = $_POST["product_image"];
    $product_quantity = 1;
    //chọn dữ liệu giỏ hàng dựa trên điều kiện
    $select_cart = mysqli_query($conn, "Select * from `cart` where name='$product_name'");
    if(mysqli_num_rows($select_cart)>0){
        $display_message="Sản phẩm đã có trong giỏ hàng";
        // echo "Sản phẩm đã có trong giỏ hàng";
    }else{
    //chèn dữ liệu giỏ hàng vào bảng giỏ hàng
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <!-- header -->
    <?php include 'ingredient/header-customer.php';
    include 'ingredient/banner.php';
    include 'ingredient/title-small.php';
    
    ?>
    
    
    <div class="introducess">
    <h1 class="heading">Cửa Hàng Trái Cây FRT</h1>
    <p>Chúng tôi tự hào mang đến cho bạn những trái cây tươi ngon và chất lượng cao từ các vùng trồng uy tín. <br>Với đội ngũ nhân viên chăm sóc nhiệt tình, chúng tôi cam kết mang lại trải nghiệm mua sắm thú vị và đáng nhớ.</p>
    </div>
    <?php 
    include 'ingredient/title-hover.php';
    ?>
     <?php 
    include 'products/products-noi-bac.php';
    ?>
    <?php 
    include 'products/products-ban-chay.php';
    ?>
    <a href="shop_products.php"><h1 class="heading">Xem Tất Cả Sản Phẩm </h1></a>
    <?php include 'ingredient/footer.php';?>
    
</body>
</html>