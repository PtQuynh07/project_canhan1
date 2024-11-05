<?php
    include "./model/adminModel.php";
    class AdminController{
        public $adminModel;

        function __construct()
        {
            $this -> adminModel = new AdminModel();
        }

        //dang nhap, dang xuat
        function checkAccController(){
            include "./view/login.php";
            if(isset($_POST['btn_login'])){
                $ten = $_POST['ten'];
                $password = $_POST['matkhau'];
                // luu vao db
                $user = $this->adminModel->login($ten);
                // showData($user);
                // sau khi co thong ti nguoi dung can check xem co dung password khong
                if($user){
                    if($user['matkhau'] == $password) {
                        //luu thong tin vao session
                        $_SESSION['ten'] = $ten;
                        if($user['role'] == 1){
                            $_SESSION['role'] = $user['role'];
                            header("location:?action=home");
                            exit();
                        }else{
                            echo "<script>alert('Người dùng không thể truy cập trang quản trị');</script>";
                        } 
                    }else {
                        echo "<script>alert('Mật khẩu không đúng');</script>";
                    }
                }else {
                    echo "<script>alert('Người dùng không tồn tại');</script>";
                }
            }
        }
        function homeController(){
            include "./view/home.php";
        }

        //quan tri danh muc
        function danhmucController(){
            $danhmucs = $this -> adminModel->getAllloai();
            include "./view/danhmuc.php";
        }
        function addDanhmuc(){
            $loaihang = $this->adminModel->getAllloai();
            include "./view/addDanhmuc.php";
        }
        function storeDanhmuc(){
            if(isset($_POST['addDanhmuc'])){
                $tenloai = $_POST['tenloai'];
                $this ->adminModel->addDanhmuc($tenloai);
            }
            header("location:?action=danhmuc");
        }
        function deleteDanhmuc(){
            $id = $_GET['maloai'];
            $this->adminModel->destroyDanhmuc($id);
            header("location:?action=danhmuc");
        }
        function loadViewEditDanhmuc(){
            $id = $_GET['id'];
            $danhmuc = $this->adminModel->getDanhmucById($id);
            $loaihang = $this->adminModel->getAllloai();
            include "./view/editDanhmuc.php";
        }
        function updateDanhmuc(){
            $id = $_GET['maloai'];
            if(isset($_POST['editDanhmuc'])){
                $tenloai = $_POST['tenloai'];
                $this->adminModel->updateDanhmuc($tenloai,$id);
            }
            header("location:?action=danhmuc");
        }

        //quantri sanpham
        function sanphamController(){
            $sanphams = $this->adminModel->getAllsanpham();
            include "./view/sanpham.php";
        }
        function addsanpham(){
            $loaihangs = $this->adminModel->getAllloai();
            include "./view/addSanpham.php";
        }
        function storeSanpham(){
            if(isset($_POST['addSanpham'])){
                $tensanpham = $_POST['tensanpham'];
                $dongia = $_POST['dongia'];
                $ngaynhap = $_POST['ngaynhap'];
                $sp_noibat = $_POST['sp_noibat'];
                $loaihang = $_POST['maloai'];
                $img = $_FILES['img'];
                $img_path = uploadFile($img);
                $this->adminModel->addSanpham($tensanpham,$dongia,$ngaynhap,$sp_noibat,$loaihang,$img_path);
            }
            header("location:?action=sanpham");
        }
        function deleteSanpham(){
            $id = $_GET['masanpham'];
            $this ->adminModel->destroySanpham($id);
            header("location:?action=sanpham");
        }
        function loadViewEditSanpham(){
            $id = $_GET['masanpham'];
            $sanpham = $this ->adminModel->getSanphamById($id);
            $loaihangs = $this->adminModel->getAllloai();
            include "./view/editSanpham.php";
        }
        function updateSanpham(){
            $id = $_GET['masanpham'];
            if(isset($_POST['editSanpham'])){
                $ten = $_POST['ten'];
                $dongia = $_POST['dongia'];
                $loaihang = $_POST['loaihang'];
                $ngaynhap = $_POST['ngaynhap'];
                $sp_noibat = isset($_POST['sp_noibat']) ? 1 : 0;
                //lay du lieu file xuong
                $img = $_FILES['img'];
    
                if($img['size'] == 0){
                    // lay anh cu de luu lai
                    $sanpham = $this->adminModel->getSanphamById($id);
                    $img_path = $sanpham['img'];
                }else{
                    $img_path = uploadFile($img);
                }
                $this ->adminModel-> updateSanpham($ten, $dongia, $ngaynhap,$sp_noibat,$loaihang, $img_path, $id);
            }
            header("location:?action=sanpham");     
        }

        //quan tri khach hang
        function khachhangController(){
            $khachhangs = $this ->adminModel->getAllKhach();
            include "./view/khachhang.php";
        }
        function addKhachhang(){
            $loaihangs = $this->adminModel->getAllKhach();
            include "./view/addKhachhang.php";
        }
        function deleteKhachhang(){
            $id = $_GET['makh'];
            $this ->adminModel->destroyKhachhang($id);
            header("location:?action=khachhang");
        }
    }
?>