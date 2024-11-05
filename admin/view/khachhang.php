<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí Khách Hàng</title>
    <style>
        h1{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            margin: 20px auto;
            text-align: center;
            width: 80%;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            text-decoration: none;
            color: blue;
            font-weight: bold;
        }
        a:hover {
                color: red;
        }
        .them {
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 20px;
                margin-left: 137px;
                height: 40px;
                width: 200px;
        }
        .them:hover {
                background-color: #45a049;
        }
        .btn{
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
        }
        .btn:hover{
            background-color: #DD0000;
        }
    </style>
</head>
<body>
    <?php include "./view/khung/khung.php" ?>
    <h1>Quản lí danh mục</h1>
    <table border="1px">
        <tr>
            <th>Mã Khách Hàng</th>
            <th>Tên Khách Hàng</th>
            <th>Email</th>
            <th>Quản trị</th>
            <th>Xóa</th>
        </tr>
        <?php
            foreach($khachhangs as $khachhang){
        ?>
            <div class="sanpham">
                <tr>
                    <td><?php echo $khachhang['makh'] ?></td>
                    <td><?php echo $khachhang['ten'] ?></td>
                    <td><?php echo $khachhang['email'] ?></td>
                    <td><?php echo $khachhang['role'] ? 'Admin' : 'Khách hàng' ?></td>
                    <td><a onclick="return confirm('Bạn có muốn xóa sản phẩm không')" href="?action=deleteKhachhang&makh=<?php echo $khachhang['makh'] ?>"><button class="btn">Xóa</button></a></td>
                </tr>
            </div>
        <?php
            }
        ?>
    </table>
</body>
</html>