<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/support.css">
    <link rel="stylesheet" href="style/promotion.css">
    <title>DTCMilk Việt Nam</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/logo1.jpg" alt="logo milk">
        </div>
        <div class="menu">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="about.php">Giới thiệu</a></li>
            <li><a href="product.php">Sản phẩm</a>
            <ul class="submenu">
                    <li><a href="suatuoi.php">Sữa tươi và sữa dinh dưỡng</a></li>
                    <li><a href="suachua.php">Sữa chua</a></li>
                    <li><a href="suadac.php">Sữa đặc</a></li>
                    <li><a href="suatv.php">Sữa thực vật</a></li>
                </ul>
            </li>
            <li><a href="promotion.php">Khuyến mãi</a></li>
            <li><a href="contact.php">Liên hệ</a></li>
        </div>
        <div class="option">
            <li><input placeholder="Tìm kiếm" type="text"><i class="fas fa-search"></i></li>
            <li>
                <div>
                <?php
                    if(isset($_SESSION["email"])){
                        echo $_SESSION["email"];
                    } else {
                        echo "Tài khoản";
                    }
                ?>
                </div>
                <a href="login.php" class="fas fa-user"></a>
            </li>
            <li><a href="cart.php" class="fas fa-shopping-cart"></a></li>
            <li>
            <?php
                if (isset($_SESSION["email"])) {
                    echo "<a href='logout.php'>Đăng xuất</a>";
                } else {
                    echo "";
                }
            ?>
            </li>
        </div>
    </header>
    <div class="box-content">
        <div class="box">
            <div class="promotion-content">
                <h1>Thông tin khuyến mãi</h1>
                <p>Khách hàng có đơn hàng hơn 1 triệu đồng sẽ miễn phí phí vận chuyển</p>
            </div>
            <section class="footer">
                <section class="app-container">
                    <p>Tải ứng dụng DTCMilk</p>
                    <div class="app-google">
                        <img src="images/dow.webp">
                    </div>
                </section>
                <div class="footer-top">
                    <li><a href="contact.php">Liên hệ</a></li>
                    <li><a href="">Tuyển dụng</a></li>
                    <li><a href="about.php">Giới thiệu</a></li>
                    <li>
                        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                        <a href="https://twitter.com/" class="fab fa-twitter"></a>
                        <a href="https://www.youtube.com/" class="fab fa-youtube"></a>
                    </li>
                </div>
                <div class="footer-center">
                    <p>Công ty Cổ phần Họa Mi với số đăng ký kinh doanh: 0123456789 <br>
                        Địa chỉ đăng ký: Tổ dân phố 80, P.Hòa Minh, Q.Liên Chiểu, TP.Đà Nẵng, Việt Nam - 0908 080 808<br>
                        Đặt hàng online: <b>0952 648 931.</b>
                    </p>
                </div>
            </section>
        </div>
    </div>
    
</body>

</html>