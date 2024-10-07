<?php
include("connect.php");
if(isset($_POST["add_to_cart"])){ 
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_image = $_POST["product_image"];
    $product_quantity = 1;
    $select_cart = mysqli_query($conn, "Select * from `cart` where name='$product_name'");
    if(mysqli_num_rows($select_cart)>0){
        $display_message="Sản phẩm đã có trong giỏ hàng";
        // echo "Sản phẩm đã có trong giỏ hàng";
    }else{
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
    <link rel="stylesheet" href=".../css/products.css">
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
        .products{
        margin-top: -5rem;
        }
    </style>

</head>
<body>
<section class="products">
            <h3 class="title-comm"><span class="title-holder">SẢN PHẨM BÁN CHẠY</span></h3>
            <div class="product_container">
                <?php 
                $select_products = mysqli_query($conn,"Select * from `products-ban-chay`");
                
                if(mysqli_num_rows($select_products) > 0){
                    // thêm sản phẩm mới vào sẽ hiển thị thêm mục mới
                    while($fetch_product = mysqli_fetch_assoc($select_products)){
                        // echo $fetch_product['name'];
                        ?>
                        <form method="post" action="">
                            <div class="edit_form">
                                <img class="product_image"src="images/<?php echo $fetch_product['image']?>" alt="">
                                <h3><?php echo $fetch_product['name']?></h3>
                                <div class="price">Giá: <?php echo number_format ($fetch_product['price'])?>VND/kg </div>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']?>">
                                <input type="submit" class="submit_btn cart_btn" value="Thêm vào giỏ hàng" onclick="return confirm('Đã thêm sản phẩm vào giỏ hàng')" name="add_to_cart">
                            </div>
                        </form>
                    <?php
                    }
                    // echo $fetch_products['name'];
                    }
                    else{
                        echo '<div class="empty_text">Sản phẩm không có sẵn</div>';
                    }
                    ?>
                </div>
            </div>
        </section>    
</body>
</html>