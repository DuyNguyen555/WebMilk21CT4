<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style/main2.css">
    <link rel="stylesheet" href="style/product3.css">
    <title>DTCMilk Việt Nam</title>
</head>

<body>
    <?php 
        require_once("sql/connect.php");
        $sql =  "SELECT * FROM sua INNER JOIN hang 
        ON sua.maHang = hang.maHang
        order by giaTien asc";
        $result = mysqli_query($connect, $sql);
    ?>
    <header>
        <div class="logo">
            <img src="images/logo1.jpg" alt="logo milk">
        </div>
        <div class="menu">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="about.php">Giới thiệu</a></li>
            <li><a href="product.php">Sản phẩm</a>
                <ul class="submenu">
                    <li><a href="">sữa tươi và sữa dinh dưỡng</a></li>
                    <li><a href="">sữa cho mẹ bầu và bé</a></li>
                    <li><a href="">sữa cho người cao tuổi</a></li>
                    <li><a href="">sữa chua</a></li>
                    <li><a href="">sữa đặc</a></li>
                    <li><a href="">sữa thực vật</a></li>
                </ul>
            </li>
            <li><a href="promotion.php">Khuyến mãi</a></li>
            <li><a href="contact.php">Liên hệ</a></li>
        </div>
        <div class="option">
            <li><input placeholder="Tìm kiếm" type="text"><i class="fas fa-search"></i></li>
            <li><a href="login.php" class="fas fa-user"></a></li>
            <li><a href="cart.php" class="fas fa-shopping-cart"></a></li>
        </div>
    </header>
    <section class="product">
        <div class="container">
            <div class="row">
                <div class="pro-center row">
                    <div class="pro-top-items">
                        <p>Sản phẩm</p>
                    </div>
                    <div class="pro-top-items">
                        <select name="" id="">
                            <option value="">Giá từ thấp đến cao</option>
                            <option value="">Giá từ cao đến thấp</option>
                        </select>
                    </div>
                </div>
                <?php 
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="product-info">
                    <form>
                        <img src="images/product/<?php echo $row["maSua"]; ?>.webp" alt="Ảnh minh hoạ">
                            <p><?php echo $row["tenSua"]; ?></p>
                            <p><?php echo $row["giaTien"];?></p>
                        <input type="submit" value="Thêm vào giỏ hàng">
                    </form>
                </div>
                <?php
                    }
                    mysqli_close($connect);
                ?>
            </div>
        </div>
    </section>

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
</body>
</html>