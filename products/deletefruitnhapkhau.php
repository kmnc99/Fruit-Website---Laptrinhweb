<?php 
include '../connect.php';
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn,"Delete from `products-nhap-khau` where id=$delete_id") or die("Truy vấn không thành công");
    if($delete_query){
        echo'Đã xóa sản phẩm';
        header('location:../admin/view_products.php');
    }else{
        echo'Sản phẩm không xóa được';
        header('location:../admin/view_products.php');
    }
}
?>