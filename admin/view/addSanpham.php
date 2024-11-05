<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 70%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        select,
        input[type="file"],
        input[type="submit"] {
            font-size: 15px;
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            font-size: 25px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php include "./view/khung/khung.php" ?>
    <div class="container">
        <h1>Thêm sản phẩm</h1>
        <form action="?action=storeSanpham" method="post" enctype="multipart/form-data">
            <label>Tên Sản Phẩm:</label>
            <input type="text" name="tensanpham"> <br> <br>
            <label>Đơn Giá:</label>
            <input type="text" name="dongia"> <br> <br>
            <label>Ngày Nhập Hàng:</label>
            <input type="date" name="ngaynhap"> <br> <br>
            <label>Sản Phẩm Nổi Bật:</label>
            <select id="sp_noibat" name="sp_noibat">
                <option value="0">Bình thường</option>
                <option value="1">Nổi bật</option>
            </select><br> <br>
            <label>Loại hàng:</label>
            <select name="maloai">
                <?php
                    foreach($loaihangs as $loaihang){
                ?>
                    <option value="<?php echo $loaihang['maloai'] ?>"><?php echo $loaihang['tenloai']?></option>
                <?php
                    }
                ?>
            </select> <br> <br>
            <label>Thêm ảnh:</label>
            <input type="file" name="img"> <br>
            <hr>
            <input type="submit" value="Thêm sản phẩm" name="addSanpham"> <br>
        </form>
    </div>
</body>
</html>