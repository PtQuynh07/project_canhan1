<?php
    include "./model/userModel.php";
    class UserController{
        public $userModel;

        function __construct()
        {
            $this -> userModel = new UserModel();
        }
        //sanpham
        function showSanpham(){
            $spnoibats = $this->userModel->getSpNoibat();
            $danhmucs = $this->userModel->getDanhmuc();
            include "./view/home.php";
        }

        function showSpChitiet($id){
            $spchitiets = $this->userModel->getSpById($id);
            $spnoibats = $this->userModel->getSpNoibat();
            $danhmucs = $this->userModel->getDanhmuc();
            include "./view/spChitiet.php";
        }

        //sp danh muc
        function showSpDanhmuc($id){
            $spdanhmucs = $this->userModel->getSpDanhmuc($id);
            $danhmucs = $this->userModel->getDanhmuc();
            $danhmuc = $this->userModel->getDanhmucByid($id);
            $spchitiets = $this->userModel->getSpById($id);
            include "./view/spDanhmuc.php";
        }
        // dang ki, dang nhap
        function loadViewDangKi(){
            $khachhang = $this->userModel->getAllKhach();
            include "./view/dangki.php";
        }
        function addKhachhang(){
            if(isset($_POST['addKhachhang'])){
                $ten =$_POST['ten'];
                $email =$_POST['email'];
                if ($this->userModel->findUserByEmail($email)) {
                    echo "<script>alert('Email đã tồn tại!');</script>";
                    include './view/dangki.php';
                    exit();
                }else{
                    $matkhau =$_POST['matkhau'];
                    $this ->userModel->addKhachhang($ten, $email, $matkhau);
                    header("location:?action=login");
                }      
            }
        }
        function checkAccController(){
            include "./view/login.php";
            if(isset($_POST['btn_login'])){
                if($this->userModel->checkAccModel($_POST['ten'], $_POST['matkhau']) > 0){
                    $_SESSION['ten'] = $_POST['ten'];
                    header("location:?action=home");
                    exit();
                }else{
                    echo "<script>alert('Đăng nhập thất bại!')</script>";
                }
            }
        }
        // tim kiem
        function search($id){
            $spdanhmucs = $this->userModel->getSpDanhmuc($id);
            $danhmucs = $this->userModel->getDanhmuc();
            $danhmuc = $this->userModel->getDanhmucByid($id);
            $spchitiets = $this->userModel->getSpById($id);
            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
            $results = $this->userModel->searchSanphams($keyword);
            include "./view/searchResults.php";
        }
    }
?>