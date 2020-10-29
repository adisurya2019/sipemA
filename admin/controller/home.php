<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-default" >
    <div class="container">
     
      <div class="navbar-header" style= "margin: 10px; ">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dropdown">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">Sistem Informasi Penjualan "Dessert By Aiko"</a>
      </div>
      <div class="collapse navbar-collapse" id="dropdown">
        <ul class="navbar-nav ml-auto">
          <ul class="nav navbar-nav" style= "margin: 10px;">
            <li><a href="index.php?mod=home">Home<span class="sr-only">(current)</span></a></li>
            <li><a href="index.php?mod=a_data">Data Admin</a></li>
            <li><a href="index.php?mod=pembeli">Data Pembeli</a></li>
            <li><a href="index.php?mod=produk">Data Produk</a></li>
          </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style= "margin: 10px;">
          <li><a href="../admin/controller/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="content">
    <div class="container">
    <div class="container-fluid">
      <h4>Home</h4>
      <p>Selamat Datang di Sistem Informasi Penjualan Dessert By Aiko ^_^</p>
      <p>...</p>
      <br>
      <h4>Daftar Produk</h4>
      <div class="row">
        <table class="table">
          <tbody>
            <?php 
                 $koneksi = mysqli_connect ("localhost", "root", "", "aiko_dessert&drink");
                 $produk = mysqli_query($koneksi,"select * from produk");
                 
                 {
                  $no=1; 
                  foreach($produk as $row){?>

            <div class="card" style="width: 18rem; float: left; margin: 20px;" >
              <img src="../media/<?= $row['fileToUpload']?>" height="200px" class="card-img-top">
              <div class="card-body" align="center">
                <h5 class="card-title"> <b><?=$row['nama_produk']?></b></h5>
                <p class="card-text"><?=$row['jenis_produk']?></p>
                <p class="card-text">Rp. <?=number_format($row['harga'])?></p>
                <a href="#" class="btn btn-warning">Detail</a>

              </div>
            </div>

            </tr>
            <?php $no++;
                    }
           
            } 
            ?>
          </tbody>
        </table>
      </div>
            
    </div>
  </div>
            
</body>

</html>