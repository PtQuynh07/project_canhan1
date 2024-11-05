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
        /*css slide*/
        .banner img{
            margin-top: 10px;
            width: 1365px;
            height: 650px;
            position: relative;
        }
        .next {
            right: 0;
            border-radius: 70px;
        }
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        .nut{
            position: absolute;
            top: 750px;
            left:50%;
            transform:translateX(-50%);
        }
        .active, .dot:hover {
            background-color: #717171;
        }
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }
        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
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
        <div class="banner">
            <div class="anh fade">
                <img src="./public/img/banner1.jpg" style="width: 100%;">
            </div>
            <div class="anh fade">
                <img src="./public/img/banner2.jpg" style="width: 100%;">
            </div>
            <div class="anh fade">
                <img src="./public/img/banner4.jpg" style="width: 100%;">
            </div>
            <div class="anh fade">
                <img src="./public/img/banner5.jpg" style="width: 100%;">
            </div>
            <div class="anh fade">
                <img src="./public/img/banner6.jpg" style="width: 100%;">
            </div>
            <div class="anh fade">
                <img src="./public/img/banner7.jpg" style="width: 100%;">
            </div>
        </div>

        <div class = "nut" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            <span class="dot" onclick="currentSlide(4)"></span> 
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
        </div>
            <script>
                let slideIndex = 1;
                showSlides(slideIndex);
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }
                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }
                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("anh");
                    let dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                }
                setInterval(function() {
                    plusSlides(1);
                }, 5000);
            </script>
        <article>
            <div class="spnoibat">
                <h1>Sản Phẩm Dành Cho Bạn</h1>
                <div class="khungsanphams">
                    <?php
                        foreach($spdanhmucs as $spdanhmuc){
                    ?>
                        <div class="sanphams">
                            <a href="?action=spchitiet&masanpham=<?php echo $spdanhmuc['masanpham'] ?>">
                                <div class="sanpham">
                                    <div><img src="./public/img/<?php echo $spdanhmuc['img'] ?>" alt=""></div>
                                    <div class="tensp"><?php echo $spdanhmuc['tensanpham'] ?></div>
                                    <div class="giasp"><?php echo $spdanhmuc['dongia'] ?></div>
                                </div>
                            </a>
                        </div>
                    <?php
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