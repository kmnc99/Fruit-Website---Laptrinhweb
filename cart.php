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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>
    <!-- include header  -->
    <?php include 'ingredient/header-customer.php' ?>
    <div class="container">
        <section class="shopping_cart">
            <h1 class="heading">Giỏi hàng</h1>
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
                            <th>Tổng</th>
                            <th>Sửa</th>
                        </thead>
                    <tbody>";
                    while($fetch_cart_products = mysqli_fetch_assoc($select_cart_products))
                    {
                        ?>
                            <tr>
                                <td><?php echo $fetch_cart_products['id']?></td>
                                <td><?php echo $fetch_cart_products['name']?></td>
                                <td><img src="images/<?php echo $fetch_cart_products['image']?>" alt=""></td>
                                <td><?php echo number_format($fetch_cart_products['price'])?>VND/KG</td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" value="<?php echo $fetch_cart_products['id']?>" name="update_quantity_id">
                                        <div class="quantity_box">
                                            <input type="number" min="1" value="<?php echo $fetch_cart_products['quantity']?>" name="update_quantity" style="border: 0.5px solid black;">
                                            <input type="submit" class="update_quantity" value="Cập nhật" name="update_product_quantity">
                                        </div>
                                    </form>
                                </td>
                                <td><?php echo $subtotal = number_format( $fetch_cart_products['price'] * $fetch_cart_products['quantity'])?>VND</td>
                                <td><a  href="cart.php?remove=<?php echo $fetch_cart_products['id']?>"onclick="return confirm('Bạn có chắc chắn xóa sản phẩm không?')"><i style="color:black; font-size:30px"class='bx bx-x' ></i></box-icon></a></td>

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
            <!-- bottom area  -->
            <!-- php code  -->
            <?php
            if($grand_total>0){
            echo "";
            ?>
            <div class='table_bottom'>
            <a href='shop_products.php' class='bottom_btn' style="color:white;">Tiếp tục mua hàng</a>
            <h3 class='bottom_btn'>Tổng: <span><?php echo number_format($grand_total)?></span>VND</h3>
            <a href='checkout.php' class='bottom_btn'>Thanh Toán</a>
            </div>
            <a href="cart.php?delete_all" class="delete_all_btn"><i class='bx bx-trash-alt'></i>Xóa tất cả</a>
            <?php
            }else{
                echo "";
            }
            ?>
            
        </section>
    </div>
    <?php include 'ingredient/footer.php' ?>
</body>
</html>