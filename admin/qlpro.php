<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="qlpro.css">
    <title>Quản lý sản phẩm</title>
</head>
<body>
    <header>
        <h1>QUẢN LÝ SẢN PHẨM</h1>
    </header>
    <div class="admin-content">
        <div class="content">
            <table>
                <tr>
                    <td>Mã sản phẩm</td>
                    <td><input></td>
                </tr>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input></td>
                </tr>
                <tr>
                    <td>Loại sản phẩm</td>
                    <td><select id="selectLoai" name="LoaiSua">
                            <option value="tuoi">Sữa tươi</option>
                            <option value="chua">Sữa chua</option>
                            <option value="dac">Sữa đặc</option>
                            <option value="tv">Sữa thực vật</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Giá sản phẩm</td>
                    <td><input></td>
                </tr>
                <tr>
                    <td>Mã hãng</td>
                    <td><select id="selectMa" name="MaHang">
                            <option value="">AB</option>
                            <option value="chua">DL</option>
                            <option value="dac">NTF</option>
                            <option value="tv">TH</option>
                            <option value="dac">VNM</option>
                            <option value="tv">VS</option>                            
                        </select>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>