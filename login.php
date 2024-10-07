<?php

$host="localhost";
$user="root";
$password="";
$db="projectweb";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["psw"];


	$sql="select * from quanly where username='".$username."' AND psw='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]==0  )
	{	

		$_SESSION["username"]=$username;

		header("location: pagehome.php");
	}

	elseif($row["usertype"]==1)
	{

		$_SESSION["username"]=$username;
		
		header("location: admin/admin.php");
	}

	else
	{
		echo "Tài khoản và mật khẩu không đúng";
	}

}




?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/login.css">
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
        <form action="" method="POST">
            <h1>Đăng nhập tài khoản</h1>
            <!-- <p style="text-align: center;"></p> -->
            <div class="input-box" >
                <input  type="text" name="username" placeholder="Tên đăng nhập" required >
                <i class='bx bx-user' ></i>
            </div>
            <div class="input-box" >
                <input  type="password" name="psw" placeholder="Mật khẩu" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label ><input  type="checkbox">Nhớ mật khẩu</label>
                <a href="#" style="color:black">Quên mật khẩu?</a>
            </div>
            <button type="submit" class="btn">Đăng nhập</button>
            <div class="register-link">
                <p>Bạn chưa có tài khoản? <a href="register.php" style="color:black">Đăng ký</a></p>
                <p><a href="pagehome.php" style="color:black">Quay về trang chủ</a></p>
            </div>
        </form>
    </div>
</body>
</html>