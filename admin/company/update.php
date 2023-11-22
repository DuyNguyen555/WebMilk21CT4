<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/update.css">
    <title>Sửa hãng sữa</title>
</head>
<body>
<?php
    $ma = $_GET["key"];
    require_once("../../sql/connect.php");
    $sql = "select * from hang where maHang = '$ma'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    if(isset($_POST["btnSua"]))
    {
        require_once("../../sql/connect.php");
        $ma = $_POST["txtMa"];
        $ten = $_POST["txtTen"];
        $sdt = $_POST["txtSdt"];
        $dchi = $_POST["txtDchi"];
        $email = $_POST["txtEmail"];
        $sql = "update hang set maHang = '$ma', tenHang = '$ten', dienThoai = $sdt, diaChi = '$dchi', email = '$email'
                            where maHang = $ma";
        $result = mysqli_query($connect, $sql);
        if($result)
        {
            mysqli_close($connect);
            header("location:list.php");
        }
        else
        {
            echo"Sửa thất bại".mysqli_error($connect);
        }
    }
?>
    <header>
        <h1>SỬA HÃNG SỮA</h1>
    </header>
        <div class="container">            
            <div class="content">
                <form method ="post">
                    <table>
                        <tr>
                            <td>Mã hãng</td>
                            <td><input type="text" name="txtMa" value="<?php echo $row['maHang']; ?>"></td>
                        </tr>                       
                        <tr>
                            <td>Tên hãng</td>
                            <td><input type="text" name="txtTen" value="<?php echo $row['tenHang']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><input type="number" name="txtSdt" value="<?php echo $row['dienThoai']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="txtDchi" value="<?php echo $row['diaChi']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="txtEmail" value="<?php echo $row['email']; ?>"></td>
                        </tr>   
                        <tr>
                            <td><input type="submit" name="btnSua" value="Sửa"></td>
                            <td><input type="reset" name="btnHuy" value="Hủy"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
</body>
</html>