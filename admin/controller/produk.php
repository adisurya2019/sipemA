<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/produk/tambah.php";
    include_once "views/template.php";
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(empty($_POST['nama_produk'])){
                $err['nama_produk']="Nama produk Wajib";
            }
            if(empty($_POST['id_produksi'])){
                $err['id_produksi']="wajib diisi";
            }
            if(empty($_POST['jenis_produk'])){
                $err['jenis_produk']="wajib diisi";
            }
            if(empty($_POST['harga'])){
                $err['harga']="wajib diisi";
            }
            if(!isset($err)){
             //update
             if(!empty($_POST['kode_produk'])){
             $sql="update produk set nama_produk='$_POST[nama_produk]', kode_produk='$_POST[kode_produk]', jenis_produk='$_POST[jenis_produk]', harga='$_POST[harga]' where md5(id_produksi)='$_POST[id_produksi]'";
             //save
            }else{
                $sql = "INSERT INTO produk (nama_produk, jenis_produk, harga, id_produksi) 
                VALUES ('$_POST[nama_produk]', '$_POST[jenis_produk]', '$_POST[harga]', '$_POST[id_produksi]')";
            }
            if ($conn->query($sql) === TRUE) {
                header('Location: http://localhost:8080/sipemA/admin/?mod=produk');
            }else {
                $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
            }}
        }else{
            $err['msg']="tidak diijinkan";
        }
    break;
    case 'edit':
        $produk ="select * from produk where md5(id_produksi)='$_GET[id]'";
        $produk=$conn->query($produk);
        $_POST=$produk->fetch_assoc();
        //var_dump($produk);
        $_POST['id_produksi']=md5($_POST['id_produksi']);
        $content="views/produk/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $produk ="delete from produk where (id_produksi) ='$_GET[id]'";
        $produk=$conn->query($produk);
        header('Location: http://localhost:8080/sipemA/admin/?mod=produk');
    break;
    default:
    $sql = "select * from produk";
    $produk=$conn->query($sql);
    $conn->close();
    $content="views/produk/tampil.php";
    include_once "views/template.php";
}
?>