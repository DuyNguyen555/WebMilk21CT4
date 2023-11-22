<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
<header>
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </header>
<?php
    require_once("../sql/connect.php");
    $sql = "select * from sua";
    $result = mysqli_query($connect, $sql);
?>
    <div class = "container">
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th>Mã</th>
                <th>Tên sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Giá</th>
                <th>Mã hãng</th>
                <th colspan="2"><a href="thempro.php">Thêm</a></th>
            </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
        ?>
            <tr>
                <td><?php echo $row["maSua"]; ?></td>
                <td><?php echo $row["tenSua"]; ?></td>
                <td><?php echo $row["loaiSua"]; ?></td>
                <td><?php echo $row["giaTien"]; ?></td>
                <td><?php echo $row["maHang"]; ?></td>
                <td><a href="capnhat.php?key=<?php echo $row['maSua']; ?>">Sửa</a></td>
                <td><a href="xoa.php?key=<?php echo $row['maSua']; ?>"
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