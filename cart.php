<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/cart.css">
    
    <title>DTCMilk Việt Nam</title>
</head>
<body>
<?php
    if(!isset($_SESSION["email"])){
        header("location:login.php");
    }

    require_once("sql/connect.php");
    $sql = "SELECT * FROM giohang";
    $result = mysqli_query($connect, $sql);

    if(isset($_POST["btnDel"])){
        $maSp = $_POST["maSp"];
        $query = "DELETE FROM giohang WHERE maSp = '$maSp'";
        $target = mysqli_query($connect, $query);
        if($target){
            header("location:cart.php");
        }
    }
?>


    <!-- Thanh menu -->
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

    <!-- Nội dung -->
    <div class="box row">
        <section class="header-cart">
            <h1>Giỏ hàng của bạn</h1>
        </section>
        <div class="content">
            <section class="infor-cart">
                <!-- Sản phẩm khi khách hàng chọn -->
                <table>
                    <tr>    
                        <th>Sản phẩm</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá tiền</th>
                        <th>Chọn</th>
                    </tr>
                    
                    <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <form action="" method="post">
                            <td><img src="./images/product/<?php echo $row['maSp']; ?>.webp" alt="Hình sữa"></td>
                            <td><input type="text" name="maSp" id="" value="<?php echo $row['maSp']; ?>" readonly></td>
                            <td><p><?php echo $row['tenSp']; ?></p></td>
                            <td><input type="number" value="<?php echo $row['soLuong'] ?>" min="1"></td>
                            <td><p><?php echo $row['giaTien'] ?></p></td>
                            <td><input type="checkbox" name="" id="" checked>
                            <input type="submit" name="btnDel" value="X">
                            </td>
                        </form>
                    </tr>
                    <?php 
                    }
                    mysqli_close($connect);
                    ?>
                    
                </table>
            </section>

            <section class="pay-cart">
                <div>
                    <div class="pay-cart-button">
                        <button>Thanh toán</button>
                    </div>
                </div>
            </section>

        </div>
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

</body>
</html>