<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'ingredient/header.php';
    include 'ingredient/title-small.php';?>
    <div class="containerrr">
                <h1>Liên hệ với chúng tôi</h1>
                <p></p>
                <div class="contact-box">
                    <div class="contact-left">
                        <h3>Gửi yêu cầu của bạn</h3>
                        <form>
        
                            <div class="input-row">
                                <div class="input-group">
                                    <label>Họ tên</label>
                                    <input type="text" placeholder="Nguyễn Trần Kim Ngọc">
                                </div>
                                <div class="input-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" placeholder="(+84) 123456789">
                                </div>
                            </div>
        
                            <div class="input-row">
                                <div class="input-group">
                                    <label>Email</label>
                                    <input type="email" placeholder="kimngoc@gmail.com">
                                </div>
                                <div class="input-group">
                                    <label>Vấn đề</label>
                                    <input type="text" placeholder="Mua giá sỉ">
                                </div>
                            </div>
                            
                            <label>Nội dung tư vấn</label>
                            <textarea name="" id="" cols="30" rows="5" placeholder="Tôi muốn mua số lượng sầu riêng lớn..."></textarea>
                            <button type="submit">Gửi</button>
                        </form>
                    </div>
                    <div class="contact-right">
                        <h3>Thông tin cửa hàng</h3>
                        <p>Email:frt@gmail.com</p>
                        <p>Liên hệ:1900 9768</p>
                        <p>Trụ sở: 415/5 Nơ Trang Long, Phường 13, Quận Bình Thạnh, TP.HCM</p>
                    </div>
            </div>
    </div>
    <?php include 'ingredient/footer.php'?>
</body>
</html>

