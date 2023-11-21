<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style/main2.css">
    <link rel="stylesheet" href="style/cart.css">
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
    <div class="box row">
        <section class="header-cart">
            <h1>Giỏ hàng của bạn</h1>
        </section>
        <section class="infor-cart">
            <table>
                <tr>    
                    <th>Sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Xóa</th>
                </tr>
                <tr>
                    <td><img src="images/product/vnm1.webp" alt="Hình sữa"></td>
                    <td><p>Sữa tươi Vinamilk hộp</p></td>
                    <td><input type="number" value="1" min="1"></td>
                    <td><p>28000Đ</p></td>
                    <td><button>X</button></td>
                </tr>
            </table>
        </section>
        <section class="pay-cart">
            <table>
                <tr>
                    <th colspan="2">Tổng tiền giỏ hàng</th>
                </tr>
                <tr>
                    <td>Tổng sản phẩm</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Tổng tiền hàng</td>
                    <td><p>56000Đ</p></td>
                </tr>
                <tr>
                    <td>Tổng thanh toán</td>
                    <td><p style="color: black; font-weight: bold;">56000Đ</p></td>
                </tr>
            </table>
            <div>
                <div class="pay-cart-button">
                    <button>Tiếp tục mua</button>
                    <button>Thanh toán</button>
                </div>
            </div>
        </section>
    </div>
</body>
</html>