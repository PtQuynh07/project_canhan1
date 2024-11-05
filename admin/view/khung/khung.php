<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: #efcac3;
        }
        .layout{
            margin: 0 auto;
        }
        nav{
            height: 60px;
            background-color: #222;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav .menu1{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 81%;
            height: 100%;
        }
        nav .menu1 a{
            text-decoration: none;
            color: white;
            padding-left: 15px;
            font-weight: bolder;
            padding-top: 21px;
            padding-bottom: 21px;
            padding-right: 15px;
            transition: background-color 0.3s;
        }
        nav .menu1 a:hover{
            background-color: #999;
            text-decoration: none;
            color: red;
            font-weight: bolder;
        }
        nav .menu2{
            padding-right: 30px;
        }
        nav .menu2 button{
            height: 30px;
            width: 130px;
            border: 1px solid black;
            border-radius: 5px;
        }
        nav .menu2 button:hover{
            height: 30px;
            width: 130px;
            border: 1px solid black;
            border-radius: 5px;
            background-color: red;
        }
        nav .menu2 a{
            font-size: 17px;
            color: black;
            text-decoration: none;

        }

    </style>
</head>
<body>
    <div class="layout">
        <header></header>
        <nav>
            <div class="menu1">
                <a href="?action=home">HOME</a>
                <a href="?action=danhmuc">QUẢN TRỊ DANH MỤC</a>
                <a href="?action=sanpham">QUẢN TRỊ SẢN PHẨM</a>
                <a href="?action=khachhang">QUẢN TRỊ TÀI KHOẢN</a>
                <a href="?action=binhluan">QUẢN TRỊ BÌNH LUẬN</a>
                <a href="?action=thongke">QUẢN TRỊ THỐNG KÊ</a>
            </div>
            <div class="menu2">
                <button><a href="?action=login">Đăng xuất</a></button>
            </div>
        </nav>
    </div>
</body>
</html>