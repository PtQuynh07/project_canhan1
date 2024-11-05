<?php
    function connectDB(){
        $servername = 'localhost';
        $username = 'root';
        $passwork ='';
        $dbname = 'duanmau';

        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwork);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo "loi: " .$e->getMessage();
        }
    }
?>