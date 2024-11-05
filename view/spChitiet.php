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
        hr{
            border: 0.5px solid #EEEEEE;
        }
        /* css footer */
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
        article{
            width: 100%;
            margin-top: 30px;
            margin-bottom: 40px;
        }
        .sanphams{
            width: 100%;
            display: flex;
            /* justify-content: space-around; */
        }
        .sanphams .noidung{
            width: 100%;
            margin-left: 80px;
            font-size: 23px;
            padding-top: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-transform: capitalize;
        }
        .sanphams .noidung .gia{
            padding-top: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
            color: #f79217;
        }
        .sanphams img{
            margin-left: 60px;
            width: 450px;
            height: 550px;
        }
        .mau,
        .sl {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            padding-top: 10px;
        }

        select,
        input[type="number"] {
            padding: 8px;
            margin-top: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 10%;
        }
        select {
            width: 50%;
        }
        h5{
            color: #3b943b;
            margin-bottom: 10px;
            margin-top: 15px;
            text-transform: none;
        }
        .btn button{
            width: 50%;
            height: 50px;
            font-size: 18px;
            background-color: #6b7c88;
            border: none;
            color: white;
            font-weight: 100px;
        }
        .btn button:hover{
            width: 50%;
            height: 50px;
            font-size: 18px;
            background-color: #6b7c78;
            border: none;
            color: white;
            font-weight: 100px;
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
                    <input type="hidden" name="action" value="search">
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
        <hr>
        <article>
            <div class="sanphams">
                <div><img src="./public/img/<?php echo $spchitiets['img'] ?>"></div>
                <div class="noidung">
                    <div class="ten"><?php echo $spchitiets['tensanpham'] ?></div>
                    <div class="gia"><?php echo $spchitiets['dongia'] ?></div>
                    <h5>Khuyến mãi trở lại trường lên đến 50% với mã: School</h5>
                    <div class="mau">
                        <label>Màu Sắc</label>
                        <form action="">
                            <select name="" id="">
                                <option selected disabled>Chọn màu</option>
                                <option>Đen</option>
                                <option>Trắng</option>
                            </select>
                        </form>
                    </div>
                    <div class="mau">
                        <label>Kích Cỡ</label>
                        <form action="">
                            <select name="" id="">
                                <option selected disabled>Chọn size</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        </form>
                    </div>
                    <div class="sl">
                        <label>Số lượng</label>
                        <form action="">
                            <input type="number" placeholder="1">
                        </form>
                    </div>
                    <div class="btn">
                        <button>Thêm vào giỏ hàng</button>
                    </div>
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