<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/product.css">
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
            <li><a href="" class="fas fa-shopping-cart"></a></li>
        </div>
    </header>
    <section class="cartegory">
        <div class="container">
            <div class="row">
                <div class="cart-center row">
                    <div class="cart-top-items">
                        <p>Sản phẩm</p>
                    </div>
                    <div class="cart-top-items">
                        <select name="" id="">
                            <option value="">Sắp xếp</option>
                            <option value="">Giá từ thấp đến cao</option>
                            <option value="">Giá từ cao đến thấp</option>
                        </select>
                    </div>
                    <div class="cart-content row">
                        <div class="cart-content-items">
                            <!--<img src="images/product/suachua1.webp" alt="hinh">
                            <h1>Sữa chua TH true MILK nha đam</h1>
                            <p>gia<sup>đ</sup></p>

                            <img src="images/product/suachua2.webp" alt="hinh">
                            <h1>Sữa chua Vinamilk nha đam</h1>
                            <p>gia<sup>đ</sup></p>

                            <img src="images/product/suadac1.webp" alt="hinh">
                            <h1>Sữa đặc Dutch Lady cao cấp</h1>
                            <p>gia<sup>đ</sup></p>

                            <img src="images/product/suadac2.webp" alt="hinh">
                            <h1>Sữa đặc Ông Thọ</h1>
                            <p>gia<sup>đ</sup></p>

                            <img src="images/product/suadac3.webp" alt="hinh">
                            <h1>Sữa đặc</h1>
                            <p>gia<sup>đ</sup></p>

                            <img src="images/product/suatuoi1.webp" alt="hinh">
                            <h1>loai sua</h1>
                            <p>gia<sup>đ</sup></p>

                            <img src="images/product/suatuoi2.webp" alt="hinh">
                            <h1>loai sua</h1>
                            <p>gia<sup>đ</sup></p>

                            <img src="images/product/suatuoi3.webp" alt="hinh">
                            <h1>loai sua</h1>
                            <p>gia<sup>đ</sup></p>-->
                        </div>
                    </div>
                </div>
                <?php 
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="product-info">
                    <img src="images/product/<?php echo $row["maSua"]; ?>.webp" alt="Ảnh minh hoạ">
                    <p><?php echo $row["tenSua"]; ?></p>
                    <p><?php echo $row["tenHang"]; ?></p>
                    <p><?php echo $row["loaiSua"];?></p>
                    <p><?php echo $row["giaTien"];?></p>
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