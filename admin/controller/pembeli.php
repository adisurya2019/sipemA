<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/pembeli/tambah.php";
    include_once "views/template.php";
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(empty($_POST['nama_user'])){
                $err['nama_user']="Wajib";
            }
            if(empty($_POST['email'])){
                $err['email']="Wajib";
            }
            if(empty($_POST['password'])){
                $err['password']="wajib diisi";
            }
            if(empty($_POST['telp_user'])){
                $err['telp_user']="wajib diisi";
            }
            if (empty($_POST['alamat'])) {
                $err['alamat']="wajib diisi";
            }
            if(!isset($err)){
             //update
             if(!empty($_POST['telp_user'])){
             $sql="update data_user set nama_user='$_POST[nama_user]' email='$_POST[email]', password='$_POST[password]', alamat='$_POST[alamat]' where md5(telp_user)='$_POST[telp_user]'";
             //save
            }else{
                $sql = "INSERT INTO data_user (nama_user, email, password, alamat, telp_user) 
                VALUES ('$_POST[nama_user]', '$_POST[email]', '$_POST[password]', '$_POST[alamat]', '$_POST[telp_user]')";
            }
            if ($conn->query($sql) === TRUE) {
                header('Location: http://localhost:8080/sipemA/admin/?mod=pembeli');
            }else {
                $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
            }}
        }else{
            $err['msg']="tidak diijinkan";
        }
    break;
    case 'edit':
        $pembeli ="select * from data_user where md5(telp_user)='$_GET[id]'";
        $pembeli=$conn->query($pembeli);
        $_POST=$pembeli->fetch_assoc();
        //var_dump($pembeli);
        $_POST['telp_user']=md5($_POST['telp_user']);
        $content="views/pembeli/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $pembeli ="delete from data_user where (telp_user) ='$_GET[id]'";
        $pembeli=$conn->query($pembeli);
        header('Location: http://localhost:8080/sipemA/admin/?mod=pembeli');
    break;
    default:
    $sql = "select * from data_user";
    $pembeli=$conn->query($sql);
    $conn->close();
    $content="views/pembeli/tampil.php";
    include_once "views/template.php";
}
?>