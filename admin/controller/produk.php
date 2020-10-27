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
            //photo cek
            $target_dir = "../media/";
            $photo = basename($_FILES["fileToUpload"]["name"]);
            $target_file = $target_dir . $photo;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                 echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                   // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    $_POST['fileToUpload'] = $photo;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
            }

            if(!isset($err)){
             //update
             if(!empty($_POST['kode_produk'])){
             $sql="update produk set nama_produk='$_POST[nama_produk]', kode_produk='$_POST[kode_produk]', jenis_produk='$_POST[jenis_produk]', harga='$_POST[harga]', photo='$_POST[photo]' where md5(id_produksi)='$_POST[id_produksi]'";
             //save
            }else{
                $sql = "INSERT INTO produk (nama_produk, jenis_produk, harga, fileToUpload, id_produksi) 
                VALUES ('$_POST[nama_produk]', '$_POST[jenis_produk]', '$_POST[harga]', '$_POST[fileToUpload]', '$_POST[id_produksi]')";
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