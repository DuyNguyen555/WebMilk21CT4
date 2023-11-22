<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/list.css">
    <title>Danh sách hãng sữa</title>
</head>
<body>
<header>
        <h1>DANH SÁCH HÃNG SỮA</h1>
    </header>
<?php
    require_once("../../sql/connect.php");
    $sql = "select * from hang";
    $result = mysqli_query($connect, $sql);
?>
    <div class = "container">
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th>Mã hãng</th>
                <th>Tên hãng</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th colspan="2"><a href="add.php">Thêm</a></th>
            </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
        ?>  
            <tr>
                <td><?php echo $row["maHang"]; ?></td>
                <td><?php echo $row["tenHang"]; ?></td>
                <td><?php echo $row["dienThoai"]; ?></td>
                <td><?php echo $row["diaChi"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><a href="update.php?key=<?php echo $row['id']; ?>">Sửa</a></td>
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