<?php include "../connect.php";
if(isset($_POST['add_product'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_temp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = '../images/'.$product_image;

    $insert_quert = mysqli_query($conn,"insert into `products-nhiet-doi`(name, price, image) values('$product_name','$product_price','$product_image')") or die("Insert query failed");
    if($insert_quert){
        move_uploaded_file($product_image_temp_name, $product_image_folder);
        $display_message="Sản phẩm đã thêm thành công";
    }
    else{
        $display_message= "Thêm sản phẩm không thành công";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Thêm sản phẩm</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- inclue header -->
    <?php  include('../admin/header_admin.php')?>
    
    <!-- form section -->
    <div class="container">
        <!-- display message -->
        <?php 
        if(isset($display_message))
        {
            echo "<div class='display_message'>
            <span>$display_message</span>
            <i class='bx bx-x'onClick='this.parentElement.style.display=`none`;'></i>
        </div>";
        }
        ?>
        
        <section>
            <h3 class="heading">Thêm trái cây nhiệt đới</h3>
            <form action="" class="add_product" method="post" enctype="multipart/form-data">
                <input type="text" name="product_name" placeholder="Thêm tên sản phẩm" class="input_fields" required>
                <input type="number" name="product_price" placeholder="Thêm giá" class="input_fields" required>
                <input type="file" name="product_image"  min="0" class="input_fields" required accept="image/png, image/jpg, image/jpeg">
                <input type="submit" name="add_product" class="submit_btn" value="Thêm sản phẩm">
            </form>
        </section>
    </div>
    <script>src="js.script.js"</script>
</body>
</html>