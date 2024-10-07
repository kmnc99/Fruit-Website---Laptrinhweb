<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Footer 3 Cột</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
        /* bottom: 0; */
      }
      
      .footer {
        background-color: #545454;
        display: flex;
        justify-content: center; /* Căn giữa theo chiều ngang */
        align-items: center; /* Căn giữa theo chiều dọc */
        height: 200px; /* Đặt chiều cao của footer */
        color: white; /* Màu chữ của footer */
        margin: 0 -10px; 
      }
      a{
        text-decoration: none;
        color: green;
      }
      
      .column {
        flex: 1;
        text-align: center;
        padding: 10px;
      }
      
      
      
</style>

<body>

  <!-- Nội dung trang web ở đây -->

  <footer class="footer">
    <div class="column">
    <a href="pagehome.php" class="logo" style="font-family: 'Lora', serif;font-size:50px; color:#51D83B;">FRT FRUIT</a>
    </div>
    <div class="column">
      <h3>Liên hệ : 1900 9786</h3>
      <p>Email: frt@gmail.com </p>
    </div>
    <div class="column">
      <h3>Địa chỉ</h3>
      <p>415/5 Nơ Trang Long, Phường 13, Quận Bình Thạnh, TP.HCM</p>
    </div>
  </footer>

</body>
</html>
