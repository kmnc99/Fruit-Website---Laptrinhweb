<?php

include("connect.php");
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
    <link rel="stylesheet" href="css/introd.css">
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
    <div class="container">
        <div class="wrapper">
            <div class="wrapper--header">
                <h1 class="header--h1">GIỚI THIỆU CỬA HÀNG FRT</h1>
                <div class="content">
                    Cửa hàng FRT là một điểm đến tuyệt vời cho mọi
                    người
                    đang tìm kiếm sự tươi ngon của trái cây. Tọa lạc tại trung tâm thành
                    phố,
                    cửa hàng chúng
                    tôi là một khu vườn đô thị nơi bạn có thể tìm thấy đủ loại trái cây để làm cuộc sống của bạn thêm
                    khỏe.
                </div>
            </div>
            <div class="frame">
                <div class="frame1">
                    <p class="para" style="margin-top:30px">
                        <br>Chúng tôi cung cấp một loạt trái cây tươi ngon từ khắp nơi trên thế giới. Từ cam, táo, chuối cho đến
                        dứa, lựu và nhiều
                        loại trái cây khác, bạn sẽ tìm thấy sự phong phú và sự tươi ngon tại cửa hàng của chúng tôi.</p>
                    <img class="img-fruit" src="images/anh-san-pham-9.jpg" alt="">
                </div>
            </div>
            <div class="frame">
                <div class="frame1" >
                    <img class="img-fruit" src="images/anh-san-pham-8.jpg" alt="">
                    <p class="para">Đối với những dịp đặc biệt hoặc chỉ để làm cho ngày của bạn trở nên tươi đẹp hơn, chúng tôi cung
                        cấp
                        một loạt hoa tươi
                        đẹp. Từ hoa cắt cành đơn giản cho đến các bó hoa tươi theo mùa và theo yêu cầu, bạn có nhiều lựa
                        chọn để tạo ra sự thú
                        vị và thăng hoa mà chỉ hoa tươi có thể mang lại.</p>
                </div>
            </div>
            <div class="frame">
                <div class="frame1" >
                    <p class="para">Chúng tôi hiểu tầm quan trọng của việc ăn rau củ quả sạch sẽ cho sức khỏe. Vì vậy, chúng tôi cung
                        cấp
                        một loạt rau củ
                        quả tươi ngon và không chứa hóa chất. Từ rau xanh tươi mát cho đến củ quả sáng màu, chúng tôi có
                        tất
                        cả những gì bạn cần
                        để duy trì một chế độ ăn lành mạnh.</p>
                    <img class="img-fruit" src="images/anh-san-pham-1.jpg" alt="">
                </div>
            </div>
            <div class="frame4">
                <h1 style="text-align:center;">Dịch vụ đặc biệt</h1>
                <div class="framee">
                    <div class="box">
                        <div>
                            <img src="images/giaohang 1.png" alt="">
                        </div>
                        <h2 style="margin-right:-100px;">Giao hàng tận nơi</h2>
                    </div>
                    <div class="box">
                        <div>
                            <img src="images/giaohang 2.png" alt="">
                        </div>
                        <h2 style="margin-right:-100px;">Đóng gói quà tặng</h2>
                    </div>
                    <div class="box" style="margin-top:-10px;">
                        <div>
                            <a href="contact.php"><img src="images/cskh.png" alt=""></a>
                        </div>
                        <h2>Tư vấn miễn phí</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'ingredient/footer.php';?>
    
</body>
</html>