<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login Page in HTML with CSS Code Example</title>
	<link rel="stylesheet" href="./style/login.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
				<form action="" onsubmit="return validateSignIn(event)">
					<input type="text" id="txtEmailSignIn" placeholder="Email"><br>
					<input type="password" id="txtPassSignIn" placeholder="Mật khẩu">
					<br>
					<input type="submit" value="Đăng nhập" id="txtSubmitSignIn">
				</form>
			</section>
			<section class="sign-up">
				<h5>Đăng ký</h5>
				<p>Đã có tài khoản: <a href="#" onclick="changeSignIn()">Đăng nhập</a></p>
				<form action="" onsubmit="return validateSignUp(event)">
					<input type="text" name="" id="txtNameSignUP" placeholder="Họ và tên">
					<input type="text" id="txtEmailSignUP" placeholder="Email"><br>
					<input type="text" name="" id="txtCellSignUP" placeholder="Số điện thoại">
					<input type="text" name="" id="txtAddressSignUP" placeholder="Địa chỉ">
					<input type="password" id="txtPassSignUp" placeholder="Mật khẩu">
					<input type="password" id="txtPassSignUp2" placeholder="Nhập lại mật khẩu">
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

		function validateSignIn(event){
			event.preventDefault();
			if(document.getElementById("txtEmailSignIn").value === ""){
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng nhập trống",
					text: "Quý khách vui lòng nhập email để đăng nhập",
				});
			}
			else if(document.getElementById("txtPassSignIn").value === ""){
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng nhập trống",
					text: "Quý khách vui lòng nhập mật khẩu để đăng nhập",
				});
			}
		}

		function validateSignUp(event){
			event.preventDefault();
			var pass = document.getElementById("txtPassSignUp").value
			var repass = document.getElementById("txtPassSignUp2").value
			if(document.getElementById("txtNameSignUP").value === ""){
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập họ và tên để đăng ký",
				});
			}
			else if(document.getElementById("txtEmailSignUP").value === ""){
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập email để đăng ký",
				});
			}
			else if(document.getElementById("txtCellSignUP").value === ""){
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập số điện thoại để đăng ký",
				});
			}
			else if(document.getElementById("txtAddressSignUP").value === ""){
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập số điện thoại để đăng ký",
				});
			}
			else if(pass === ""){
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập mật khẩu để đăng ký",
				});
			}
			else if(repass === ""){
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập lại mật khẩu để đăng ký",
				});
			}
			else if(pass !== repass){
				Swal.fire({
					icon: "error",
					title: "Thông tin đăng ký sai",
					text: "Mật khẩu không khớp",
				});
			}
			else {
				let timerInterval;
				Swal.fire({
					title: "Hệ thống đang xử lý",
					html: "Quý khách đợi trong giây lát",
					timer: 2000,
					timerProgressBar: true,
					didOpen: () => {
						Swal.showLoading()
					},
				willClose: () => {
					clearInterval(timerInterval);
				}
				})
			}
		}
	</script>
</body>

</html>