<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí Sản Phẩm</title>
    <style>
        h1{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            margin: 20px auto;
            text-align: center;
            width: 90%;
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
        img {
            width: 80px;
            height: auto;
            border-radius: 4px;
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
                margin-left: 68px;
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
    <h1>Quản lí sản phẩm</h1>
    <a href="?action=addSanpham"><button class="them">Thêm sản phẩm</button></a>
    <table border="1px">
        <tr>
            <th>Mã Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Đơn giá</th>
            <th>Image</th>
            <th>Ngày nhập hàng</th>
            <th>Sản phẩm nổi bật</th>
            <th>Mã loại</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php
            foreach($sanphams as $sanpham){
        ?>
            <div class="sanpham">
                <tr>
                    <td><?php echo $sanpham['masanpham'] ?></td>
                    <td><?php echo $sanpham['tensanpham'] ?></td>
                    <td><?php echo $sanpham['dongia'] ?></td>
                    <td><img src="../public/img/<?php echo $sanpham['img'] ?>" alt="<?php echo $sanpham['img']?>"></td>
                    <td><?php echo $sanpham['ngaynhap'] ?></td>
                    <td><?php echo $sanpham['sp_noibat']? 'Nổi bật' : 'Bình thường' ?></td>
                    <td><?php echo $sanpham['tenloai'] ?></td>
                    <td><a href="?action=editSanpham&masanpham=<?php echo $sanpham['masanpham'] ?>"><button class="btn">Sửa</button></a></td>
                    <td><a onclick="return confirm('Bạn có muốn xóa sản phẩm không')" href="?action=deleteSanpham&masanpham=<?php echo $sanpham['masanpham'] ?>"><button class="btn">Xóa</button></a></td>
                </tr>
            </div>
        <?php
            }
        ?>
    </table>
</body>
</html>