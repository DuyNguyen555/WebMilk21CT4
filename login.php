<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>

<link rel="stylesheet" href="./style/login.css">

</head>
<body>
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>DTCMilkVN</h1>
		</div>
	</div>
	<div class="right">
		<section class="sign-in">
			<h5>Đăng nhập</h5>
			<p>Chưa có tài khoản: <a href="#" onclick="changeSignUp()">Tạo tài khoản</a></p>
			<form action="">
				<input type="text" placeholder="Email"><br>
				<input type="password" placeholder="Mật khẩu">
				<br>
				<input type="submit" value="Đăng nhập">
			</form>
		</section>
		<section class="sign-up">
			<h5>Đăng ký</h5>
			<p>Đã có tài khoản: <a href="#" onclick="changeSignIn()">Đăng nhập</a></p>
			<form action="">
				<input type="text" name="" id="" placeholder="Họ và tên">
				<input type="text" placeholder="Email"><br>
				<input type="text" name="" id="" placeholder="Số điện thoại">
				<input type="text" name="" id="" placeholder="Địa chỉ">
				<input type="password" placeholder="Mật khẩu">
				<input type="password2" placeholder="Nhập lại mật khẩu">
				<br>
				<input type="submit" value="Đăng ký">
			</form>
		</section>
	</div>
</div>

<script type="text/javascript">
function changeSignUp() {
	document.querySelector(".sign-in").style.display = "none";
	document.querySelector(".sign-up").style.display = "inline-block";
}
function changeSignIn() {
	document.querySelector(".sign-in").style.display = "inline-block";
	document.querySelector(".sign-up").style.display = "none";
}
</script>
</body>
</html>
