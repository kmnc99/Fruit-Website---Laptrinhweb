<?php 
include 'connect.php';
//update query
if(isset($_POST['update_product_quantity'])){
    $update_values = $_POST['update_quantity'];
    // echo $update_values;
    $update_id = $_POST['update_quantity_id'];
    // echo'$update_id';
    //query
    $update_product_query = mysqli_query($conn,"update `cart` set quantity = $update_values where id=$update_id");
    // echo"Cập nhật thành công";
    if($update_product_query){
        header("location: cart.php");
    }
}
    if (isset($_GET['remove'])){
        $remove_id = $_GET['remove'];
        // echo $remove_id;
        mysqli_query($conn,"Delete from `cart` where id = $remove_id"); 
        header("location:cart.php");
}
if (isset($_GET["delete_all"])){
    mysqli_query($conn,"Delete from `cart`");
    header("location:cart.php");
}

if (isset($_POST['place_order'])) {
    echo '<script>placeOrder();</script>';
    header("location:pagehome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
  <style>
    .contai{
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
        display: flex;
        justify-content: center;
        width:100%;
        background-color: #fff;
        padding: 0px 100px 100px 100px;
        border-radius: 10px;
        height: 100vh;
        flex-direction: row;
    }

    .column {
      margin: 0 20px;
    }

    h1 {
      border-bottom: 2px solid #333;
      padding-bottom: 10px;
    }
    p{
        
        margin-bottom: 0.5px;
        text-align: left;
    }
    .customer-info,
    .order-details {
      margin-top: 20px;
    }

    .info-row {
      border-radius: 10px;
      margin-bottom: 10px;
      padding: 10px;
      background-color: #2eb82e46;
    }

    .order-btn {
      margin-top: 20px;
      text-align: right;
    }
    .order-btn button {
    background-color: #2eb82e; 
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px; 
    cursor: pointer;
  }

  .order-btn button:hover {
    background-color: red;
  }
  .payment-method {
        float: left;
    }

    .payment-method h4 {
        margin-bottom: 10px;
    }

    .radio-buttons {
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    .radio-buttons label {
        /* display: block; */
      font-size: 60px;
        /* display: flex; */
        text-align: left;
        margin-right: 20px;
    }
  </style>
</head>
<body>
    <?php include 'ingredient/header.php'; 'ingredient/title-small.php'?>
    <?php include 'ingredient/title-small.php'?>
    <div class="contai">
        <div class="column">
        <h1>Thông tin khách hàng</h1>
        <div class="customer-info">
            <p style="font-size:15px; color:#D93E30">Họ và tên người nhận</p>
            <input class="info-row" type="text"  placeholder="Nguyễn Trần Kim Ngọc">
            <p style="font-size:15px; color:#D93E30">Địa chỉ</p>
            <input class="info-row" type="text"  placeholder="45 Nguyễn Khắc Nhu, P. Cô Giang, Q.1, TP. HCM">
            <p style="font-size:15px; color:#D93E30">Số điện thoại</p>
            <input class="info-row" type="text"  placeholder="0911408666">
            <p style="font-size:15px;color:#D93E30">Email</p>
            <input class="info-row" type="text"  placeholder="kimngoc@gmail.com">
            </div>
            <div class="payment-method">
            <h4 style="margin-left:-13rem">Phương thức thanh toán:</h4>
            <div class="paymenet" style="display: flex; width:20rem; margin-bottom:10px;">
                <input type="radio" style="width:20px; " name="payment_method" value="chuyen_khoan">
                  Chuyển khoản </input> <br> 
                  
            </div>
            <div class="paymenet" style="display: flex; width:30rem;">
                <input type="radio" style="width:20px; " name="payment_method" value="chuyen_khoan">
                  Thanh toán khi nhận hàng </input> <br> 
                  
            </div>
            </div>
            </div>

        <div class="column">
            <h1>Đơn hàng của bạn</h1>
            <div class="order-details">
                <table>
                        <?php
                        $select_cart_products = mysqli_query($conn,"Select * from `cart`");
                        $num = 1;
                        $grand_total = 0;
                        if(mysqli_num_rows($select_cart_products)>0)
                        {
                            echo"
                                <thead>
                                    <th>Mã </th>
                                    <th>Tên </th>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                </thead>
                            <tbody>";
                            while($fetch_cart_products = mysqli_fetch_assoc($select_cart_products))
                            {
                                ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $fetch_cart_products['id']?></td>
                                        <td style="text-align: center; padding:0 20px"><?php echo $fetch_cart_products['name']?></td>
                                        <td style="text-align: center;"><img style="width:30px" src="images/<?php echo $fetch_cart_products['image']?>" alt=""></td>
                                        <td style="text-align: center; padding:0 20px"><?php echo number_format($fetch_cart_products['price'])?></td>
                                        <td style="text-align: center;"><?php echo $fetch_cart_products['quantity']?></td>
                                    </tr>
                                <?php
                                $grand_total += ( $fetch_cart_products['price'] * $fetch_cart_products['quantity']);
                                $num++;
                            }
                        }else{
                                echo"<div class='empty_text'>Giỏ hàng trống</div>";
                        }
                        
                        ?>    
                        </tbody>
                    </table>
            </div>
            <div class="order-btn">
            <h3 class='bottom_btn'>Thành tiền: <span><?php echo number_format($grand_total)?></span>VND</h3>
        <button  type="button" onclick="placeOrder()">Đặt hàng</button>
      </div>
        </div>
        
        <script>
            function placeOrder() {
                alert("Đặt hàng thành công!");
                window.location.href = "pagehome.php"; // Điều chỉnh đường dẫn trang chủ theo đường dẫn thực tế của bạn.
            }
        </script>
    </div>
        <?php include 'ingredient/footer.php';?>
</body>
</html>
