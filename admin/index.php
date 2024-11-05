<?php
    include "./controller/adminController.php";
    include '../includes/help.php';

    $action = isset($_GET['action']) ? $_GET['action'] : 'login';

    $adminController = new AdminController();
    switch($action){
        case 'login':
            $adminController->checkAccController();
            break;
        case 'home':
            $adminController->homeController();
            break;
        case 'danhmuc':
            $adminController->danhmucController();
            break;
        case 'addDanhmuc':
            $adminController->addDanhmuc();
            break;
        case 'storeDanhmuc':
            $adminController->storeDanhmuc();
            break;
        case 'deleteDanhmuc':
            $adminController->deleteDanhmuc();
            break;
        case 'editDanhmuc':
            $adminController->loadViewEditDanhmuc();
            break;
        case 'updateDanhmuc':
            $adminController->updateDanhmuc();
            break;
        //case sanpham
        case 'sanpham':
            $adminController->sanphamController();
            break;
        case 'addSanpham':
            $adminController->addsanpham();
            break;
        case 'storeSanpham':
            $adminController->storeSanpham();
            break;
        case 'deleteSanpham':
            $adminController->deleteSanpham();
            break;
        case 'editSanpham':
            $adminController->loadViewEditSanpham();
            break;
        case 'updateSanpham':
            $adminController->updateSanpham();
            break;
        //case taikhoan
        case 'khachhang':
            $adminController->khachhangController();
            break;
        case 'addKhachhang':
            $adminController->addKhachhang();
            break;
        case 'deleteKhachhang':
            $adminController->deleteKhachhang();
            break;
    }
?>