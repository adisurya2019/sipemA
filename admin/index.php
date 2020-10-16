<?php 
include_once '../config/Config.php';
$con = new config();
if($con ->auth()){
    //panggil fungsi
    switch(@$_GET['mod']){
        case 'produk' :
            include_once 'controller/produk.php';
            break;
        default;
            include_once 'controller/produk.php';
    }
}else{
    //panggil login
    include_once 'controller/login.php';
}
?>