
<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        *{  margin: 0;
            padding: 0;
            align-items: center;
            
        }
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            color: #2eb82e;
        }
        th{
            text-transform:uppercase;
            font-size: 15px;
        }
        
    </style>
    
</head>
<body>
    <!-- inclue header -->
    <?php include 'header_admin.php';?>

    <div class="container">
        <h3 style="text-align:center; margin-bottom: 20px; margin-top:30px;">TRANG QUẢN LÝ SẢN PHẨM - ADMIN</h3>
            <table class="table">
        <thead>
            <tr class="trr">
                <th scope="col-6" style="color:#D93E30;">Số thứ tự</th>
                <th scope="col-6" style="color:#D93E30;">Tên mục</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><a href="../products/fruitbanchay.php">Sản phẩm Bán Chạy</a></td>
                </tr>   
                <tr>
                    <th scope="row">2</th>
                <td><a href="../products/fruitnoibac.php">Sản phẩm  Nổi Bậc</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><a href="../products/fruitnhietdoi.php">Trái cây Nhiệt Đới</a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><a href="../products/fruitnhapkhau.php">Trái cây Nhập Khẩu</a></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td><a href="../products/fruitgiotraicay.php">Giỏ Quà trái cây</a></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td><a href="view_products.php">Xem tổng sản phẩm</a></td>
                </tr>
        </tbody>
        </table>
    </div>
</body>
</html>