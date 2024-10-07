<!-- including php logic - connecting to database -->
<!-- bao gồm logic php - kết nối với cơ sở dữ liệu -->
<?php include '../connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem sản phẩm trong shop</title>
    <link rel="stylesheet" href="../css/style.css">
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
        h1{
            text-align: center;
            margin-bottom: 50px;
        }
        .display_product{
            margin-top: -100px;
        }
    </style>
</head>
<body>
    
    <!-- inclue header -->
    <?php  include 'header_admin.php' ?>
    <!-- container  -->
    <div class="container">
    <h1>QUẢN LÝ SẢN PHẨM TRONG KHO</h1>
        <!-- SẢN PHẨM NỔI BẬC  -->
        <div id="sp-noibac">
        <section class="display_product">
        <h3 class="title-comm"><span class="title-holder">SẢN PHẨM BÁN CHẠY</span></h3>
            <?php
                $display_prouct = mysqli_query($conn,"SELECT * FROM `products-ban-chay`");
                $num = 1;
                if(mysqli_num_rows($display_prouct)>0){
                echo'<table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Ảnh sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Sửa</th>
                    </tr>
                </thead>
            <tbody>';
            // logic to fetch data
            while($row = mysqli_fetch_assoc($display_prouct)){
            // echo $row['image'];
             // $product_name = $row["name"];
            ?>
            <!-- display table  -->
            <tr>              
            <tr>
                <td><?php echo $num?></td>
                <td><img src="../images/<?php echo $row['image']?>" alt= <?php echo $row['name']?>></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo number_format ($row['price'])?>VND/kg</td>
                <td>
                    <a href="../products/deletefruitbanchay.php?delete=<?php echo $row['id']?>" class="delete_product_btn" onclick="return confirm('Bạn có chắc chắn xóa sản phẩm không?')"><i class='bx bx-trash-alt'></i></a>
                    <a href="../products/updatefruitbanchay.php?edit=<?php echo $row['id']?>" class="update_product_btn"><i class='bx bx-edit'></i></a>
                </td>
            </tr>
            <?php
            $num++;
                }
            ?>
            <?php
            }
            else{
            echo "<div class='empty_text'>Không có sản phẩm trong giỏ hàng</div>";
            }
            ?>
            </tbody>
        </table>
        </section>
    </div>
            <hr style="margin-bottom:100px">
    <div class="container">
        <!-- SẢN PHẨM NỔI BẬC  -->
        <div id="sp-noibac">
        <section class="display_product">
        <h3 class="title-comm"><span class="title-holder">SẢN PHẨM NỔI BẬC</span></h3>
            <?php
                $display_prouct = mysqli_query($conn,"SELECT * FROM `products-noi-bac`");
                $num = 1;
                if(mysqli_num_rows($display_prouct)>0){
                echo'<table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Ảnh sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Sửa</th>
                    </tr>
                </thead>
            <tbody>';
            // logic to fetch data
            while($row = mysqli_fetch_assoc($display_prouct)){
            // echo $row['image'];
             // $product_name = $row["name"];
            ?>
            <!-- display table  -->
            <tr>              
            <tr>
                <td><?php echo $num?></td>
                <td><img src="../images/<?php echo $row['image']?>" alt= <?php echo $row['name']?>></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo number_format ($row['price'])?>VND/kg</td>
                <td>
                    <a href="../products/deletefruitnoibac.php?delete=<?php echo $row['id']?>" class="delete_product_btn" onclick="return confirm('Bạn có chắc chắn xóa sản phẩm không?')"><i class='bx bx-trash-alt'></i></a>
                    <a href="../products/updatefruitnoibac.php?edit=<?php echo $row['id']?>" class="update_product_btn"><i class='bx bx-edit'></i></a>
                </td>
            </tr>
            <?php
            $num++;
                }
            ?>
            <?php
            }
            else{
            echo "<div class='empty_text'>Không có sản phẩm trong giỏ hàng</div>";
            }
            ?>
            </tbody>
        </table>
        </section>
    </div>
    <hr style="margin-bottom:100px">
        <!-- TRÁI CÂY NHIỆT ĐỚI -->
        <div id="sp-noibac">
        <section class="display_product">
        <h3 class="title-comm"><span class="title-holder">TRÁI CÂY NHIỆT ĐỚI</span></h3>
            <?php
                $display_prouct = mysqli_query($conn,"SELECT * FROM `products-nhiet-doi`");
                $num = 1;
                if(mysqli_num_rows($display_prouct)>0){
                echo'<table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Ảnh sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Sửa</th>
                    </tr>
                </thead>
            <tbody>';
            // logic to fetch data
            while($row = mysqli_fetch_assoc($display_prouct)){
            // echo $row['image'];
             // $product_name = $row["name"];
            ?>
            <!-- display table  -->
            <tr>              
            <tr>
                <td><?php echo $num?></td>
                <td><img src="../images/<?php echo $row['image']?>" alt= <?php echo $row['name']?>></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo number_format ($row['price'])?>VND/kg</td>
                <td>
                    <a href="../products/deletefruitnhietdoi.php?delete=<?php echo $row['id']?>" class="delete_product_btn" onclick="return confirm('Bạn có chắc chắn xóa sản phẩm không?')"><i class='bx bx-trash-alt'></i></a>
                    <a href="../products/updatefruitnhietdoi.php?edit=<?php echo $row['id']?>" class="update_product_btn"><i class='bx bx-edit'></i></a>
                </td>
            </tr>
            <?php
            $num++;
                }
            ?>
            <?php
            }
            else{
            echo "<div class='empty_text'>Không có sản phẩm trong giỏ hàng</div>";
            }
            ?>
            </tbody>
        </table>
        </section>
        </div>
        <hr style="margin-bottom:100px">
        <!-- TRÁI CÂY NHẬP KHẨU  -->
        <div id="sp-noibac">
        <section class="display_product">
        <h3 class="title-comm"><span class="title-holder">TRÁI CÂY NHẬP KHẨU</span></h3>
            <?php
                $display_prouct = mysqli_query($conn,"SELECT * FROM `products-nhap-khau`");
                $num = 1;
                if(mysqli_num_rows($display_prouct)>0){
                echo'<table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Ảnh sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Sửa</th>
                    </tr>
                </thead>
            <tbody>';
            // logic to fetch data
            while($row = mysqli_fetch_assoc($display_prouct)){
            // echo $row['image'];
             // $product_name = $row["name"];
            ?>
            <tr>              
            <tr>
                <td><?php echo $num?></td>
                <td><img src="../images/<?php echo $row['image']?>" alt= <?php echo $row['name']?>></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo number_format ($row['price'])?>VND/kg</td>
                <td>
                    <a href="../products/deletefruitnhapkhau.php?delete=<?php echo $row['id']?>" class="delete_product_btn" onclick="return confirm('Bạn có chắc chắn xóa sản phẩm không?')"><i class='bx bx-trash-alt'></i></a>
                    <a href="../products/updatefruitnhapkhau.php?edit=<?php echo $row['id']?>" class="update_product_btn"><i class='bx bx-edit'></i></a>
                </td>
            </tr>
            <?php
            $num++;
                }
            ?>
            <?php
            }
            else{
            echo "<div class='empty_text'>Không có sản phẩm trong giỏ hàng</div>";
            }
            ?>
            </tbody>
        </table>
        </section>
        </div>
        <hr style="margin-bottom:100px">
        <!-- GIỎ QUÀ TRÁI CÂY  -->
        <div id="sp-noibac">
        <section class="display_product">
        <h3 class="title-comm"><span class="title-holder">GIỎ QUÀ TRÁI CÂY</span></h3>
            <?php
                $display_prouct = mysqli_query($conn,"SELECT * FROM `products-gio-qua-trai-cay`");
                $num = 1;
                if(mysqli_num_rows($display_prouct)>0){
                echo'<table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Ảnh sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Sửa</th>
                    </tr>
                </thead>
            <tbody>';
            // logic to fetch data
            while($row = mysqli_fetch_assoc($display_prouct)){
            // echo $row['image'];
             // $product_name = $row["name"];
            ?>
            <!-- display table  -->
            <tr>              
            <tr>
                <td><?php echo $num?></td>
                <td><img src="../images/<?php echo $row['image']?>" alt= <?php echo $row['name']?>></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo number_format ($row['price'])?>VND/kg</td>
                <td>
                    <a href="../products/deletegiotraicay.php?delete=<?php echo $row['id']?>" class="delete_product_btn" onclick="return confirm('Bạn có chắc chắn xóa sản phẩm không?')"><i class='bx bx-trash-alt'></i></a>
                    <a href="../products/updategiotraicay.php?edit=<?php echo $row['id']?>" class="update_product_btn"><i class='bx bx-edit'></i></a>
                </td>
            </tr>
            <?php
            $num++;
                }
            ?>
            <?php
            }
            else{
            echo "<div class='empty_text'>Không có sản phẩm trong giỏ hàng</div>";
            }
            ?>
            </tbody>
        </table>
        </section>
        </div>
    </div>
</div>
        <?php include '../ingredient/footer.php'?>
</body>
</html>