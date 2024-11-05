<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <?php include "../../includes/connect.php";
            $conn = connectDB();
            if (!$conn) {
                die("Kết nối cơ sở dữ liệu thất bại");
            }
            
            $sql = "SELECT * FROM loaihang";
            $result = $conn->query($sql);
            $danhmucs = $result->fetchAll(PDO::FETCH_ASSOC);
        ?>
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
    </style>
</head>
<body>
    <div class="layout">
        <div>
        <header>
            <div class="logo">
                <img src="../public/img/logo.png" alt="">
            </div>
            <div class="search">
                <input type="search" name="timkiem" placeholder="Search...">
                <input type="submit" value="Search">
            </div>
            <div class="login">
                <p><a href="">Đăng kí</a></p>
                <p> / </p>
                <p><a href="">Đăng nhập</a></p>
            </div>
        </header>
        <nav>
            <div class="danhmuc">
                <a href=""><img width="40px" height="40px" src="../img/nuthome.png" alt=""></a>
                <?php
                    foreach($danhmucs as $danhmuc){
                ?>
                    <div class="danhmuc2">
                        <a href=""><?php echo $danhmuc['tenloai'] ?></a>
                    </div>
                <?php
                    }
                ?>
            </div>

        </nav>
        <div class="banner">
            <div class="anh fade">
                <img src="../img/banner1.jpg" style="width: 100%;">
            </div>
            <div class="anh fade">
                <img src="../img/banner2.jpg" style="width: 100%;">
            </div>
            <div class="anh fade">
                <img src="../img/banner4.jpg" style="width: 100%;">
            </div>
            <div class="anh fade">
                <img src="../img/banner5.jpg" style="width: 100%;">
            </div>
            <div class="anh fade">
                <img src="../img/banner6.jpg" style="width: 100%;">
            </div>
            <div class="anh fade">
                <img src="../img/banner7.jpg" style="width: 100%;">
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
    </div>
</body>
</html>