<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#">
    <title>Sửa sản phẩm</title>
</head>
<body>
<?php
    $ma = $_GET["key"];
    require_once("../../sql/connect.php");
    $sql = "select * from sua where maSua = '$ma'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    if(isset($_POST["btnSua"]))
    {
        require_once("../../sql/connect.php");
        $ma = $_POST["txtMa"];
        $ten = $_POST["txtTen"];
        $loai = $_POST["sltLoai"];
        $gia = $_POST["txtGia"];
        $maH = $_POST["sltMaH"];
        $sql = "update sua set maSua = '$ma', tenSua = '$ten', loaiSua = '$loai', giaTien = $gia, maHang = '$maH'
                            where maSua = '$ma'";
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
        <h1>SỬA SẢN PHẨM</h1>
    </header>
    <form method ="post">
        <div class="admin-content">            
            <div class="content">
                <table>
                    <tr>
                        <td>Mã sản phẩm</td>
                        <td><input type="text" name="txtMa" value="<?php echo $row['maSua']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tên sản phẩm</td>
                        <td><input type="text" name="txtTen" value="<?php echo $row['tenSua']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Loại sản phẩm</td>
                        <td><select name="sltLoai" <?php echo $row['loaiSua']; ?>>
                                <option value="sữa tươi">Sữa tươi</option>
                                <option value="sữa chua">Sữa chua</option>
                                <option value="sữa đặc">Sữa đặc</option>
                                <option value="sữa thực vật">Sữa thực vật</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Giá sản phẩm</td>
                        <td><input type="number" name="txtGia" value="<?php echo $row['giaTien']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Mã hãng</td>
                        <td><select name="sltMaH" <?php echo $row['maHang']; ?>>
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
                        <td><input type="submit" name="btnSua" value="Sửa"></td>
                        <td><input type="reset" name="btnHuy" value="Hủy"></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</body>
</html>