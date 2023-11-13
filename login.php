<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style/login.css">
    <title>Đăng nhập thông tin</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="content">
                <!-- Đăng nhập bằng tài khoản cho khách hàng -->
                <div class="signIn">
                    <h1>Đăng nhập</h1>
                    <form id="signInForm" action="">
                        <label for="">Tài khoản email</label><br>
                        <input type="text" name="" id="" placeholder="Ex: webSaleMilk@gmail.com"><br>
                        <label for="">Mật khẩu</label><br>
                        <input type="password" name="" id="" placeholder="*****************"><br>
                        <input type="submit" value="Đăng nhập">
                    </form>
                    <span onclick="changeFormToSignUp()">Đăng ký tài khoản khách hàng</span>
                    <span onclick="changeFormToSignInAdmin()">/ Đăng nhập tài khoản Admin</span>
                </div>
                <!-- Đăng ký tài khoản cho khách hàng -->
                <div class="signUp">
                    <h1>Đăng ký</h1>
                    <form id="signUpForm" action="" onsubmit="return validateSignUp()">
                        <label for="">Tài khoản email</label><br>
                        <input type="text" name="" id=""><br>
                        <label for="">Họ và tên</label><br>
                        <input type="text" name="" id=""><br>
                        <label for="">Địa chỉ</label><br>
                        <input type="text" name="" id=""><br>
                        <label for="txtPassWordSignUp">Mật khẩu</label><br>
                        <input type="password" name="" id="txtPassWordSignUp"><br>
                        <label for="txtConfirmPassWordSignUp">Nhập lại mật khẩu</label><br>
                        <input type="password" name="" id="txtConfirmPassWordSignUp"><br>
                        <input type="submit" value="Đăng ký">
                    </form>
                    <span onclick="changeFormToSignIn()">Đăng nhập</span>
                </div>
                <!-- Đăng nhập tài khoản cho Admin -->
                <div class="signInAdmin">
                    <h1>Admin</h1>
                    <form id="signInAdminForm" action="">
                        <label for="">Tài khoản</label><br>
                        <input type="text" name="" id=""><br>
                        <label for="">Mật khẩu</label><br>
                        <input type="password" name="" id=""><br>
                        <input type="submit" value="Đăng nhập">
                    </form>
                    <span onclick="changeFormToSignIn()">Đăng nhập tài khoản khách hàng</span>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function changeFormToSignUp() {
            document.getElementById('signInForm').reset();
            document.querySelector('.signIn').style.display = 'none';
            document.querySelector('.signUp').style.display = 'block';
        }

        function changeFormToSignIn() {
            document.getElementById('signUpForm').reset();
            document.getElementById('signInAdminForm').reset();
            document.querySelector('.signUp').style.display = 'none';
            document.querySelector('.signIn').style.display = 'block';
            document.querySelector('.signInAdmin').style.display = 'none';
        }

        function changeFormToSignInAdmin() {
            document.getElementById('signInForm').reset();
            document.querySelector('.signIn').style.display = 'none';
            document.querySelector('.signInAdmin').style.display = 'block';
        }

        function validateSignUp() {
            var password = document.getElementById('txtPassWordSignUp');
            var confirm = document.getElementById('txtConfirmPassWordSignUp');
            if (password.value === '' || confirm.value === '') {
                alert("Vui lòng nhập mật khẩu");
                return false;
            } else if (password.value !== confirm.value) {
                password.value = '';
                confirm.value = '';
                alert("Mật khẩu không khớp, vui lòng nhập lại");
                return false;
            } else return true;
        }
    </script>
</body>
</html>