<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login Page in HTML with CSS Code Example</title>
	<link rel="stylesheet" href="./style/login.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
	<?php
	if (isset($_POST["btnSub"])) { // Đăng ký
		$name = $_POST["name"];
		$email = $_POST["email"];
		$cell = $_POST["cell"];
		$address = $_POST["address"];
		$pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);


		require_once("./sql/connect.php");

		$sql = "INSERT INTO khachhang(tenKH, sdt, diaChi, email, password)
				VALUES ('$name', '$cell', '$address', '$email', '$pass')";

		$result = mysqli_query($connect, $sql);

		if ($result) {
			mysqli_close($connect);
	?>
			<script type="text/javascript">
				Swal.fire({
					icon: 'success',
					title: 'Đăng ký thành công',
					showConfirmButton: false,
					timer: 1500
				});
			</script>
		<?php
		} else {
			mysqli_error($connect);
		?>
			<script type="text/javascript">
				Swal.fire({
					icon: 'error',
					title: 'Đăng ký thất bại',
					showConfirmButton: false,
					timer: 1500
				});
			</script>
	<?php
		}
	}

	if (isset($_POST["btnSubIn"])) { // Đăng nhập
		$email = $_POST["email"];
		$pass = $_POST["pass"];

		require_once("./sql/connect.php");

		$sql = "SELECT count(*) as count, password
				FROM khachhang WHERE email = '$email'";
		
		$result = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($result);
		if($row["count"] > 0) {
			if(password_verify($pass, $row["password"])) {
				$_SESSION["email"] = $email;
				$_SESSION["password"] = $pass;
				header("location:index.php");
			} else {
				echo "<script type='text/javascript'>
				Swal.fire({
					icon: 'error',
					title: 'Đăng ký thất bại',
					showConfirmButton: false,
					timer: 1500
				});
			</script>";
			}
		} else {
			echo "<script type='text/javascript'>
				Swal.fire({
					icon: 'error',
					title: 'Không tìm thấy tài khoản',
					showConfirmButton: false,
					timer: 1500
				});
			</script>";
		}
	}
	?>

	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>DTCMilkVN</h1>
			</div>
		</div>
		<div class="right">

			<!-- Đăng nhập -->
			<section class="sign-in">
				<form action="" method="post" onsubmit="return validateSignIn()">
					<h5>Đăng nhập</h5>
					<p>Chưa có tài khoản: <a href="#" onclick="changeSignUp()">Tạo tài khoản</a></p>
					<input type="text"     name="email"    id="txtEmailSignIn"  placeholder="Email"><br>
					<input type="password" name="pass"     id="txtPassSignIn"   placeholder="Mật khẩu"><br>
					<input type="submit"   name="btnSubIn" id="txtSubmitSignIn" value="Đăng nhập">
				</form>
			</section>

			<!-- Đăng ký -->
			<section class="sign-up">
				<form action="" method="post" onsubmit="return validateSignUp()">
					<h5>Đăng ký</h5>
					<p>Đã có tài khoản: <a href="#" onclick="changeSignIn()">Đăng nhập</a></p>
					<input type="text"     name="name"    id="txtNameSignUP"    placeholder="Họ và tên">
					<input type="text"     name="email"   id="txtEmailSignUP"   placeholder="Email"><br>
					<input type="text"     name="cell"    id="txtCellSignUP"    placeholder="Số điện thoại">
					<input type="text"     name="address" id="txtAddressSignUP" placeholder="Địa chỉ">
					<input type="password" name="pass"    id="txtPassSignUp"    placeholder="Mật khẩu">
					<input type="password"                id="txtPassSignUp2"   placeholder="Nhập lại mật khẩu">
					<br>
					<input type="submit"   name="btnSub"  value="Đăng ký">
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

		// Hàm kiểm tra thanh đăng nhập
		function validateSignIn() {
			if (document.getElementById("txtEmailSignIn").value === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng nhập trống",
					text: "Quý khách vui lòng nhập email để đăng nhập",
				});
				return false;
			} else if (document.getElementById("txtPassSignIn").value === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng nhập trống",
					text: "Quý khách vui lòng nhập mật khẩu để đăng nhập",
				});
				return false;
			}

			return true;
		}

		// Hàm kiểm tra thanh đăng ký
		function validateSignUp() {
			var pass = document.getElementById("txtPassSignUp").value
			var repass = document.getElementById("txtPassSignUp2").value
			if (document.getElementById("txtNameSignUP").value === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập họ và tên để đăng ký",
				});
				return false;
			} else if (document.getElementById("txtEmailSignUP").value === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập email để đăng ký",
				});
				return false;
			} else if (document.getElementById("txtCellSignUP").value === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập số điện thoại để đăng ký",
				});
				return false;
			} else if (document.getElementById("txtAddressSignUP").value === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập địa chỉ để đăng ký",
				});
				return false;
			} else if (pass === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập mật khẩu để đăng ký",
				});
				return false;
			} else if (pass !== repass) {
				Swal.fire({
					icon: "error",
					title: "Mật khẩu không khớp với nhau",
					text: "Quý khách vui lòng nhập lại mật khẩu",
				});
				return false;
			}

			return true;
		}
	</script>
</body>

</html>