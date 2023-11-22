<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/add.css">
    <title>Thêm hãng sữa</title>
</head>
<body>
<?php
    if(isset($_POST["btnThem"]))
    {
        require_once("../../sql/connect.php");
        $ma = $_POST["txtMa"];
        $ten = $_POST["txtTen"];
        $sdt = $_POST["txtSdt"];
        $dchi = $_POST["txtDchi"];
        $email = $_POST["txtEmail"];
        $sql = "insert into hang(maHang, tenHang, dienThoai, diaChi, email)
                            values('$ma', '$ten', $sdt, '$dchi', '$email')";
        $result = mysqli_query($connect, $sql);
        if($result)
        {
            mysqli_close($connect);
            header("location:list.php");
        }
        else
        {
            echo"Thêm mới thất bại".mysqli_error($connect);
        }
    }
?>
    <header>
        <h1>THÊM HÃNG SỮA</h1>
    </header>
        <div class="container">            
            <div class="content">
                <form method ="post">
                    <table>
                        <tr>
                            <td>Mã hãng</td>
                            <td><input type="text" name="txtMa"></td>
                        </tr>
                        <tr>
                            <td>Tên hãng</td>
                            <td><input type="text" name="txtTen"></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><input type="number" name="txtSdt"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="txtDchi"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="txtEmail"></td>
                        </tr>                                               
                        <tr>
                            <td><input type="submit" name="btnThem" value="Thêm"></td>
                            <td><input type="reset" name="btnHuy" value="Hủy"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
</body>
</html>