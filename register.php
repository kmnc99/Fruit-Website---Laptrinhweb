<?php
    include("connect.php");
    //Xử lý dữ liệu submit bằng phương thức POST của người dùng
    if (isset($_POST["submit"])){
        $username=$_POST['ten'];
        $psw=$_POST['psw'];
        $email=$_POST['email'];
		    $mobile=$_POST['mobile'];

		//Câu lệnh insert
		$sql = mysqli_query($conn,"insert into `quanly`(username, psw, email, mobile) values('$username','$psw','$email','$mobile')") or die("Insert query failed");

        //Thực thi câu lệnh SQL
        $result = $conn->query($sql);
        
        //Chuyển tiếp về trang login khi đăng ký thành công
        header("location: login.php");
        exit;    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css">
    <style>
        @import url("https://fonts.googleapis.com/css2? family=Poppins:wght@300; 400; 500; 600; 700; 800; 900& display=swap");
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family:"Roboto", sans-serif;
  color: black;
}
body{
  font-family: 'Roboto', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-image: linear-gradient(0, rgb(193, 235, 188), rgb(244, 200, 200));
  /* background-image: url("https://wallpaperaccess.com/full/1325184.jpg"); */
  background-size: cover;
  background-position: center;
}
.wrapper{
  width:420px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(20px);
  box-shadow: 0 0 10px rgba(0, 0, 0, .2);
  color: azure;
  border-radius: 10px;
  padding: 30px 40px;
  
}

.wrapper h1{
  font-size: 36px;
  text-align: center;
}
.wrapper .input-box{
  position: relative;
  width: 100%;
  height: 50px;
  margin:30px 0;
}
.input-box input{
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, .2);
  border-radius: 40px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px;
}
.input-box input::placeholder{
  color: black;
}
.input-box i{
  position: absolute;
  right: 20px;
  top: 50%;
  transform:translateY(-50%);
  font-size:20px;
}
.wrapper .remember-forgot{
  display: flex;
  justify-content: space-between;
  font-size: 14.5px;
  margin: -15px 0 15px; 
}
.remember-forgot label input{
  accent-color: #fff;
  margin-right: 3px;
}
.remember-forgot a{
  color: #fff;
  text-decoration: none;
}
.remember-forgot a:hover{
  text-decoration: underline;
}
.wrapper .btn{
  width: 100%;
  height: 45px;
  background: rgb(255, 255, 255);
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow:  0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size:  16px;
  color: rgb(19, 19, 19);
  font-weight: 600;
}
.wrapper .register-link{
  font-size: 14.5px;
  text-align: center;
  margin: 20px 0 15px;
}
.register-link p a{
  color: #fff;
  text-decoration: none;
  font-size: 600;
}
.register-link p a:hover{
  text-decoration: underline;
}
.cancel{
  text-decoration: none;
  color: #fff;
}
    </style>
</head>
<body>	
<div class="wrapper">
        <form method="post">
            <h1>FRT FRUIT SHOP</h1>
            <p style="text-align: center;">Đăng ký tài khoản</p>
            <div class="input-box">
                <input style="color:black"type="text" name="ten" placeholder="Tên đăng nhập" required>
                <i class='bx bx-user' ></i>
            </div>
            <div class="input-box">
                <input style="color:black" type="password" name="psw" placeholder="Mật khẩu" required>
                <i class='bx bx-lock-alt'></i>
                
            </div>
            <div class="input-box">
                <input style="color:black" type="email" name="email" placeholder="Email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input style="color:black" type="text" name="mobile" placeholder="Số điện thoại" required>
                <i class='bx bx-phone' ></i>
            </div>
            <input class="btn" type="submit" name="submit" value="Đăng ký" onclick="return confirm('Tạo tài khoản thành công')">
            <div class="register-link">
                <p>Tôi có tài khoản! <a href="login.php" style="color:black">Đăng nhập</a></p>
				<p><a href="pagehome.php" style="color:black">Quay về trang chủ</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>
