
            <?php 
include_once 'config/Config.php';
$con = new config();
if($con ->auth()){
    //panggil fungsi
    switch(@$_GET['mod']){
        case 'produk' :
            include_once 'produk.php';
        case 'u_data' :
            include_once 'u_data.php';
        case 'dashboard' :
             include_once 'dashboard.php';
    }
}else{
    //panggil login
    include_once 'u_login.php';
    
}
?>