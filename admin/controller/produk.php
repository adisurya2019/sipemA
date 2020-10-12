<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        echo 'Tambah Data';
    break;
    case 'edit':
        echo 'Edit';
    break;
    default:
    $sql = "select * from produk";
    $produk=$conn->query($sql);
    $conn->close();
    $content="views/produk/tampil.php";
    include_once "views/template.php";
}
?>