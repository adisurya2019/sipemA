<h4>Tambah Data</h4>
<br>
<form action="index.php?mod=produk&page=save" method="POST">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">Nama Produk</label>
            <input type="text" name="nama_produk" required value="<?=(isset($_POST['nama_produk']))?$_POST['nama_produk']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['nama_produk']))?$err['nama_produk']:'';?></span>
        </div>
        <div class="form-group">
            <label for="">ID Produksi</label>
            <input type="text" name="id_produksi" required value="<?=(isset($_POST['id_produksi']))?$_POST['id_produksi']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="">Jenis Produk</label>
            <input type="text" name="jenis_produk" required value="<?=(isset($_POST['jenis_produk']))?$_POST['jenis_produk']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="">Harga</label>
            <input type="number" name="harga" required value="<?=(isset($_POST['harga']))?$_POST['harga']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>