<?php
    include "./includes/connect.php";
    class UserModel{
        public $conn;

        function __construct()
        {
            $this -> conn = connectDB();
        }
        //danh muc
        function getDanhmuc(){
            $sql = "SELECT * FROM loaihang";
            $result = $this ->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        function getDanhmucByid($id){
            $sql = "SELECT * FROM loaihang WHERE maloai='$id'";
            $result = $this ->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        }
        //san pham
        function getSpNoibat(){
            $sql = "SELECT * FROM sanpham WHERE sp_noibat = 1";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        function getSpById($id){
            $sql = "SELECT * FROM sanpham WHERE masanpham='$id'";
            $result = $this ->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        }
        
        // san pham danh muc
        function getSpDanhmuc($id){
            $sql = "SELECT * FROM sanpham WHERE maloai = '$id'";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        //dang ki, dang nhap
        function getAllKhach(){
            $sql = "SELECT * FROM khachhang";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        function addKhachhang($ten, $email, $matkhau){
            $sql = "INSERT INTO khachhang (ten, email, matkhau) VALUES ('$ten', '$email', '$matkhau')";
            $this->conn->query($sql)->rowCount();
        }
        function checkAccModel($ten, $matkhau){
            $sql = "SELECT * FROM khachhang WHERE ten='$ten' and matkhau='$matkhau'";
            return $this->conn->query($sql)->rowCount();
        }
        function findUserByEmail($email){
                $sql = "SELECT * FROM khachhang WHERE email = '$email'";
                $result = $this->conn->query($sql);
                return $result->fetch(PDO::FETCH_ASSOC);     
        }
        // tim kiem
        function searchSanphams($keyword){
            $sql = "SELECT * FROM sanpham WHERE tensanpham LIKE '%$keyword%'";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>