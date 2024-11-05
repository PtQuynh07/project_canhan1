<?php
    include "./controller/userController.php";
    $action = isset($_GET['action']) ? $_GET['action'] : 'home';

    $userController = new UserController();
    switch($action){
        case 'home':
            $userController->showSanpham();
            break;
        case 'spdanhmuc':
            $id = $_GET['maloai'];
            $userController->showSpDanhmuc($id);
            break;
        case 'spchitiet':
            $id = $_GET['masanpham'];
            $userController->showSpChitiet($id);
            break;
        case 'dangki':
            $userController->loadViewDangKi();
            break;
        case 'addKhachhang':
            $userController->addKhachhang();
            break;
        case 'login':
            $userController->checkAccController();
            break;
        case 'search':
            $id = $_GET['masanpham'];
            $userController->search($id);
            break;
    }
?>