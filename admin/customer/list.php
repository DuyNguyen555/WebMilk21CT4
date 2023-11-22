<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/list.css">
    <title>Danh sách khách hàng</title>
</head>
<body>
<header>
        <h1>DANH SÁCH KHÁCH HÀNG</h1>
    </header>
<?php
    require_once("../../sql/connect.php");
    $sql = "select * from khachhang";
    $result = mysqli_query($connect, $sql);
?>
    <div class = "container">
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th>Mã</th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Password</th>
                <th>Lựa chọn</th>
            </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
        ?>  
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["tenKh"]; ?></td>
                <td><?php echo $row["sdt"]; ?></td>
                <td><?php echo $row["diaChi"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
                <td><a href="delete.php?key=<?php echo $row['id']; ?>"
                    onclick="return confirm('Bạn có đồng ý xóa không?')">Xóa</a></td>
            </tr>
        <?php
            }
            mysqli_close($connect);
        ?>
        </table>
    </div>
</body>
</html>