<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí Danh Mục</title>
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
    <a href="?action=addDanhmuc"><button class="them">Thêm danh mục</button></a>
    <table border="1px">
        <tr>
            <th>Mã Loại</th>
            <th>Tên Loại</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php
            if (isset($danhmucs) && is_array($danhmucs)) {
            foreach($danhmucs as $danhmuc){
        ?>
            <div class="sanpham">
                <tr>
                    <td><?php echo $danhmuc['maloai'] ?></td>
                    <td><?php echo $danhmuc['tenloai'] ?></td>
                    <td><a href="?action=editDanhmuc&id=<?php echo $danhmuc['maloai'] ?>"><button class="btn">Sửa</button></a></td>
                    <td><a onclick="return confirm('Bạn có muốn xóa sản phẩm không')" href="?action=deleteDanhmuc&maloai=<?php echo $danhmuc['maloai'] ?>"><button class="btn">Xóa</button></a></td>
                </tr>
            </div>
        <?php
            }}
        ?>
    </table>
</body>
</html>