<?php
include "../includes/connect.php";
class AdminModel{
    public $conn;
    function __construct()
    {
        $this -> conn = connectDB();
    }

    //dang nhap, dang xuat
    function login($ten) {
        $sql = "SELECT * FROM khachhang WHERE ten='$ten'";
        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    //danh muc
    function getAllloai(){
        $sql = "SELECT * FROM loaihang";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    function addDanhmuc($tenloai){
        $sql = "INSERT INTO loaihang (tenloai) VALUES ('$tenloai')";
        $this->conn->query($sql)->rowCount();
    }
    function destroyDanhmuc($id){
        $sql = "DELETE FROM loaihang WHERE maloai = $id";
        $this->conn->query($sql);
    }
    function getDanhmucById($id){
        $sql = "SELECT * FROM loaihang WHERE maloai = $id";
        $result= $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    function updateDanhmuc($tenloai,$id){
        $sql = "UPDATE loaihang set tenloai = '$tenloai' WHERE maloai = '$id'";
        $this->conn->query($sql);
    }

    //sanpham
    function getAllsanpham(){
        $sql = "SELECT masanpham,tensanpham,dongia,img,ngaynhap,sp_noibat,loaihang.tenloai FROM sanpham 
        JOIN loaihang ON sanpham.maloai=loaihang.maloai";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    function addSanpham($tensanpham,$dongia,$ngaynhap,$sp_noibat,$loaihang,$img_path){
        $sql = "INSERT INTO sanpham(tensanpham,dongia,ngaynhap,sp_noibat,maloai,img) 
        VALUES ('$tensanpham','$dongia','$ngaynhap','$sp_noibat','$loaihang','$img_path')";
        $this->conn->query($sql);
    }
    function destroySanpham($id){
        $sql = "DELETE FROM sanpham WHERE masanpham = $id ";
        $this->conn->query($sql);
    }
    function getSanphamById($id){
        $sql = "SELECT * FROM sanpham WHERE masanpham = $id";
        $result= $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    function updateSanpham($ten, $dongia, $ngaynhap,$sp_noibat,$loaihang, $img_path, $id){
        $sql = "UPDATE sanpham set tensanpham = '$ten', dongia='$dongia', 
        ngaynhap='$ngaynhap', sp_noibat='$sp_noibat', maloai= '$loaihang', img='$img_path' WHERE masanpham = '$id'";
        $this->conn->query($sql);
    }
    
    //khach hang
    function getAllKhach(){
        $sql = "SELECT * FROM khachhang";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    function destroyKhachhang($id){
        $sql = "DELETE FROM khachhang WHERE makh = $id ";
        $this->conn->query($sql);
    }
}
?>