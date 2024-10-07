<?php include '../connect.php';
// Kiểm tra xem người dùng đã nhấn nút "Đăng nhập" hay "Đăng ký" trên biểu mẫu
if(isset($_POST['login'])){
    // Nếu người dùng nhấn nút "Đăng nhập", chuyển hướng đến trang đăng nhập
    header("Location: login.php");
}
else if(isset($_POST['register'])){
    // Nếu người dùng nhấn nút "Đăng ký", chuyển hướng đến trang đăng ký
    header("Location: register.php");
}

?>



<!-- Form HTML cho việc chọn "Đăng ký" hoặc "Đăng nhập" -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <title>Người dùng</title>
</head>
<body>

<?php include 'header.php';?>
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="text-center p-3">
                <input type="submit" name="register" value="Đăng kí" class="btn btn-primary">
            </div>
            <br>
            <div class="text-center p-3">
                <input type="submit" name="login" value="Đăng nhập" class="btn btn-primary">
            </div>
        </form>
</body>
</html>
