<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style/main.css">
    <title>SALE MILK</title>
</head>
<body>
 <header>
    <div class="logo">
        <img src="images/logo1.jpg" alt="logo milk">
    </div>
    <div class="menu">
        <li><a href="">Trang chủ</a></li>
        <li><a href="">Giới thiệu</a></li>
        <li><a href="">Sản phẩm</a>
            <ul class="submenu">
                <li><a href="">sữa tươi và sữa dinh dưỡng</a></li>
                <li><a href="">sữa cho mẹ bầu và bé</a></li>
                <li><a href="">sữa cho người cao tuổi</a></li>
                <li><a href="">sữa chua</a></li>
                <li><a href="">sữa đặc</a></li>
                <li><a href="">sữa thực vật</a></li>
            </ul>          
        </li>
        <li><a href="">Khuyến mãi</a></li>
        <li><a href="">Liên hệ</a></li>
    </div>
    <div class="option">
        <li><input placeholder="Tìm kiếm" type ="text"><i class = "fas fa-search"></i></li>
        <li><a class = "fas fa-user"></a></li>
        <li><a class = "fas fa-shopping-cart"></a></li>
    </div>
 </header> 
<section id="Slider">
<div class="aspect-ratio-169">
    <img src="images/background/slide1.png">
    <img src="images/background/slide2.jpg">
    <img src="images/background/slide3.png">
    <img src="images/background/slide4.jpg">
</div>
<div class="dot-container">
    <div class="dot active"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
</div>
</section>
<section class="app-container">
    <p>Tải ứng dụng DTC MILK</p>
    <div class="app-google">
        <img src="images/dow.webp">
    </div>
</section>
<div class="footer-top">
    <li><a href="">Liên hệ</a></li>
    <li><a href="">Tuyển dụng</a></li>
    <li><a href="">Giới thiệu</a></li>
    <li>
        <a href="" class = "fab fa-facebook-f"></a>
        <a href="" class = "fab fa-twitter"></a>
        <a href="" class = "fab fa-youtube"></a>
    </li>
</div>
<div class="footer-center">
    <p>Công ty Cổ phần Họa Mi với số đăng ký kinh doanh: 0123456789 <br>
        Địa chỉ đăng ký: Tổ dân phố 80, P.Hòa Minh, Q.Liên Chiểu, TP.Đà Nẵng, Việt Nam - 0908 080 808<br>
        Đặt hàng online: <b>0952 648 931.</b>
    </p>
</div>
<script>
const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
const imgContainer = document.querySelector('.aspect-ratio-169')
const dotItem = document.querySelectorAll(".dot")
let imgNumber = imgPosition.length
let index = 0
imgPosition.forEach(function(image,index){
    image.style.left = index*100 + "%"
    dotItem[index].addEventListener("click", function(){
    slider(index)
    })
})
function imgSlide (){
    index++;
    if(index >= imgNumber){index = 0}
    slider(index)
}
function slider(index){
    imgContainer.style.left = "-" + index*100+ "%"
    const dotActive = document.querySelector('.active')
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")
}
setInterval(imgSlide,5000)
</script>
</html>