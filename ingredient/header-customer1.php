<header class="header">
        <div class="header_body">
                <a href="pagehome.php" class="logo">FRT FRUIT</a>
                <nav class="navbar">
                    <li><a class="detail" href="pagehome.php">Trang chủ</a></li>
                    <li><a class="detail" href="introduce.php">Giới thiệu</a></li>
                    <li class=" dropdown detail ">
                        <a class="nav-link  dropdown-toggle"role="button" data-bs-toggle="dropdown" aria-expanded="false">Sản phẩm</a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link detail-nav" href="#nhiet-doi">Trái cây nhiệt đới</a></li>
                            <li><a class="nav-link detail-nav" href="#nhap-khau">Trái cây nhập khẩu</a></li>
                            <li><a class="nav-link detail-nav" href="#gio-qua">Giỏ trái cây</a></li>
                        </ul>
                    </li>
                    <li><a class="detail" href="contact.php">Liên hệ</a></li>
                </nav>
            <!-- select query cho cart-->
            <?php
            $select_product = mysqli_query($conn, "Select * from `cart`") or die ('query failed');
            $row_count = mysqli_num_rows($select_product);
            // echo $row_count;
            ?>
            <!-- Shopping cart icon -->
            <!-- <i class='bx bx-search'></i> -->
            <form class="d-flex search" role="search" style="margin-left:30px">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                <button type="submit"><i style="font-size: 20px; background-color:white; margin-top:2px" class='bx bx-search seachh'></i></button>
                </form>
            <div class="cartt">
                <a class="cart" href="login.php" ><i class='bx bx-user' ></i></a>
                <!-- <a class="cart" href="#" ><i class='bx bx-search'></i></a> -->
                <a class="cart" href="cart.php" ><i class='bx bx-cart'></i><span><sup><?php echo $row_count?></sup></span></a>
            </div>
            
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        <script src="js/style.js"></script>
</header>