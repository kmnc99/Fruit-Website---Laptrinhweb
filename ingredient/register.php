<?php
// Khai báo biến lưu thông báo lỗi và thông báo thành công
$error;
$message;

// Kiểm tra xem biểu mẫu đăng ký đã được gửi đi
if (isset($_POST['register'])) {
    // Lấy giá trị tên đăng nhập, mật khẩu, và mật khẩu nhập lại từ form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];

    // Kiểm tra xem mật khẩu và mật khẩu nhập lại có khớp nhau
    if ($password !== $password_repeat) {
        $error = "Mật khẩu và mật khẩu nhập lại không khớp! Vui lòng đăng kí lại";
    } else {
        // Đăng ký thành công, gán thông báo thành công và liên kết đến trang đăng nhập
        $message = "Đăng kí tài khoản thành công <br> Bạn có muốn <a href='login.php'>đăng nhập</a> không?";

        // Tiếp tục xử lý đăng ký
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        // Chuẩn bị câu lệnh SQL để thêm người dùng vào cơ sở dữ liệu
        $sql = "INSERT INTO login(username, password) VALUES(?, ?)";
        try {
            // Sử dụng prepared statement để thực hiện truy vấn SQL an toàn
            $statement = $connection->prepare($sql);
            $statement->bindParam(1, $username);
            $statement->bindParam(2, $password);
            $statement->execute();
        } catch (PDOException $e) {
            echo "Không thể thêm người dùng vào database" . $e->getMessage();
        }
    }
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Đăng ký tài khoản</title>
</head>
<body>
    <div class="wrapper">
        <form action="">
            <h1>FRT FRUIT SHOP</h1>
            <div style="color: green;"><?php  echo $message ?? ''; ?></div>
            <div style="color: red;"><?php echo $error ?? ''; ?></div>
            <p style="text-align: center;">Đăng ký tài khoản</p>
            <div class="input-box">
                <input name="username" type="text" placeholder="Tên đăng nhập" required>
                <i class='bx bx-user' ></i>
            </div>
            <div class="input-box">
                <input name = "password" type="password" placeholder="Mật khẩu" required>
                <i class='bx bx-phone' ></i>
            </div>
            <div class="input-box">
                <input type="password" name="password_repeat" placeholder="Nhập lại mật khẩu" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <button type="submit" class="btn" >Đăng ký</button>
            <div class="register-link">
                <p>Tôi có tài khoản <a href="login.php">Đăng nhập</a></p>
            </div>
        </form>
    </div>
    <script>
        // Xử lý kiểm tra độ dài mật khẩu trước khi gửi biểu mẫu
        document.querySelector('form').addEventListener('submit', function(event) {
            var passwordInput = document.querySelector('input[name="password"]');
            var passwordValue = passwordInput.value;

            if (passwordValue.length < 5) {
                // Tìm phần tử input[name="password"] để hiển thị thông báo lỗi
                var errorElement = document.querySelector('input[name="password"]');
                errorElement.insertAdjacentHTML('afterend', '<div style="color: red;">Mật khẩu phải có ít nhất 8 ký tự.</div>');
                event.preventDefault(); // Ngăn form được gửi nếu mật khẩu không đủ dài
            } else {
                // Xóa thông báo lỗi nếu mật khẩu hợp lệ
                var errorElement = document.querySelector('input[name="password"]');
                var errorDiv = errorElement.nextElementSibling;
                if (errorDiv && errorDiv.style.color === "red") {
                    errorDiv.remove();
                }
            }
        });
    </script>
</body>
</html>
