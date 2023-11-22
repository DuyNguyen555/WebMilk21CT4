<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/add.css">
    <title>Thêm sản phẩm</title>
</head>
<body>
<?php
    if(isset($_POST["btnThem"]))
    {
        require_once("../../sql/connect.php");
        $ma = $_POST["txtMa"];
        $ten = $_POST["txtTen"];
        $loai = $_POST["sltLoai"];
        $gia = $_POST["txtGia"];
        $maH = $_POST["sltMaH"];
        $sql = "insert into sua(maSua, tenSua, loaiSua, giaTien, maHang)
                            values('$ma', '$ten', '$loai', $gia, '$maH')";
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
        <h1>THÊM SẢN PHẨM</h1>
    </header>
        <div class="admin-content">            
            <div class="content">
                <form method ="post">
                    <table>
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td><input type="text" name="txtMa"></td>
                        </tr>
                        <tr>
                            <td>Tên sản phẩm</td>
                            <td><input type="text" name="txtTen"></td>
                        </tr>
                        <tr>
                            <td>Loại sản phẩm</td>
                            <td><select name="sltLoai">
                                    <option value="sữa tươi">Sữa tươi</option>
                                    <option value="sữa chua">Sữa chua</option>
                                    <option value="sữa đặc">Sữa đặc</option>
                                    <option value="sữa thực vật">Sữa thực vật</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Giá sản phẩm</td>
                            <td><input type="number" name="txtGia"></td>
                        </tr>
                        <tr>
                            <td>Mã hãng</td>
                            <td><select name="sltMaH">
                                    <option value="AB">AB</option>
                                    <option value="DL">DL</option>
                                    <option value="NTF">NTF</option>
                                    <option value="TH">TH</option>
                                    <option value="VNM">VNM</option>
                                    <option value="VS">VS</option>                            
                                </select>
                            </td>
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