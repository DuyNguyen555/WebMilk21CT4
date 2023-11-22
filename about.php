<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style/main4.css">
    <link rel="stylesheet" href="style/support.css">
    <link rel="stylesheet" href="style/about.css">
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
                    echo $_SESSION["email"];
                ?>
                </div>
                <a href="login.php" class="fas fa-user"></a>
            </li>
            <li><a href="cart.php" class="fas fa-shopping-cart"></a></li>
            <li>
                <a href='logout.php'>Đăng xuất</a>
            </li>
        </div>
    </header>
    <div class="box-content">
        <div class="box">
            <div class="about-content">
                <h1>Giới thiệu về DTCMilkVN</h1>
                <div class="introduct">
                    DTCMilkVN là thương hiệu mang đến cho khách hàng nhiều nguồn sữa tươi, ngon
                    và đảm bảo an toàn vệ sinh theo quy định an toàn thực phẩm quốc tế.
                    <br><br>
                    DTCMilkVN có đa dạng các loại sữa có thể đáp ứng từng đối tượng khác nhau. Cũng là
                    nơi uy tín khách hàng tìm đến.
                    <br><br>
                    Sự hài lòng của khách hàng chính là động lực giúp DTCMilkVN không ngừng hoàn thiện,
                    mang lại giá trị tốt nhất cho khách hàng.
                </div>
                <div class="infoWeb">
                    <h2>Website DTCMilkVN</h2>
                    <a href="./index.php">www.dtcmilkvn.com</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>