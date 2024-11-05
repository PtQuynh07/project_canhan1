<?php
function uploadFile($file, $folderUpload = '../public/img/') {
    // Thêm time() vào để chống trùng file name
    $pathStorage =  $folderUpload . time() . basename($file['name']);
    // echo $pathStorage;
    // die();
    
    $from   = $file['tmp_name'];
    $to     = $pathStorage; // Đường dẫn tuong đối

    // function move_uploaded_file(string $from, string $to): bool { }
    // @param string $from — The filename of the uploaded file.
    // @param string $to — The destination of the moved file.
    // @return bool
    // If filename is not a valid upload file, then no action will occur, and move_uploaded_file will return false.
    // @link https://php.net/manual/en/function.move-uploaded-file.php
    if (move_uploaded_file($from, $to)) {
        return basename($pathStorage); // Trả về đường dẫn để lưu DB
        // ../public/img/346759879x.png
    } 

    return null; // Upload fail trả về null
}

?>