<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/a_data/tambah.php";
    include_once "views/template.php";
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(empty($_POST['email'])){
                $err['email']="Wajib";
            }
            if(empty($_POST['password'])){
                $err['password']="wajib diisi";
            }
            if(empty($_POST['status'])){
                $err['status']="wajib diisi";
            }

            if(!isset($err)){
             //update
             if(!empty($_POST['id_admin'])){
             $sql="update data_login set email='$_POST[email]', password='$_POST[password]', status='$_POST[status]' where md5(id_admin)='$_POST[id_admin]'";
             //save
            }else{
                $sql = "INSERT INTO data_login (email, password, status) 
                VALUES ('$_POST[email]', '$_POST[password]', '$_POST[status]')";
            }
            if ($conn->query($sql) === TRUE) {
                header('Location: http://localhost:8080/sipemA/admin/?mode=a_data');
            }else {
                $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
            }}
        }else{
            $err['msg']="tidak diijinkan";
        }
    break;
    case 'edit':
        $a_data ="select * from data_login where md5(id_admin)='$_GET[id]'";
        $a_data=$conn->query($a_data);
        $_POST=$a_data->fetch_assoc();
        //var_dump($produk);
        $_POST['id_admin']=md5($_POST['id_admin']);
        $content="views/a_data/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $a_data ="delete from data_login where (id_admin) ='$_GET[id]'";
        $a_data=$conn->query($a_data);
        header('Location: http://localhost:8080/sipemA/admin/?mode=a_data');
    break;
    default:
    $sql = "select * from data_login";
    $a_data=$conn->query($sql);
    $conn->close();
    $content="views/a_data/tampil.php";
    include_once "views/template.php";
}
?>