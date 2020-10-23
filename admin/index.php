<?php 
include_once '../config/Config.php';
$con = new config();
if($con ->auth()){
    //panggil fungsi
    switch(@$_GET['mod']){
        case 'a_data' :
            include_once 'controller/a_data.php'; 
        case 'produk' :
            include_once 'controller/produk.php';
            break;
        default;
            include_once 'controller/home.php';
    }
}else{
    //panggil login
    include_once 'controller/login.php';
}
?>