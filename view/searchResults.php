<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOODING SHOP</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .layout{
            margin: 0 auto;
            width: 1365px;
        }
        header{
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header .logo img{
            margin-left: 10px;
            width: 180px;
            height: 30px;
        }
        input[type=search]{
            width: 350px;
            height: 35px;
            border-radius: 30px;
            border: 1px solid #999;
            font-size: 20px;
            padding-left: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        input[type=submit]{
            width: 100px;
            height: 35px;
            border-radius: 30px;
            border: 1px solid #999;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 20px;
        }
        header .login{
            display: flex;
            margin-right: 30px;
        }
        header .login p{
            margin-right: 7px;
            font-size: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-style: italic;
        }
        header .login a{
            text-decoration: none;
            color: #555;
        }
        .danhmuc{
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }
        .danhmuc a{
            text-decoration: none;
            font-size: 18px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: #555;
            position: relative;
        }
        .danhmuc a::before{
            content: "";
            position: absolute;
            top: 100%;
            left: 0;
            background: pink;
            width: 0%;
            height: 5px;
            transition: .5s;
        }
        .danhmuc a:hover{
            color: #000;
        }
        .danhmuc a:hover::before{
            width: 50%;
            transform: translate(100%);
        }
        .danhmuc2{
            padding-top: 10px;
        }
        footer{
            background-color: #eee;
            display: flex;
            justify-content: space-around;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        footer h1{
            color: #222;
        }
        footer a{
            text-decoration: none;
            color: #222;
        }
        footer a:hover{
            text-decoration: none;
            color: #0000CC;
            font-weight: bolder;
        }  
        /* css sanpham */
        h1{
            text-align: center;
            font-size: 30px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin-top: 30px;
        }
        article{
            width: 1365px;
            margin: 0 auto;
            padding-bottom: 40px;
        }
        .khungsanphams{
            margin-left: 35px;
            background-color: #efcac3;
            border-radius: 10px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            width: 95%;
        } 
        .sanphams{
            margin: 35px;
            border: 1px solid #cda398;
            background-color: #cda398;
            border-radius: 20px;
            text-align: center;
            padding: 25px;
        }
        .sanphams a{
            text-decoration: none;
        }
        .sanphams:hover{
            border: 1px solid #cda398;
            background-color: #cda398;   
            border-radius: 20px;
            box-shadow: -5px -5px  5px #CD9B9B;
        }
        .sanpham img{
            width: 300px;
            height: 350px;
        }
        .sanpham .tensp{
            margin-top: 15px;
            margin-bottom: 15px;
            font-size: 20px;
            color: black;
            font-weight: bolder;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .sanpham .giasp{
            color: #CD5555;
            font-size: 20px;
            font-weight: bolder;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        
    </style>
</head>
<body>
    <div class="layout">
        <div>
        <header>
            <div class="logo">
                <img src="./public/img/logo.png" alt="">
            </div>
            <div class="search">
                <form action="" method="get">
                    <input type="search" name="keyword" placeholder="Search...">
                    <input type="submit" value="Search">
                </form>
            </div>
            <div class="login">
                <p><a href="?action=dangki">Đăng kí</a></p>
                <p> / </p>
                <p><a href="?action=login">Đăng nhập</a></p>
            </div>
        </header>
        <nav>
            <div class="danhmuc">
                <a href="?action=home"><img width="40px" height="40px" src="./public/img/nuthome.png" alt=""></a>
                <?php 
                    foreach($danhmucs as $danhmuc){
                ?>
                    <div class="danhmuc2"><a href="?action=spdanhmuc&maloai=<?php echo $danhmuc['maloai'] ?>"><?php echo $danhmuc['tenloai'] ?></a></div>
                <?php
                    }
                ?>
            </div>
        </nav>
        <article>
            <div class="spnoibat">
                <h1>Sản Phẩm Tìm Kiếm</h1>
                <div class="khungsanphams">
                    <?php
                        if(!empty($results)){
                            foreach($results as $result){
                    ?>
                        <div class="sanphams">
                            <a href="?action=spchitiet&masanpham=<?php echo $result['masanpham'] ?>">
                                <div class="sanpham">
                                    <div><img src="./public/img/<?php echo $result['img'] ?>" alt=""></div>
                                    <div class="tensp"><?php echo $result['tensanpham'] ?></div>
                                    <div class="giasp"><?php echo $result['dongia'] ?></div>
                                </div>
                            </a>
                        </div>
                    <?php
                        }}else{
                            echo "<p>Không tìm thấy sản phẩm nào.</p>";
                        }
                    ?>
                </div>
            </div>
        </article>
        <footer>
              <div class="ft1">
                <h1>Cần giúp đỡ</h1>
                <p><a href="">Liên hệ chúng tôi</a></p>
                <p><a href="">Đang chuyển hàng</a></p>
                <p><a href="">Trả lại</a></p>
                <p><a href="">Câu hỏi thường gặp</a></p>
                <p><a href="">Tra cứu đơn hàng</a></p>
                <p><a href="">Yêu cầu sản phẩm</a></p>
              </div> 
              <div class="ft2">
                <h1>Liên kết khác</h1>
                <p><a href="">Thẻ quà tặng</a></p>
                <p><a href="">Câu chuyện của chúng tôi</a></p>
                <p><a href="">Chương trình liên kết</a></p>
                <p><a href="">Đánh giá</a></p>
                <p><a href="">Bản quyền & Thông báo nhãn hiệu</a></p>
              </div>  
              <div class="ft3">
                <h1>Liên hệ</h1>
                <a href=""><img width="65px" height="65px" src="./public/img/facebook-logo.webp" alt=""></a>
                <a href=""><img width="70px" height="70px" src="./public/img/instagram-logo.webp" alt=""></a>
              </div>
        </footer>

    </div>
</body>
</html>